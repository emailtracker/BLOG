<?php
class Usermode extends CI_Model{
	

	public function get_user_by_username($username) {
    $query = $this->db->get_where('users', array('username' => $username));
    return $query->row_array();
  }

  public function register_user($data) {
    return $this->db->insert('users', $data);
  }


	public function create($formData){
		$this->db->insert('employees',$formData);
	}
     
     // public function fetdata($id){
     // 	$this->db->where('department_id',$id)->get('departments')->result_array();
     // }

	public function fetchTable(){
		return $this->db->get('employees')->result_array();
	}


	public function delete($id){
		$this->db->where('Employee_ID',$id);
		 $this->db->delete('employees');
	}

	public function getById($id){
		$this->db->where('Employee_ID', $id);
		return $this->db->get('employees')->row_array();
	}


	public function update($id, $form){
		$this->db->where('Employee_ID',$id);
		$this->db->update('employees',$form);
	}

	public function getAllBlogs(){
		$this->db->order_by('Employee_ID','DESC');
	 return	$this->db->get('employees')->result_array();
	}

	public function getFeaturedBlog(){
		$this->db->where('type','featured');
		return $this->db->get('employees')->result_array();
	}

	public function getPromoBlog(){
		$this->db->where('type','promo');
		$this->db->limit(1);
		return $this->db->get('employees')->row_array();
	}


	



}
