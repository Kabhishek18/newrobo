		<!--------------------------------FOOTER_START-------------------------------------------------->
        <section class="footer_hoilder">
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="col_inner">
								<h6 class="f_head"><span class="footer_heading">About Us</span><span class="footer_line"></span></h6>
								<div class="col_inner_box">
									<p class="footer_sub_heading">
									NewRobos is an online coding academy for kids that helps them with a platform where they can learn to exhibit their creative side which otherwise remains hidden.<a href="https://newrobos.com/aboutus" class="readmoreaboutus">Read More</a>
									</p>
									
									<div class="footer_logo">
										<a href="https://newrobos.com/"><img src="<?=base_url()?>assets/img/whitelogo.png" alt=""></a>
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
			                                <a href="<?=base_url()?>courses/<?=$list['id']?>/<?=$list['cat_name']?>"><?=$list['cat_name']?></a>
			                            </li>
									<?php }?>		
									 
									
						
									 
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="col_inner">
								<h6 class="f_head"><span class="footer_heading">Important pages</span><span class="footer_line"></span></h6>
								<div class="col_inner_box">
									 
									<ul>
										<li><a href="aboutus">About</a></li>
										<li><a href="<?=base_url()?>gallery">Gallery</a></li>
										<li><a href="privacy_policy">Privacy Policy</a></li>
										<li><a href="faq">FAQ's</a></li>
										<li><a href="tc">Terms & Conditions</a></li>
										<li><a href="blog">Blogs</a></li>
										<li><a href="contactus">Contact Us</a></li>
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

							<div class="copyright">
								<div class="copy_left">
									copyright ©&nbsp; 2020, NewRobos. All Rights Reserved.
								</div>
								
							<div class="social_box">
								<ul>
									<li><a href="https://www.facebook.com/newrobos/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									
									<li><a href="https://www.youtube.com/channel/UC9dnM6vA_FOyGvmdga1jibQ?view_as=subscriber"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									
									<li><a href="https://www.instagram.com/newrobos/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									
									<li><a href="https://twitter.com/New_Robos"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

								</ul>
							</div>
						 
								
								<div class="footer-text">
									Made with
									<div class="heart"></div>
									in India.
								</div>
								
<style>
.copyright {
    display: flex;
    justify-content: space-between;
    color: rgb(86 80 159) !important;
    align-items: center;
}
.footer-text {
display: flex;
align-items: center;
margin-bottom: 0;
 color: #5a7184;
letter-spacing: .2px;
text-align: justify;
 
}
.footer-text .heart {
    position: relative;
    width: .5rem;
    height: .5rem;
    background-color: f4bd00;
    transform: rotate(45deg);
    -webkit-animation: e 1.2s linear infinite;
    animation: e 1.2s linear infinite;
    margin: .6rem;
}
.footer-text .heart:after, .footer-text .heart:before {
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #f4bd00;
    border-radius: 50%;
}
.footer-text .heart:before {
    transform: translateY(-50%);
}
.footer-text .heart:after {
    transform: translateX(-50%);
}
.copyright {
    display: flex;
    justify-content: space-between;
    color: rgb(86 80 159) !important;
    align-items: center;
}
.purple_color {
    background-color: #56509F;
    min-height: auto !important;
}
.testimonial P {
    font-size: 25px;
    line-height: 1.8em;
    color: #ffffff;
    /* font-family: lato; */
    font-weight: 300;
    width: 75%;
    margin: auto;
}
body{
	    font-family: 'Open Sans', sans-serif !important;
}


 
.footer_logo img {
	width: 90%;
	opacity: .8;
}
#selectprice  .modal-body{
	padding: 19px !important;
}
.post_title h2 {
	min-height: 85px;
}
.class_col_box {
	min-height: 200px;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	margin: 0; 
}
 



 
 
.component-list{
	min-height:180px;
}
.component-pricing-plan-header {
 
    min-height: 71px;
}
.component-pricing-plan-description {
 
    min-height: 50px;
}





</style>
								
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