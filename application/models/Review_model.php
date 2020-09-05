<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review_model extends Base_Model {

	public function get_review(){

		return $this->db->select('*')->from('tbl_review')->order_by('review_id', 'DESC')->get()->result();
	}

	// public function select_all_review($perPage, $offset){

	// 	if ($offset == null) {
 //        	$offset = 0;
 //    	}
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_review');
	// 	$this->db->limit($perPage, $offset);
	// 	$this->db->order_by('review_id', 'DESC');
	// 	$query_result = $this->db->get();
	// 	$result = $query_result->result();
	// 	return $result;
	// }

	public function LatestReview(){

		$result = $this->db->select('*')->from('tbl_review')->where('review_status',1)->order_by('review_id', 'DESC')->limit(6)->get()->result();
		return $result;
	}

	public function PopularReview(){

		$result = $this->db->select('*')->from('tbl_review')->where('review_status',1)->order_by('hit_count', 'DESC')->limit(8)->get()->result();
		return $result;
	}

	public function unpublishedReview_by_id($reviewID){

		$this->db->set('review_status', 0);
		$this->db->where('review_id', $reviewID);
		return $this->db->update('tbl_review');
	}

	public function publishedReview_by_id($reviewID){

		$this->db->set('review_status',1);
		$this->db->where('review_id', $reviewID);
		return $this->db->update('tbl_review');
	}

	public function select_review_by_id($id){

		$this->db->select('*');
		$this->db->from('tbl_review');
		$this->db->where('review_id',$id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function Update_Review($review_id){

		$query = $this->db->where('review_id', $review_id)->update('tbl_review');
		return $query;
	}

	public function deleteReview_by_id($id){

		$data = array('review_id'=>$id);
		$photo = $this->db->get_where('tbl_review',$data)->row();
		unlink($photo->photo);
		$result = $this->db->where('review_id',$id)->delete('tbl_review');
		return $result;
	}

	public function update_HitCount_byID($id, $IncreaseHit){

		$this->db->set('hit_count', $IncreaseHit);
		$result = $this->db->where('review_id',$id)->update('tbl_review');
		return $result;
	}

	public function select_review_byTypeID($typeID){

		$this->db->select('*');
		$this->db->from('tbl_review');
		$this->db->where('review_type',$typeID);
		$this->db->where('review_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	// public function get_paidamount_byID($MemberID){

	// 	$this->db->select('tbl_paid_payment.*');
	// 	$this->db->select('tbl_members.first_name,tbl_members.last_name');
	// 	$this->db->select('tbl_payment.total_payment');
	// 	$this->db->from('tbl_paid_payment');
	// 	$this->db->where('status', 1);
	// 	$this->db->where('tbl_paid_payment.member_id', $MemberID);
	// 	$this->db->join('tbl_members','tbl_members.mem_id = tbl_paid_payment.member_id');
	// 	$this->db->join('tbl_payment','tbl_payment.member_id = tbl_paid_payment.member_id');
	// 	$get = $this->db->get();
	// 	$result = $get->result();
	// 	return $result;
	// }


}//Review_model