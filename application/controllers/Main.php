<?php

class Main extends CI_Controller{

	public function index(){


		$this->load->library('form_validation');
    $this->load->model('Usermode');

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() === false) {
        $this->load->view('login');
    } else {
        // Validation passed, process login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Verify login credentials
        $user = $this->Usermode->get_user_by_username($username);
        if ($user && password_verify($password, $user['password'])) {
            // Set session or handle login success
            // For example, redirect to a dashboard page
            $this->session->set_userdata('user_id', $user['id']);
            redirect('main/home');
        } else {
            // Handle login failure
            echo "Invalid login credentials.";
        }
        redirect('main/home');
    }




	}

	public function reg() {
    $this->load->library('form_validation');
    $this->load->model('Usermode');

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

    if ($this->form_validation->run() === false) {
        $this->load->view('register');
    } else {
        // Validation passed, process registration
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
        );

        $result = $this->Usermode->register_user($data);

        if ($result) {
            // Handle successful registration
            // For example, redirect to a login page
            redirect('main/index');
        } else {
            // Handle registration failure
            echo "Registration failed. Please try again.";
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

	


	public function add(){
	  $data['abc'] = $this->db->get('departments')->result_array();

		$this->load->library('form_validation');

		$this->load->model('Usermode');

		$this->form_validation->set_rules('Name','Name','trim|required');
		$this->form_validation->set_rules('Department','Department','trim|required');
		$this->form_validation->set_rules('Age','Age','trim|required');
        	$this->form_validation->set_rules('Salary','Salary','trim|required');
		if($this->form_validation->run()== true){

			$data=array();
              // $data['abc'] = $this->db->get('departments')->result_array();
              print_r($data);exit();
             
			$data['Name']= $this->input->post('Name');
			$data['department']= $this->input->post('department');

			$data['Age']= $this->input->post('Age');
			$data['Salary']= $this->input->post('Salary');


			
             
			$this->Usermode->create($data);

			$this->session->set_flashdata('success','Detail created successfully');

		

			redirect('main/home');



		}
		else{
			$this->load->view('addblog');
		}


	}
      
    public function add_page(){
    	$data['abc'] = $this->db->get('departments')->result_array();
    	// print_r($data);exit();
    	$this->load->view('add_detail',$data);
    }

    public function dept_data(){
    	$this->load->library('form_validation');

		// $this->load->model('Usermode');

		$this->form_validation->set_rules('Name','Name','trim|required');
		$this->form_validation->set_rules('Department','Department','trim|required');
		$this->form_validation->set_rules('Age','Age','trim|required');
        	$this->form_validation->set_rules('Salary','Salary','trim|required');
		if($this->form_validation->run()== true){
    	$data = $this->input->post();
    	$this->db->insert('employees',$data);
    	redirect('main/home');
    	}else{
    		$this->load->view('add_detail');
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

	// public function edit($id){
	// 	$this->load->model('Usermode');

	// 	$data=array();
	//   $blog =	$this->Usermode->getById($id);

	// 	if(empty($blog)){
	// 		$this->session->set_flashdata('success','Data not found');
	// 		redirect('admin/home');
	// 	}
		
	// 	$this->load->library('form_validation');


	// 	$this->form_validation->set_rules('title','Title','trim|required');
	// 	$this->form_validation->set_rules('description','Description','trim|required');
	// 	$this->form_validation->set_rules('author','Author','trim|required');

	// 	if($this->form_validation->run()==true){
	// 		$form=array();

	// 		$form['title']= $this->input->post('title');
	// 		$form['description'] = $this->input->post('description');
	// 		$form['author'] = $this->input->post('author');
	// 		$form['type'] = $this->input->post('type');


	// 		$this->Usermode->update($id, $form);

	// 		$this->session->set_flashdata('success', 'updated successfully');
	// 		redirect('main/home');

	// 	}
	// 	else{
	// 		$data['blog'] = $blog;
	// 		$this->load->view('editblog',$data);

	// 	}



	// }
         public function edit_view($dk)
     {
     	     $data['edit'] = $this->db->get('employees')->result_array();
     	$data['blog'] = $this->db->where('Employee_ID',$dk)->get('employees')->row_array();


     	     	     	  // print_r($data['edit']);exit;



     	$this->load->view('editblog',$data);
     }

     public function edit_post($id)
     {
     	$data = $this->input->post();
     	// print_r($data);exit;
     	if($data){
     		$this->db->where('Employee_ID',$id)->update('employees',$data);
     	                 redirect('main/home');
     	}
     	       
     	     	$this->load->view('editblog');


     }   


	// public function latest(){

	// 	$this->load->model('Usermode');
	// 	$this->load->helper('text');


	// 	$blog['promote']=$this->Usermode->getPromoBlog();
	// 	$blog['featured']=$this->Usermode->getFeaturedBlog();

	// 	$blog['allblogs']=$this->Usermode->getAllBlogs();


	// 	$this->load->view('blogHome',$blog);
	// }


	public function detail($id){
		 $this->load->model('Usermode');

		$data['blogs'] = $this->Usermode->getById($id);

		$this->load->view('detail', $data);

	}


	
    public function dept(){
    	$this->load->view('department');
    }
    
    public function dept_subm(){
    	$data['department'] = $this->input->post('department');
    	$this->db->insert('departments',$data);
    	redirect('main/home');
    }
}
