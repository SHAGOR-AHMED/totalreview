<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superadmin_model extends Base_Model {

	public function get_admin(){

        return $this->db->select('*')->from('tbl_admin')->get()->result();
	}

	public function select_admin_info_by_id($id){

		$result = $this->db->select('*')->from('tbl_admin')->where('admin_id',$id)->get()->row();
		return $result;
	}

	public function Update_Admin($admin_id){

		return $this->db->where('admin_id',$admin_id)->update('tbl_admin');

	}

	public function update_password($adminID,$new_pass){

		$this->db->set('admin_pass', $new_pass);
		$query = $this->db->where('admin_id', $adminID)->update('tbl_admin');
		return $query;
	}

//========================= end Admin =============================
	
	public function save_category_info($data){

		$this->db->insert('tbl_category',$data);
	}

	public function select_all_category(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query = $this->db->get();
        return $result = $query->result();
	}

	public function delete_category_info_by_id($cat_id){

		$this->db->where('cat_id',$cat_id);
		$this->db->delete('tbl_category');

	}

	public function unpublished_category_info($cat_id){

		$this->db->set('publication_status',0);
		$this->db->where('cat_id',$cat_id);
		$this->db->update('tbl_category');

	}

	public function published_category_info($cat_id){

		$this->db->set('publication_status',1);
		$this->db->where('cat_id',$cat_id);
		$this->db->update('tbl_category');

	}

	public function select_category_info_by_id($cat_id){

		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('cat_id',$cat_id);
		$query_result=$this->db->get();
		$result=$query_result->row();
		return $result;
	}

	public function update_category_info($data,$cat_id){

		$this->db->where('cat_id',$cat_id);
		$this->db->update('tbl_category',$data);

	}


//=================== Blog ============================//

		public function save_blog_info($data){

			$this->db->insert('tbl_blog',$data);

		}

		public function select_all_blog($perPage, $offset){

			if ($offset == null) {
            $offset = 0;

        	}

			$this->db->select('*');
			$this->db->from('tbl_blog');
			$this->db->limit($perPage, $offset);
			$query_result = $this->db->get();
			$result = $query_result->result();
			return $result;

		}

		public function unpublished_blog_info($id){

			$this->db->set('publication_status',0);
			$this->db->where('id',$id);
			$this->db->update('tbl_blog');
		}

		public function published_blog_info($id){

			$this->db->set('publication_status',1);
			$this->db->where('id',$id);
			$this->db->update('tbl_blog');

		}

		public function select_blog_info_by_id($id){

			$this->db->select('*');
			$this->db->from('tbl_blog');
			$this->db->where('id',$id);
			$query_result = $this->db->get();
			$result = $query_result->row();
			return $result;
		}

		public function update_blog_info($data,$id){

			$this->db->where('id',$id);
			$this->db->update('tbl_blog',$data);

		}


		public function delete_blog_info_by_id($id){

			$this->db->where('id',$id);
			$this->db->delete('tbl_blog');
		}

	//===================Blog End============================//


}
