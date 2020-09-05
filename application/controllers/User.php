<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		$full_name = $this->session->userdata('full_name');
		if($user_id == NULL){
			redirect('Welcome/userLogin','refresh');
		}
		$this->load->model('User_model');
		$this->load->model('Reviewtype_model');
		$this->load->helper('admin_helper');
	}

	public function index(){

       	$data = array();
       	$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['slider'] = 0;
		$full_name = $this->session->userdata('full_name');
		$data['all_review'] = $this->db->select('*')->from('tbl_review')->where('post_by', $full_name)->get()->result();
		$data['content'] = $this->load->view('frontend/page/my_account', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function postReview(){

		$data = array();
		$data['slider'] = 0;
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['content'] = $this->load->view('frontend/page/post_review', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function save_review(){

		$this->form_validation->set_rules('review_title', 'Review Title', 'required');
		$this->form_validation->set_rules('description', 'Review Description', 'required');

		if($this->form_validation->run() == FALSE){

			$data = array();
			$data['slider'] = 0;
			$data['all_type']=$this->Reviewtype_model->select_all_type();
			$data['content'] = $this->load->view('frontend/page/post_review', $data, true);
			$this->load->view('frontend/index',$data);
			return false;

		}else{

			$data['review_type'] = $this->input->post('review_type');
			$data['review_title'] = $this->input->post('review_title');
			$data['description'] = $this->input->post('description');

			$UserFullname = $this->session->userdata('full_name');
			$data['post_by'] = $UserFullname;

			$data['video_link'] = $this->uploadVideo();
			$data['photo'] = $this->uploadPhoto();

			$result = $this->User_model->commonInsert('tbl_review',$data);
			if($result){
				$msg = 'Review has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('User/index');
			}else{
				$msg ='Failed to Added !!!';
				$message = $this->msg($msg);
				redirect('User/index');
			}
			
		}//if

	}//save_review

//===================================================//

	public function MyProfile($userID){

		$data = array();
		$data['slider'] = 0;
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['selected_info'] = $this->User_model->selectedInfor_byID($userID);
		$data['content'] = $this->load->view('frontend/page/my_profile', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function update_user(){

		$userID = $this->input->post('user_id');
		$data['full_name'] = $this->input->post('full_name');
		$data['mobile_no'] = $this->input->post('mobile_no');
		$data['email'] = $this->input->post('email');
		$data['username'] = $this->input->post('username');

		$result = $this->User_model->updateUser($userID, $data);
		if($result){
			$msg = 'Information update successfully !!!';
			$message = $this->msg($msg);
			redirect('User/index');
		}else{
			$msg ='Failed to update !!!';
			$message = $this->msg($msg);
			redirect('User/index');
		}
	}

	public function ChangePassword($userID){

		$data = array();
		$data['message'] = $this->session->flashdata('message');
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['slider'] = 0;
		$data['userID'] = $userID;
		$data['content'] = $this->load->view('frontend/page/change_password', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function update_password(){

    	$userID = $this->input->post('user_id');
    	$old_pass = md5($this->input->post('old_password'));
    	$new_pass = md5($this->input->post('new_password'));
    	$con_pass = md5($this->input->post('confirm_password'));

    	$pre_info = $this->db->select('*')->from('tbl_user')->where('user_id', $userID)->get()->row();
    	$pre_pass = $pre_info->password;

  		if($pre_pass == $old_pass){

  			if($new_pass == $con_pass){

  				$result = $this->User_model->update_password($userID,$new_pass);

  				if($result){

  					$this->session->unset_userdata('user_id');
					$this->session->unset_userdata('full_name');
					$msg ="Password Updated Successfully ! Login Again";
					$message = $this->msg($msg);
					redirect('Welcome/userLogin');

				}else{

					$msg ="Failed to Update Password";
					$message = $this->msg($msg);
					redirect('User/ChangePassword/'.$userID);

				}//if

  			}else{

				$msg ="New Password and Confirm Password doesn't Match.!!!";
				$message = $this->msg($msg);
				redirect('User/ChangePassword/'.$userID);

  			}//if

  		}else{

			$msg ="Old Password doesn't Match.!!!";
			$message = $this->msg($msg);
			redirect('User/ChangePassword/'.$userID);

  		}//if

    }//update_password

	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('full_name');
		$sdata = array();
		$sdata['message'] = 'You are successfully Logout...!!!';
		$this->session->set_userdata($sdata);
		redirect('Welcome/index');
	}


}//User