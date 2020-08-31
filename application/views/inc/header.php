<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet"> 
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/slick/slick-theme.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/simple-lightbox.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>New Robos</title>

  </head>
  <body>
    <div class="wrapper">
    	<!--------------------------------TOP_STRIP_START------------------------------------------------->
		<section id="top-strip" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-strip-inner">
                            <div class="top-strip_box strip1">
                                <div class="top-mail-address">
                                    <a href="mailto:support@gmail.com">
                                        <span class="icon_m"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><span> info@newrobos.com</span>
                                    </a>
                                </div>
                            </div>
                             <div class="top-strip_box strip2">
                                <div class="call_us">
                                  <span class="icon_m"><i class="fa fa-history" aria-hidden="true"></i></span><span>Service Hours: 09:00 am - 6:00 pm </span>
                               </div>
                            </div>

                             <div class="top-strip_box strip3">
                                <div class="call_us">
                                  <span class="icon_m"><i class="fa fa-phone-square" aria-hidden="true"></i></span><span>+91-8510826062 </span>
                               </div>
                            </div>
                            <div class="top-strip_box strip4">
                                <div class="top_social">
									<a href="https://www.facebook.com/newrobos/"><i class="fa fa-facebook" aria-hidden="true"></i></a>

									<a href="https://www.youtube.com/channel/UC9dnM6vA_FOyGvmdga1jibQ?view_as=subscriber"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

									<a href="https://www.instagram.com/newrobos/"><i class="fa fa-instagram" aria-hidden="true"></i></a>

									<a href="https://twitter.com/New_Robos"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------------------TOP_STRIP_END---------------------------------------------------->



        <!--------------------------------HEADER_SECTION_START--------------------------------------------->
	 	<header id="bar">
			<div id="menu_area" class="menu-area">
		    <div class="container">
		        <div class="row">
		            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
		            	<a class="navbar-brand logo" href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo.jpg"></a>
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
		                </button>
		                <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                    <ul class="navbar-nav ">
		                        <li class="nav-item li_item ">
		                        	<a href="<?=base_url()?>" class="nav-link li_item_a">
		                        		<span class="icon_position icon_size icon_home"></span>Home  <span class="sr-only">(current)</span>
		                        	</a>
		                        </li>

		                        <li class="nav-item li_item ">
		                        	<a href="<?=base_url()?>aboutus" class="nav-link li_item_a"><span class="icon_position icon_size icon_about"></span>About</a>
		                        </li>

		                        <li class="dropdown nav-item li_item ">
		                            <a class="dropdown-toggle nav-link li_item_a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <span class="icon_position icon_size icon_class"></span>Courses</a>

		                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<?php $lists = $this->cart_model->Getcat();
											foreach($lists as $list){?>	
			                            <li class="dropdown nav-item li_item ">
			                                <a class="dropdown-item" href="<?=base_url()?>courses/<?=$list['id']?>/<?=$list['cat_name']?>"><b><?=$list['cat_name']?></b><br><small><?=$list['cat_slug']?></small></a>
			                            </li>
									<?php }?>			
		                            </ul>
		                        </li>

		                        <li class="nav-item li_item ourteam"><a href="ourteam.html" class="nav-link li_item_a"><span class="icon_position icon_size icon_teacher"></span>Our Team</a></li>

		                        <li class="nav-item li_item "><a href="blog.html" class="nav-link li_item_a"><span class="icon_position icon_size icon_blog"></span>Blog</a></li>

		                        <li class="nav-item li_item "><a href="contactus" class="nav-link li_item_a"><span class="icon_position icon_size icon_contact"></span>Contact</a></li>

		                        <li class="nav-item li_item "><a class="nav-link li_item_a" href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="icon_position icon_size icon_login"></span>Login / Signups</a></li>
		                    </ul>
		                </div>
		            </nav>
		        </div>
		    </div>
			</div>
		</header>
		<!--------------------------------HEADER_SECTION_START--------------------------------------------->



 
		<!-----------------------------------Modal_popup_box_start----------------------------------------->
		<div class="modal header_form_modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
			      	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			        <div class="form-wrap">
			       		<div class="login_form_left">
			       				<div class="form_logo"><img src="<?=base_url()?>assets/img/logo.jpg"></div>
			       				<p>Login using social media to get quick access</p>
			       				<div class="social_login_box">
			       					<ul>
			       						<li class="facebooklogin">
			       							<a href=""><i class="fa fa-facebook" aria-hidden="true"></i><span>Signin with facebook</span></a>
			       						</li>
			       						<li class="twitterlogin">
			       							<a href=""><i class="fa fa-twitter" aria-hidden="true"></i><span>Signin with twitter</span></a>
			       						</li>
			       						<li class="googlepluslogin">
			       							<a href=""><i class="fa fa-twitter" aria-hidden="true"></i><span>Signin with google</span></a>
			       						</li>
			       					</ul>
			       				</div>
			       		</div>
			       		<div class="login_form_right">
			       			<!-- Begin # DIV Form -->
			                <div id="div-forms">
			                
			                    <!-- Begin # Login Form -->
			                    <form id="login-form" class="main_form_box">
			                    	<div class="header_form_t">
					       				<h3>Login to your account</h3>
					       				<p>Don't have an account? <button id="login_register_btn" type="button" class="custom_btn">Sign Up Free!</button></p>
					       			</div>
					               
							    		 	
							    		<div class="form-group">
							    			<input id="login_username" class="form-control" type="text" placeholder="Username" required>
							    		</div>

							    		<div class="form-group">
							    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
							    		</div>
			                            <div class="checkbox form-inline">
			                                <label>
			                                    <input type="checkbox">Remember me
			                                </label>
			                                <button id="login_lost_btn" type="button" class="custom_btn">Forgot Password?</button>
			                            </div>
			                            <div>
			                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
			                            </div>
			                    </form>
			                    <!-- End # Login Form -->
			                    
			                    <!-- Begin | Lost Password Form -->
			                    <form id="lost-form" style="display:none;" class="main_form_box">
			                    	<div class="header_form_t">
					       				<h3>Recover your Password</h3>
					       				<p>Fill in your e-mail address below and we will send you an email with futher instructions</p>
					       			</div>
			    	    		 
					    			 	<div class="form-group">
					    			 		<input id="lost_email" class="form-control" type="text" placeholder="Email address" required>
					    			 	</div>
					    		  
			                            <div>
			                                <button type="submit" class="btn btn-primary btn-lg btn-block">Recover your Password</button>
			                            </div>

			                            <div>
			                                <p class="haveaccount"><button id="lost_login_btn" type="button" class="custom_btn">Already have an account?</button></p>
			                                <p class="haveaccount">
			                                <button id="lost_register_btn" type="button" class="custom_btn">Register</button>

			                            </p>
			                            </div>
					    		     
			                    </form>
			                    <!-- End | Lost Password Form -->
			                    
			                    <!-- Begin | Register Form -->
			                    <form id="register-form" style="display:none;" class="main_form_box">
			                    	<div class="header_form_t">
					       				<h3>Sign up to your account</h3>
					       			</div>
			            		    
					    				<div class="form-group">	    			 	
					    					<input id="register_username" class="form-control" type="text" placeholder="Username" required>
					    				</div>

					    				<div class="form-group">
			                            	<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
			                        	</div>

			                        	<div class="form-group">
			                           	 <input id="register_password" class="form-control" type="password" placeholder="Password" required>
			                        	</div>
			            			 
					    		  
			                            <div>
			                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up with email</button>
			                            </div>
			                           
			                            <p class="haveaccount"> <button id="register_login_btn" type="button" class="custom_btn">Already have an account?</button>	</p>
					    		    
			                    </form>
			                    <!-- End | Register Form -->
			                </div>
			                <!-- End # DIV Form --> 
			       		</div>
					</div> 
			      </div>
			    </div>
			  </div>
		</div>
		<!-----------------------------------Modal_popup_box_End------------------------------------------->
