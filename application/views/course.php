
    	<!-------------------------course_detail_wrapper_START-------------------------------------------------->
		<section class="course_detail_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="course_detail_banner_left">
							<div class="course_navigation">
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
								    <li class="breadcrumb-item"><a href="#">Home</a></li>
								    <li class="breadcrumb-item active" aria-current="page"><?=$product_name?></li>
								  </ol>
								</nav>

								<div class="c_c_l_box">
									<h1><?=$product_name?></h1>
									<p><?=$product_slug?></p>

									<div class="component-list">
										<h3>Key Highlights</h3>

											<div class="ul_box">
												<?=$product_highlight?>
											</div>
										</div>

									<div class="cta_btn">
										<form method="post" action="<?=base_url()?>page/Checkout">
											<input type="hidden" name="id" value="<?=$id?>">
											<input class=" btn button-custom animated text-white" type="submit" value="Enroll Now">
										</form>
										
										<button class=" btn button-custom animated text-white" data-toggle="modal" data-target="#exampleModalCenter"> Enroll Now</button>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-6">
						<div class="course_detail_banner_right">
							<div class="social_box_banner">
							 
								<ul>
									<span>Share:</span>
									<li><a href="https://www.facebook.com/newrobos/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UC9dnM6vA_FOyGvmdga1jibQ?view_as=subscriber"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="https://www.instagram.com/newrobos/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com/New_Robos"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>

							</div>
							<div class="c_d_b_r_img_box">
								<img src="<?=base_url()?>assets/img/dummy.jpg" alt="">
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!---------------------course_detail_wrapper_End-------------------------------------------------->
 
		<!---------------------------external_section_start------------------------------------------------------------>
			<section id="external_section" class="p_t_50 ">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="section_external_col">
								<h3 class="Learner"> Novice </h3>
								<div class="pricedetail">
									<?=$product_novice?>
								</div>
								<button class=" btn button-custom animated" data-toggle="modal" data-target="#book_now">Book Now</button>
							</div>
						</div>
						
						
						<div class="col-md-4">
							<div class="section_external_col">
								<h3 class="Learner"> Developer </h3>
								<div class="pricedetail">
									<?=$product_developer?>
								</div>
								<button class=" btn button-custom animated" data-toggle="modal" data-target="#book_now">Book Now</button>
							</div>
						</div>
 

						<div class="col-md-4">
							<div class="section_external_col">
								<h3 class="Learner"> Champion </h3>
								<div class="pricedetail">
									<?=$product_champion?>
								</div>
								<button class=" btn button-custom animated" data-toggle="modal" data-target="#book_now">Book Now</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!---------------------------external_section_End------------------------------------------------------------>
    
        <!------------------------------------------BOOK_NOW_FORM_START------------------------------------------------>
			<div class="modal fade" id="book_now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered"  >
				<div class="modal-content">
				  <div class="modal-header">
				  <div class="logo_book"><img src="img/logo.jpg"></div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
				  <h3>Register Now to attend the live class!</h3>
					<form>
					
					<div class="form-group">
						<input type="text" class="form-control" id="recipient-name" placeholder="Enter Name">
					  </div>
					  
					 <div class="form-group">
						<input type="text" class="form-control" id="recipient-name" placeholder="Enter Phone no">
					  </div>
					  
					  <div class="form-group">
						<input type="text" class="form-control" id="recipient-name" placeholder="Enter E-Mail">
					  </div>
					
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Send message</button>
				  </div>
				</div>
			  </div>
			</div>
		<!------------------------------------------BOOK_NOW_FORM_END------------------------------------------------>

		<!-------------------------course_detail_content_box_START-------------------------------------------------->
		<section id="course_detail_content_box" class="p_t_50 p_b_50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						 
						<div class="course_detail_content_box_inner">
							 
							<?=$product_description?>

 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-------------------------course_detail_content_box_End-------------------------------------------------->

