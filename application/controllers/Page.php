<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Page extends CI_Controller {
    function __construct(){
        parent::__construct();
        //Library
		$this->load->library('cart');
       $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
    
		$this->load->model('cart_model');
		$this->load->model('page_model');
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
	
	public function Blog()
	{
		$this->load->view('inc/header');
		$this->load->view('blog');
		$this->load->view('inc/footer');
    }
    public function Gallery()
	{
		$this->load->view('inc/header');
		$this->load->view('gallery');
		$this->load->view('inc/footer');
    }
    
    public function BlogDetail()
    {		
		$blogid = $this->uri->segment(2,0);
		if(!empty($blogid)){
			$blog = $this->page_model->ListBlog($blogid);
			$this->load->view('inc/header');
			$this->load->view('blogdetail',$blog);
			$this->load->view('inc/footer');
		}
		else{
			redirect('404');
		}
    }

    public function ReviewInsert()
    {
        $data['review_name'] =$this->input->post('review_name');
        $data['review_email'] =$this->input->post('review_email');
        $data['review_phone'] =$this->input->post('review_phone');
        $data['review_description'] =$this->input->post('review_description');
        $data['review_blog_id'] =$this->input->post('review_blog_id');
        $data['review_status'] = '0';
    	$data['created'] =  date('Y-m-d H:s:i');  
       	 $insert=$this->page_model->InsertReview($data);

	    //    Insert
	        if ($insert) {
	    	$this->session->set_flashdata('success', 'Comment Submitted successfully');
				redirect('blog/'.$data['review_blog_id']);
	    
	        }else{
	        	$this->session->set_flashdata('warning', 'Something Misfortune Happen !');
				redirect('blog/'.$data['review_blog_id']);
	        } 
		
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
		
		$data['order_cart'] = $_SESSION['checkout']['pro']['id']; 

		$data['order_detail'] =json_encode($order);
			if($_SESSION['checkout']['selection'] == 1){
	          $data['order_amount'] = $_SESSION['checkout']['pro']['novice_price'];
	           }else if($_SESSION['checkout']['selection'] ==2){
	         $data['order_amount'] =  $_SESSION['checkout']['pro']['developer_price']  ;
	          }else if($_SESSION['checkout']['selection'] ==3){  
	         $data['order_amount'] =  $_SESSION['checkout']['pro']['champion_price'];
	          }
	    //Order Created/Status    
	    $data['order_id'] =uniqid('robo',true); //Changing in razorPaySuccess Function 
        $data['order_created'] = date('d/m/Y');  
        $data['order_status'] = 0;
        //
		$this->session->set_userdata('orderdata',$data);
        $this->load->view('inc/header');
        $this->load->view('razorpay',$data);
        $this->load->view('inc/footer');


    	}	
    	else{
			$this->session->set_flashdata('warning', 'Please Login or Signup !');
			redirect('checkout');
    	}
	}
	 public function RazorPay()
    {
        $this->load->view('razorpay');
    }   

	public function razorPaySuccess()
    { 
     $data = [
               'user_id' => '1',
               'payment_id' => $this->input->post('razorpay_payment_id'),
               'amount' => $this->input->post('totalAmount'),
               'product_id' => $this->input->post('product_id'),
            ];
     $insert = $this->db->insert('payments', $data);
     $_SESSION['orderdata']['order_id'] =$data['payment_id'];
     $arr = array('msg' => 'Payment successfully credited', 'status' => true); 
     echo json_encode($arr); 
    
    }
    public function RazorThankYou()
    {
    	if($_SESSION['orderdata']){	
	  $orderdata =$_SESSION['orderdata'];	
      $insert=$this->cart_model->InsertOrder($orderdata);
	    //    Insert
	        if ($insert) {
	        	 $this->load->view('inc/header');
	        	$speech['speech']= "Your Purchase Order Has Been Confirmed with Order Id : ".$insert;
	        	 $this->load->view('razorthankyou',$speech);
	        	 $this->session->unset_userdata('checkout');	
				$this->session->unset_userdata('orderdata');
	        	 $this->load->view('inc/footer');

	        }else{
	        	$this->session->set_flashdata('warning', 'Something Misfortune Happen !');
				redirect('checkout');
	        } 
	    }
	    else{
	    	redirect('');
	    }    
    
   		
    }
    public function RazorFailure()
    {
    	echo "Payment Failure <a href='".base_url()."'> Click to Home</a>";
    }


    public function PageNotFound()
    {
    	$this->load->view('404');
    }
    public function ContactMail()
    {
					$name =$this->input->post('name');
					$email =$this->input->post('email');
					$phone =$this->input->post('phone');
					$message =$this->input->post('message');
					$messagebomb = '<p> Name : '.$name.'</p><p> Email : '.$email.'</p><p> Phone : '.$phone.'</p><p> Message : '.$message.'</p>';


						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'info@kabhishek18.com';
						$mail->Password = 'info@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('info@kabhishek18.com', 'info@kabhishek18.com');
						$mail->addReplyTo('info@kabhishek18.com', 'info@kabhishek18.com');

						// Add a recipient
						$mail->addAddress('kabhishek18@gmail.com');

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('');

						// Email subject
						$mail->Subject =  'Contact Mail';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
					
						$this->session->set_flashdata('success', 'Thank You, Mail Has Been received');
						redirect('contactus');
	

    }
}
