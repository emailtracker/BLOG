<?php

class Main extends CI_Controller{

	public function index(){


		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username', 'required');

		$this->form_validation->set_rules('password','Password', 'required');

		if($this->form_validation->run()==false){
			$this->load->view('login');



		}
		else{

			$data=array();
			 $this->load->model('Usermode');

			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');

			$user=$this->Usermode->loginUser($data);

			if(!empty($user)){
				$this->session->set_userdata('user',$user);
				redirect('main/home');

			}
			else{
				$this->session->set_flashdata('msg','Invalid Username or Password!');
				// $this->load->view('login');
				redirect('main/index');
			}



		}




	}



	public function home(){

		$this->load->model('Usermode');
	  $data['input'] = $this->Usermode->fetchTable();

		$this->load->view('home',$data);
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect('main/index');
	}

	// public function addBlog(){
	// 	$this->load->view('addblog');

	// }


	public function add(){
		$this->load->library('form_validation');

		$this->load->model('Usermode');

		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('description','Description','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');

		if($this->form_validation->run()== true){

			$data=array();

			$data['title']= $this->input->post('title');
			$data['description']= $this->input->post('description');

			$data['author']= $this->input->post('author');
			$data['type']= $this->input->post('type');


			$data['created_at']= date('Y-m-d h:i');

			$this->Usermode->create($data);

			$this->session->set_flashdata('success','Blog created successfully');

		

			redirect('main/home');



		}
		else{
			$this->load->view('addblog');
		}


	}

	public function cancel(){
		$this->session->set_flashdata('success', 'Update cancelled');
		redirect('main/home');
		// $this->load->view('home');
	}

	public function delete($id){
		$this->load->model('Usermode');
		$this->Usermode->delete($id);

		$this->session->set_flashdata('success','Deleted successfully');
		redirect('main/home');

	}

	public function edit($id){
		$this->load->model('Usermode');

		$data=array();
	  $blog =	$this->Usermode->getById($id);

		if(empty($blog)){
			$this->session->set_flashdata('success','Data not found');
			redirect('admin/home');
		}
		
		$this->load->library('form_validation');


		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('description','Description','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');

		if($this->form_validation->run()==true){
			$form=array();

			$form['title']= $this->input->post('title');
			$form['description'] = $this->input->post('description');
			$form['author'] = $this->input->post('author');
			$form['type'] = $this->input->post('type');


			$this->Usermode->update($id, $form);

			$this->session->set_flashdata('success', 'updated successfully');
			redirect('main/home');

		}
		else{
			$data['blog'] = $blog;
			$this->load->view('editblog',$data);

		}



	}


	public function latest(){

		$this->load->model('Usermode');
		$this->load->helper('text');


		$blog['promote']=$this->Usermode->getPromoBlog();
		$blog['featured']=$this->Usermode->getFeaturedBlog();

		$blog['allblogs']=$this->Usermode->getAllBlogs();


		$this->load->view('blogHome',$blog);
	}


	public function detail($id){
		 $this->load->model('Usermode');

		$data['blogs'] = $this->Usermode->getById($id);

		$this->load->view('detail', $data);

	}


	


}
