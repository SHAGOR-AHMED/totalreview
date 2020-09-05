<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Review_model');
		$this->load->model('Reviewtype_model');
		$this->load->model('User_model');
	}

	public function index(){
		$data = array();
		$data['slider'] = 1;
		$data['title'] = 'Total Review';
		$data['latest_review']=$this->Review_model->LatestReview();
		$data['popular_review']=$this->Review_model->PopularReview();
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['content'] = $this->load->view('frontend/page/body', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function AboutUs(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = 'Total Review | About Us';
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['content'] = $this->load->view('frontend/page/about', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function Blog(){
		$data = array();
		$data['slider'] = 0;
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['content'] = $this->load->view('frontend/page/blog', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function Contact(){
		$data = array();
		$data['slider'] = 0;
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['content'] = $this->load->view('frontend/page/contact', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function ReviewByType($typeID=''){

		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Review By Type";
		$data['all_type'] = $this->Reviewtype_model->select_all_type();
		$data['type_name'] = $this->db->select('type_name')->from('tbl_type')->where('type_id', $typeID)->get()->row();
		$data['review_by_typeID'] = $this->Review_model->select_review_byTypeID($typeID);
		$data['content'] = $this->load->view('frontend/page/review_byID', $data, true);
		$this->load->view('frontend/index', $data);
	}

	public function ReviewDetails($id=''){

		if(!empty($id)){

			$data = array();
			$data['slider'] = 0;
			$data['title'] = "Review Details";
			$data['all_type']=$this->Reviewtype_model->select_all_type();
			$data['selected_review'] = $this->Review_model->select_review_by_id($id);
			$HitCount = $data['selected_review']->hit_count;
			$IncreaseHit = $HitCount+1;
			$this->Review_model->update_HitCount_byID($id, $IncreaseHit);
			$data['content'] = $this->load->view('frontend/page/review_details', $data, true);
			$this->load->view('frontend/index', $data);

		}else{

			$this->load->view('frontend/page/404_error');
		}
		
	}//ReviewDetails

//===============================================//
	
	public function userLogin(){
		
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['slider'] = 0;
		$data['content'] = $this->load->view('frontend/page/user_login', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function UserRegistration(){

		$data = array();
		$data['slider'] = 0;
		$data['all_type']=$this->Reviewtype_model->select_all_type();
		$data['content'] = $this->load->view('frontend/page/user_registration', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function save_user(){

		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[con_password]');
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required');

		if($this->form_validation->run() == FALSE){
			
			$data['all_type']=$this->Reviewtype_model->select_all_type();
			$data['content'] = $this->load->view('frontend/page/user_registration', $data, true);
			$this->load->view('frontend/index',$data);
			return false;

		}else{

			$data['full_name'] = $this->input->post('full_name');
			$data['mobile_no'] = $this->input->post('mobile_no');
			$data['email'] = $this->input->post('email');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));

			$result = $this->User_model->commonInsert('tbl_user', $data);

			if($result){
				$msg = 'Your Account created successfully !!!';
				$message = $this->msg($msg);
				redirect('Welcome/userLogin');
			}else{
				$msg ='Failed to Create !!!';
				$message = $this->msg($msg);
				redirect('Welcome/userLogin');
			}
			
		}//if

	}//save_user

	public function check_user_login(){

		$username = $this->input->post('username',true);
		$password = md5($this->input->post('password',true));
		$result = $this->User_model->check_user_login_info($username,$password);
		
		$sdata = array();
		if($result){
			$sdata['user_id'] = $result->user_id; 
			$sdata['username'] = $result->username;
			$sdata['full_name'] = $result->full_name;
			$this->session->set_userdata($sdata);
			redirect('User/');
		}else{
			$sdata['message']='User ID or Password is Invalid..!!';
			$this->session->set_userdata($sdata);
			redirect('Welcome/userLogin');
		}
	}


}//Welcome

?>