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


	public function Checkout()
	{
		$proid =$this->input->post('id');
		$selection =$this->input->post('selection');
		if(empty($proid)){
			$proid=$_SESSION['checkout']['pro']['id'];
			$selection = $_SESSION['checkout']['selection'];
		}
		if(!is_null($proid)){
			$pro = $this->cart_model->Getproall($proid);
			$checkout['selection'] = $selection;
			$checkout['pro'] = $pro;
			$this->session->set_userdata('checkout',$checkout);
			$this->load->view('inc/header');
			$this->load->view('checkout',$pro);
			$this->load->view('inc/footer');	
		}
		else{
			redirect('404');
		}
	}

	public function Order()
	{
		//Order User ID
		$data['order_userid'] =1;

		if($data['order_userid']){
		$order['name'] =$this->input->post('name');
		$order['email'] =$this->input->post('email');
		$order['address'] =$this->input->post('address');
		$order['address2'] =$this->input->post('address2');
		$order['country'] =$this->input->post('country');
		$order['state'] =$this->input->post('state');
		$order['zip'] =$this->input->post('zip');
		
		$data['order_detail'] =json_encode($order);
			if($_SESSION['checkout']['selection'] == 1){
	          $data['order_amount'] = $_SESSION['checkout']['pro']['novice_price'];
	           }else if($_SESSION['checkout']['selection'] ==2){
	         $data['order_amount'] =  $_SESSION['checkout']['pro']['developer_price']  ;
	          }else if($_SESSION['checkout']['selection'] ==3){  
	         $data['order_amount'] =  $_SESSION['checkout']['pro']['champion_price'];
	          }
	    //Order Created/Status      
        $data['order_created'] = date('d/m/Y');  
        $data['order_status'] = 0;
        $insert=$this->cart_model->InsertOrder($data);

	        //Insert
	        if ($insert) {
	        	echo "Your Purchase Order Has Been Confirmed with Order Id ".$insert;
	        }else{
	        	$this->session->set_flashdata('warning', 'Something Misfortune Happen !');
				redirect('checkout');
	        }


    	}	
    	else{
			$this->session->set_flashdata('warning', 'Please Login or Signup !');
			redirect('checkout');
    	}
	}

}
