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
					$this->load->view('inc/header',$data);
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
					$this->load->view('verify');
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

	//Register
	public function Registeration()
	{
		
		$auth['users_name']=$this->input->post("username");	
		$auth['users_email']=$this->input->post("email");
		$auth['users_password']=md5($this->input->post("password"));
		$password = $this->input->post("password");
	
		$auths['cpassword']=md5($this->input->post("cpassword"));
		$emailcheck =$this->page_model->CheckEmail($auth);
		if ($emailcheck==true ) {
			$this->session->set_flashdata('error', '<span style="color:red">EmailID Already Exist!</span>');
			redirect('');
		}


		$auth['users_token']=generateUUID();	
		$auth['users_account']=1;

		$messagebomb = '<h1> Thanks For Registration with new robo,<h1><h5>Username :'.$auth['users_name'].'</h5><h5>Password :'.$password.' </h5><p>Click to verify <a href="'.base_url().'verify/'.$auth['users_token'].'/'.$auth['users_name'].'/'.generateUUID().'" >Link</a></p>';

		$check=$this->input->post("check");	
		if ($auths['cpassword'] == $auth['users_password']) {
			if ($check) {
				$auth['users_type']=1;	
				$insert =$this->page_model->InsertUsers($auth);	
					if ($insert) {

						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'developer@kabhishek18.com';
						$mail->Password = 'developer@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
						$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

						// Add a recipient
						$mail->addAddress($auth['users_email']);

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('incte@gmail.com');

						// Email subject
						$mail->Subject =  'Mail Verfication';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						$this->session->unset_userdata('user_account');	   
						$this->session->sess_destroy();	
						$this->load->view('inc/header');
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('inc/footer');	
					}
					else{
						$this->load->view('inc/header');
						$this->session->set_flashdata('success', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						$this->load->view('status');
						$this->load->view('inc/footer');	
					}
				}
			else{
				$auth['users_type']='0';
				$insert =$this->page_model->InsertUsers($auth);	
					if ($insert) {
							$this->load->library('phpmailer_lib');

							// PHPMailer object
							$mail = $this->phpmailer_lib->load();

							// SMTP configuration
							$mail->isSMTP();
							$mail->Host     = 'mail.kabhishek18.com';
							$mail->SMTPAuth = true;
							$mail->Username = 'developer@kabhishek18.com';
							$mail->Password = 'developer@987';
							$mail->SMTPSecure = 'tls';
							$mail->Port     = 587;

							$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
							$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

							// Add a recipient
							$mail->addAddress($auth['users_email']);

							// Add cc or bcc 
							//$mail->addCC('');
							//$mail->addBCC('incte@gmail.com');

							// Email subject
							$mail->Subject =  'Mail Verfication';

							// Set email format to HTML
							$mail->isHTML(true);

							// Email body content
							$mailContent = $messagebomb;
							$mail->Body = $mailContent;

							// Send email
							if(!$mail->send()){
								$mail->ErrorInfo;

							}
						$this->session->unset_userdata('user_account');	   
						$this->session->sess_destroy();	
						$this->load->view('inc/header');
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('inc/footer');	
					}
					else{
						$this->load->view('inc/header');
						$this->session->set_flashdata('error', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						$this->load->view('status');
						$this->load->view('inc/footer');	
					}	
			}


		}
		else{
			$this->load->view('inc/header');
			$this->session->set_flashdata('error', '<span>Sorry, Your Password Did not Match</span>');
			$this->load->view('status');
			$this->load->view('inc/footer');

		}
	}

	//Email Verification
	public function EmailVerification()
	{
		$users_token =$this->uri->segment(2,0);
		$users_name =$this->uri->segment(3,0);
		$users_email_verify ='0';
		 $update =$this->page_model->EmailVerify($users_token,$users_email_verify);
		if ($update) {
			$this->load->view('inc/header');
			$this->session->set_flashdata('success', '<span style="color:green">Congratulation, Email Verified Successfully, <p>Please Click to Login <a href="'.base_url().'">Login</a></p></span>');
			$this->load->view('status');
			$this->load->view('inc/footer');
			}
		else{
			$this->load->view('inc/header');
			$this->session->set_flashdata('error', '<span>Sorry, Verification Failed</span>');
			$this->load->view('status');
			$this->load->view('inc/footer');
		}			
	}

		//Email Reverfication
	public function ResendEmailVerification()
	{
		$auth= $this->session->student_account;
		
		$messagebomb = '<h1> Thanks For Registration with new robo,<h1><p>Click to verify <a href="'.base_url().'verify/'.$auth['users_token'].'/'.$auth['users_name'].'/'.generateUUID().'" >Link</a></p>';
		$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'developer@kabhishek18.com';
						$mail->Password = 'developer@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
						$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

						// Add a recipient
						$mail->addAddress($auth['users_email']);

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('incte@gmail.com');

						// Email subject
						$mail->Subject =  'Mail Verfication';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						$this->session->unset_userdata('user_account');	   
						$this->session->sess_destroy();		
						$this->load->view('inc/header');
							$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Reverification, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('inc/footer');			
	}

}
