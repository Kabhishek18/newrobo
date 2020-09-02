<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    function __construct(){
        parent::__construct();
        //Library
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model('cart_model');
        //Model
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('index');
		$this->load->view('inc/footer');
    }
    
    public function About()
	{
		$this->load->view('inc/header');
		$this->load->view('about');
		$this->load->view('inc/footer');
    }
    
    public function Contact()
	{
		$this->load->view('inc/header');
		$this->load->view('contact');
		$this->load->view('inc/footer');
	}

	public function Courses_Cat()
	{
		$catid = $this->uri->segment(2,0);
		if(!empty($catid)){
			$cat['cat'] = $this->cart_model->Getcat($catid);
			$cat['catpro'] = $this->cart_model->Getcatpro($catid);
			$this->load->view('inc/header');
			$this->load->view('catcourse',$cat);
			$this->load->view('inc/footer');
		}
		else{
			redirect('404');
		}
	}

	public function Courses()
	{
		$proid = $this->uri->segment(2,0);
		if(!empty($proid)){
		$pro = $this->cart_model->Getproall($proid);	
		$this->load->view('inc/header');
		$this->load->view('course',$pro);
		$this->load->view('inc/footer');
		}
		else{
			redirect('404');
		}
	}


	public function CourseModalFill()
	{
		$selection =$this->input->post['selection'];
		if($selection == 1){

		}
		else if($selection == 2)
		{

		}
		else if($selection == 3) {
			
		}
		else{
			redirect('404');
		}
	}

}
