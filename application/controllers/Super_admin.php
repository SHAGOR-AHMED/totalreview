<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends Base_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Superadmin_model');
		$this->load->model('User_model');
		$this->load->model('Review_model');
		$this->load->helper('admin_helper');
	}
	
	public function index(){
		$data=array();
		$data['total_admin'] = $this->Superadmin_model->get_admin();
		$data['total_review'] = $this->Review_model->get_review();
		$data['total_user'] = $this->User_model->get_users();
		$data['admin_maincontent']=$this->load->view('admin/dashbord',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	
//=============================== Manage Admin =========================================//

	public function manageAdmin(){

		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['all_admin'] = $this->Superadmin_model->get_admin();
		$data['admin_maincontent'] = $this->load->view('admin/manage_admin', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	public function create(){

		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_admin', '', true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_admin(){

		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('admin_email', 'Email', 'required');
		$this->form_validation->set_rules('admin_pass', 'Password', 'trim|required|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');

		if($this->form_validation->run() == FALSE){

			$data['admin_maincontent'] = $this->load->view('admin/add_admin', $data, true);
			$this->load->view('admin/admin_master',$data);
			return false;

		}else{

			$data['full_name'] = $this->input->post('full_name');
			$data['mobile'] = $this->input->post('mobile');
			$data['admin_email'] = $this->input->post('admin_email');
			$data['admin_pass'] = md5($this->input->post('admin_pass'));
			$data['status'] = $this->input->post('status');

			$result = $this->Superadmin_model->commonInsert('tbl_admin',$data);
			if($result){
				$msg = 'New Admin has been created successfully !!!';
				$message = $this->msg($msg);
				redirect('Super_admin/manageAdmin');
			}else{
				$msg ='Failed to create !!!';
				$message = $this->msg($msg);
				redirect('Super_admin/manageAdmin');
			}
			
		}//if

	}//save_admin

	public function edit_admin($id){

		$data = array();
		$data['admin_info'] = $this->Superadmin_model->select_admin_info_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_admin',$data,true);
		$this->load->view('admin/admin_master',$data);

	}

	public function update_admin(){

		$admin_id = $this->input->post('admin_id',true);
		$full_name = $this->input->post('full_name',true);
		$mobile = $this->input->post('mobile',true);
		$admin_email = $this->input->post('admin_email',true);
		$status = $this->input->post('status',true);

		$this->db->set('full_name', $full_name);
		$this->db->set('mobile', $mobile);
		$this->db->set('admin_email', $admin_email);
		$this->db->set('status', $status);
		

		$result = $this->Superadmin_model->Update_Admin($admin_id);

		if($result){
			$msg = 'Updated Successfully!!!';
			$message = $this->msg($msg);
			redirect('Super_admin/manageAdmin');

		}else{
			$msg = 'Failed to Update!!!';
			$message = $this->msg($msg);
			redirect('Super_admin/manageAdmin');
		}

	}//update_admin

	public function ChangePassword($adminID){

	 	$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
	 	$data['adminID'] = $adminID;
	 	$data['admin_maincontent'] = $this->load->view('admin/change_password',$data,true);
		$this->load->view('admin/admin_master',$data);
    }

    public function update_password(){

    	$adminID = $this->input->post('admin_id');
    	$old_pass = md5($this->input->post('old_password'));
    	$new_pass = md5($this->input->post('new_password'));
    	$con_pass = md5($this->input->post('confirm_password'));

    	$pre_info = $this->db->select('*')->from('tbl_admin')->where('admin_id', $adminID)->get()->row();
    	$pre_pass = $pre_info->admin_pass;

  		if($pre_pass == $old_pass){

  			if($new_pass == $con_pass){

  				$result = $this->Superadmin_model->update_password($adminID,$new_pass);

  				if($result){

  					$this->session->unset_userdata('admin_id');
					$this->session->unset_userdata('full_name');
					$msg = "Password Updated Successfully ! Login Again !!!";
					$message = $this->msg($msg);
					redirect('Admin/');

				}else{

					$msg = "Failed to Update Password !!!";
					$message = $this->msg($msg);
					redirect('Super_admin/ChangePassword/'.$adminID);
				}

  			}else{

				$msg = "New Password and Confirm Password doesn't Match.!!!";
				$message = $this->msg($msg);
				redirect('Super_admin/ChangePassword/'.$adminID);

  			}

  		}else{

  			$msg = "Old password doesn't match !!!";
			$message = $this->msg($msg);
			redirect('Super_admin/ChangePassword/'.$adminID);

  		}

    }//update_password

//=============================== Blog =========================================//

	public function manage_blog(){

        $total = $this->db->count_all("tbl_blog");
        $perPage = 2;
        $this->pagination(base_url() . 'SuperAdmin/manage_blog', $perPage, $total);
        $data['all_blog']=$this->Superadmin_model->select_all_blog($perPage, $this->uri->segment(3));
        $data['admin_maincontent']=$this->load->view('admin/blog_manage',$data,true);
	 	$this->load->view('admin/admin_master',$data);

	 }

	public function unpublished_blog($id){

		$this->Superadmin_model->unpublished_blog_info($id);
		redirect('SuperAdmin/manage_blog');

	}

	public function published_blog($id){

		$this->Superadmin_model->published_blog_info($id);
		redirect('SuperAdmin/manage_blog');

	}

	public function edit_blog($id){

		$data = array();
		$data['all_published_category']=$this->FrontModel->select_published_category();
		$data['blog_info'] = $this->Superadmin_model->select_blog_info_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_blog',$data,true);
		$this->load->view('admin/admin_master',$data);

	}

	public function update_blog(){

		$data = array();
		$id = $this->input->post('id',true);
		$data['blog_title'] = $this->input->post('blog_title',true);
		$data['cat_id'] = $this->input->post('cat_id',true);
		$data['blog_short_des'] = $this->input->post('blog_short_des',true);
		$data['blog_long_des'] = $this->input->post('blog_long_des',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		// echo '<pre>';
		// print_r($data);
		// exit();
		$this->Superadmin_model->update_blog_info($data,$id);
		$sdata = array();
		$sdata['message'] = 'Update Blog Information Successfully...!!!';
		$this->session->set_userdata($sdata);
		redirect('SuperAdmin/manage_blog');

	}


	public function delete_blog($id){

		$this->Superadmin_model->delete_blog_info_by_id($id);
		redirect('SuperAdmin/manage_blog');
	}


//=============================== Blog End=========================================//

//=============================== manage User =========================================//

	public function manageUser(){

		$data = array();
		$data['all_user'] = $this->User_model->get_users();
		$data['admin_maincontent'] = $this->load->view('admin/manage_user', $data, true);
		$this->load->view('admin/admin_master',$data);
	}

	
	public function logout(){
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('full_name');
		$sdata = array();
		$sdata['message'] = 'You are successfully Logout...!!!';
		$this->session->set_userdata($sdata);
		redirect('Welcome/index');
	}


}//Super_admin