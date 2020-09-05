<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		$this->load->model('Admin_model');
	}
	 
	public function index(){
		
		$this->load->view('admin/login');
	}
	
	public function admin_login_check(){
		
		$admin_email = $this->input->post('admin_email',true);
		$admin_pass = $this->input->post('admin_pass',true);
		$result=$this->Admin_model->check_admin_login_info($admin_email,$admin_pass);
		
		$sdata = array();
		if($result){
			$sdata['admin_id'] = $result->admin_id; 
			$sdata['full_name'] = $result->full_name;
			$this->session->set_userdata($sdata);
			redirect('Super_admin');
		}else{
			$sdata['message']='User ID or Password is Invalid..!!';
			$this->session->set_userdata($sdata);
			redirect('Admin/index');
		}
	}
	
}//Admin