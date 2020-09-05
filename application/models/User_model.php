<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends Base_Model {
	
	public function get_users(){

		$result = $this->db->select('*')->from('tbl_user')->get()->result();
		return $result;
	}

	public function check_user_login_info($username,$password){

		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function selectedInfor_byID($userID){

		$result = $this->db->select('*')->from('tbl_user')->where('user_id', $userID)->get()->row();
		return $result;
	}

	public function updateUser($userID, $data){

		return $this->db->where('user_id', $userID)->update('tbl_user', $data);
	}

	public function update_password($userID,$new_pass){

		return $this->db->set('password', $new_pass)->where('user_id', $userID)->update('tbl_user');
	}

}//User_model