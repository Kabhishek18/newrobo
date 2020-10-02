		<!--------------------------------FOOTER_START-------------------------------------------------->
        <section class="footer_hoilder">
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="col_inner">
								<h6 class="f_head"><span class="footer_heading">About Us</span><span class="footer_line"></span></h6>
								<div class="col_inner_box">
									<p class="footer_sub_heading">Elipsis magna a nulla elite forte maecenas est elementum magna etos interdum movum morbi vehicula morbi.</p>
									<div class="footer_logo">
										<a href="index.html"><img src="<?=base_url()?>assets/img/White_log.png" alt=""></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="col_inner">
								<h6 class="f_head"><span class="footer_heading">Courses</span><span class="footer_line"></span></h6>
								<div class="col_inner_box">
									<ul>
										<?php $plists = $this->cart_model->Getcat();
											foreach($plists as $list){?>	
			                            <li >
			                                <a href="<?=base_url()?>courses/<?=$list['id']?>/<?=$list['cat_name']?>"><b><?=$list['cat_name']?></b></a>
			                            </li>
									<?php }?>		
									 
										<li><a href="<?=base_url()?>gallery">Gallery</a></li>
						
									 
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="col_inner">
								<h6 class="f_head"><span class="footer_heading">Important pages</span><span class="footer_line"></span></h6>
								<div class="col_inner_box">
									<ul>
										<li><a href="aboutus.html">About</a></li>
										<li><a href="privacy_policy.html">Privacy Policy</a></li>
										<li><a href="">Refund Policy</a></li>
										<li><a href="faq.html">FAQ's</a></li>
										<li><a href="blog.html">Blogs</a></li>
										<li><a href="contactus.html">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="col_inner">
								<h6 class="f_head"><span class="footer_heading">Contact Us</span><span class="footer_line"></span></h6>
								<div class="col_inner_box">
									<form method="Post" action="<?=base_url()?>page/ContactMail">
                     					 <div class="form-group">
		                                     <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Your Name *">
		                                 </div>
		 
		                                 <div class="form-group">
		                                     <input type="email" name ="email" class="form-control" id="inputPassword4" placeholder="Your E-mail *">
		                                 </div>
		 
		                                 <div class="form-group">
		                                     <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="Phone number*">
		                                 </div>

										  <div class="form-group">
											 <textarea class = "form-control" name="message" rows = "3" placeholder = "Course Details"></textarea>
										  </div>
									 
										  <button type="submit" class="btn btn-primary">Submit</button>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<section id="footer_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="social_box">
								<ul>
									<li><a href="https://www.facebook.com/newrobos/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									
									<li><a href="https://www.youtube.com/channel/UC9dnM6vA_FOyGvmdga1jibQ?view_as=subscriber"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									
									<li><a href="https://www.instagram.com/newrobos/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									
									<li><a href="https://twitter.com/New_Robos"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

								</ul>
								
								
							 
								
								
								
								
							
								
							</div>
							<div class="copyright">
								<div class="copy_left">
									copyright ©&nbsp; 2020, NewRobos. All Rights Reserved.
								</div>
								<div class="copy_right">
									<a href="http://www.neomatechnologies.com/">Powered by Neoma Technologies</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
		<!--------------------------------FOOTER_SECTION_END-------------------------------------------->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/SmoothScroll.min.js"></script>
    <script src="<?=base_url()?>assets/slick/jquery-2.2.0.min.js"></script>
    <script src="<?=base_url()?>assets/slick/slick.js" type="text/javascript" charset="utf-8"></script> 
    <script src="<?=base_url()?>assets/js/custom.js"></script>
	<script src="<?=base_url()?>assets/dist/simple-lightbox.js"></script>
 
 
 
<script type="text/javascript">
	$('.banner').slick({
	  autoplay: true,
	  speed: 800,
	  lazyLoad: 'progressive',
	  arrows: true,
	  dots: false,
		prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
		nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
	}).slickAnimation();

	$('.slick-nav').on('click touch', function(e) {

		    e.preventDefault();

		    var arrow = $(this);

		    if(!arrow.hasClass('animate')) {
		        arrow.addClass('animate');
		        setTimeout(() => {
		            arrow.removeClass('animate');
		        }, 1600);
		    }

	});
</script>
 

 
 </body>
 
</html>