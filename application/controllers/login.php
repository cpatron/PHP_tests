<?php

class Login extends CI_Controller {
    
    function index(){
        $this->load->view('loginForm1');
    }
    
    function validateCredentials() {
        
        $this->load->model('site_model');
        $data = array(
          'username' => $_POST['username'],  
          'password' => $_POST['password']
        );
        
        if($this->site_model->valid_user_pass($data))
        {
            echo 'We logged in succesfull';
        }
        else
        {
            echo 'Wrong username or password';
        }
    }
    
    function createAccount(){
        
        $this->load->view('singupform');
    }
    
    function create_member(){
        
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('Nombre', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		$this->load->model('site_model');
                
		if($this->form_validation->run() == FALSE)
		{
			$this->createAccount();
		}
		
		else
		{			
			$data = array(
                            'Nombre' => $_POST['Nombre'],
                            'email' => $_POST['email'],
                            'Username' => $_POST['username'],
                            'Password' => md5($_POST['password'])
                        );
                        
                        $this->site_model->insert_member($data);
                        
                        echo 'User succesfully created';
                        echo anchor('login', 'Back to Login');
		}
    }
}