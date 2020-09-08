<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Student extends CI_Controller {
    function __construct(){
        parent::__construct();
        //Library
		$this->load->library('cart');
		$this->load->library('session');
        //Model
        $this->load->model('cart_model');
        $this->load->model('page_model');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	public function index()
	{
		$data = $this->session->student_account;
		if($data){	
				if ($data['users_email_verify']==0){

				if ($data['users_status']==0) {
					$this->load->view('inc/header');
					$this->load->view('dashboard');
					$this->load->view('inc/footer');
							}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Need Verification. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
    }
    
  	//Authentication
	public function Authenticate()
	{
		$auth['users_email']=$this->input->post("users_email");
		$auth['users_password']=md5($this->input->post("users_password"));	
		$data=$this->page_model->Authentication($auth);
			if($data)
		 {
		  	 	$this->session->set_userdata('student_account',$data);
				redirect('/dashboard');
		  	 }
		  	 else{
		  	 	$red['users_email']=$auth['users_email'];
				$emailcheck =$this->page_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect();
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
		  	 		redirect();
		  	 	}
		  	 }		
	}


	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('student_account');	   
		$this->session->sess_destroy();
		redirect('');
		}
	}





}
