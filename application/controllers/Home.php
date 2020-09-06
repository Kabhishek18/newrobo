<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model('home_model');

		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	//Login
	public function index()
	{
		$data = $this->session->user_account;
		if($data){
			redirect('ci-admin/dashboard');
		}
		else{	
		$this->load->view('admin/inc/header');
		$this->load->view('admin/login');
		$this->load->view('admin/inc/footer');
		
		}
	}

	//Authentication
	public function Authenticate()
	{
		$auth['users_email']=$this->input->post("users_email");
		$auth['users_password']=md5($this->input->post("users_password"));	
		$data=$this->home_model->Authentication($auth);
			if($data)
		 {
		  	 	$this->session->set_userdata('user_account',$data);
				redirect('ci-admin/dashboard');
		  	 }
		  	 else{
		  	 	$red['users_email']=$auth['users_email'];
				$emailcheck =$this->home_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect('ci-admin');
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
		  	 		redirect('ci-admin');
		  	 	}
		  	 }		
	}

	//Dashboard
	public function Dashboard()
	{
		$data = $this->session->user_account;
		if($data){	
			

				if ($data['users_status']==0) {
					$this->load->view('admin/inc/header',$data);
					$this->load->view('admin/dashboard');
					$this->load->view('admin/inc/foottile');
					$this->load->view('admin/inc/footer');
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}
	
	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('user_account');	   
		$this->session->sess_destroy();
		redirect('ci-admin');
		}
	}

	//Student List
	public function StudentList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListStudent();
					$this->load->view('admin/inc/header',$data);
					$this->load->view('admin/studentlist',$var);
					$this->load->view('admin/inc/foottile');
					$this->load->view('admin/inc/footer');
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}

	//Category List
	public function CategoryList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListCategory();
					$this->load->view('admin/inc/header',$data);
					$this->load->view('admin/categorylist',$var);
					$this->load->view('admin/inc/foottile');
					$this->load->view('admin/inc/footer');
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}


	//Course Add View
	public function CategoryAdd()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					$this->load->view('admin/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->home_model->ListCategory($urlid);
						$this->load->view('admin/categoryadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('admin/categoryadd',$var);
					}

					$this->load->view('admin/inc/foottile');
					$this->load->view('admin/inc/footer');
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}

	//Course Insert And Update
	public function Categoryinsert()
	{
		
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					
					$reg['id']=$this->input->post("id");
					$reg['cat_name']=$this->input->post("cat_name");
					$reg['cat_slug']=$this->input->post("cat_slug");
					$reg['cat_status']=$this->input->post("cat_status");
			
					if ($reg['id'] == "") {
						$reg['created']=date('Y-m-d');
					}
						$reg['modified']= date('Y-m-d H:i:s');

					
					
						
							$insert = $this->home_model->ChangeCategory($reg);
							if ($insert) {
								$this->session->set_flashdata('success', 'Successfully Done');
								redirect($_SERVER['HTTP_REFERER']);
							}
							else{
								$this->session->set_flashdata('Warning', 'Something Misfortune Happen');
								redirect($_SERVER['HTTP_REFERER']);	
							}
						
					




				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}

	//Course Delete
	public function CategoryDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->home_model->DeleteCategory($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect('ci-admin/category');
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect('ci-admin/category');
		
		}
	}
	//Course List
	public function CourseList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListCourse();
					$this->load->view('admin/inc/header',$data);
					$this->load->view('admin/courselist',$var);
					$this->load->view('admin/inc/foottile');
					$this->load->view('admin/inc/footer');
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}

	//Course Add View
	public function CourseAdd()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					$this->load->view('admin/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->home_model->ListCourse($urlid);
						$this->load->view('admin/courseadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('admin/courseadd',$var);
					}

					$this->load->view('admin/inc/foottile');
					$this->load->view('admin/inc/footer');
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}

	//Course Insert And Update
	public function Courseinsert()
	{
		
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					
					$dir ='uploads';
					if (!is_dir($dir)) {
						mkdir($dir, 0755, TRUE);
					}
					$config['upload_path'] =  $dir;
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['max_size'] = 3000;
			        $this->load->library('upload', $config);
					$this->upload->initialize($config);

					if($this->upload->do_upload('product_image')){
			 		$image= $this->upload->data();
					$reg['product_image'] =$image['file_name'];}
					else{
						//Keep Empty For Image
					}
					$reg['id']=$this->input->post("id");
					$reg['product_name']=$this->input->post("product_name");
					$reg['cat_id']=$this->input->post("cat_id");
					$reg['product_slug']=$this->input->post("product_slug");
					$reg['product_highlight']=$this->input->post("product_highlight");
					$reg['product_novice']=$this->input->post("product_novice");
					$reg['product_developer']=$this->input->post("product_developer");
					$reg['product_champion']=$this->input->post("product_champion");
					$reg['novice_price']=$this->input->post("novice_price");
					$reg['developer_price']=$this->input->post("developer_price");
					$reg['champion_price']=$this->input->post("champion_price");
					$reg['product_description']=$this->input->post("product_description");
					$reg['product_status']=$this->input->post("product_status");
					if ($reg['id'] == "") {
						$reg['created']=date('Y-m-d');
					}
						$reg['modified']= date('Y-m-d H:i:s');

					
						$insert = $this->home_model->ChangeCourse($reg);
							if ($insert) {
								$this->session->set_flashdata('success', 'Successfully Done');
								redirect($_SERVER['HTTP_REFERER']);
							}
							else{
								$this->session->set_flashdata('Warning', 'Something Misfortune Happen');
								redirect($_SERVER['HTTP_REFERER']);	
							}
					
					
				}
				else{
					$this->load->view('admin/inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('admin/status');
					$this->load->view('admin/inc/footer');	
				}
			}

		
		else{
			redirect('ci-admin');
		}
	}

	//Course Delete
	public function CourseDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->home_model->DeleteCourse($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect('ci-admin/course');
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect('ci-admin/course');
		
		}
	}

	
}
