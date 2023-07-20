<?php
class Usermode extends CI_Model{
	

	public function loginUser($data){
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);

		return $this->db->get('users')->row_array();
	}


	public function create($formData){
		$this->db->insert('blogs',$formData);
	}


	public function fetchTable(){
		return $this->db->get('blogs')->result_array();
	}


	public function delete($id){
		$this->db->where('blog_id',$id);
		 $this->db->delete('blogs');
	}

	public function getById($id){
		$this->db->where('blog_id', $id);
		return $this->db->get('blogs')->row_array();
	}


	public function update($id, $form){
		$this->db->where('blog_id',$id);
		$this->db->update('blogs',$form);
	}

	public function getAllBlogs(){
		$this->db->order_by('blog_id','DESC');
	 return	$this->db->get('blogs')->result_array();
	}

	public function getFeaturedBlog(){
		$this->db->where('type','featured');
		return $this->db->get('blogs')->result_array();
	}

	public function getPromoBlog(){
		$this->db->where('type','promo');
		$this->db->limit(1);
		return $this->db->get('blogs')->row_array();
	}


	



}
