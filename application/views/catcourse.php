<!-------------------------------breadcrumb_box_start-------------------------------------->
<section class="breadcrumb_box plan_breadcrumb">
			<div class="container">
				<div class="breadcrumb_text">
					<h1><?=$cat['cat_name']?></h1>
					<h6>Exclusively designed for <?=$cat['cat_slug']?></h6>							
				</div>
			</div>
		</section>
		<!-------------------------------breadcrumb_box_End--------------------------------------------->

		<!-------------------------------session_plan_Start--------------------------------------------->
		<section id="session_plan" class="p_t_50 p_b_50">
			<div class="container">
				<div class="title">
					<h2>Our Session Plan</h2>
					<h6>We offer a quality children care and friendly atmosphere</h6>
					<div></div>
					
				</div>
			</div>
			<div class="price_plan_box margin_top_100">
				<div class="container">
					<div class="row">
						<?php foreach($catpro as $item){?>
						<div class="col-md-6">
							<div class="price_plan_box_inner price_1">
								<div class="price_plan_box_inner_white">
									<div class="component-pricing-plan-price">
										<span>Visual Class</span>
									</div>
									<h5 class="component-pricing-plan-header">
									<?=$item['product_name']?>
									</h5>
									<div class="component-pricing-plan-description">
										<?=$item['product_slug']?>
									</div>

									<div class="component-pricing-plan-feature">
										<div class="component-list">
											<?=$item['product_highlight']?>
										</div> 
 

									</div>

									<div class="component-pricing-plan-button">
										<a href="<?=base_url()?>course/<?=$item['id']?>" class="component-button">Explore More<i></i></a>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
						
				 
					</div>
				</div>
			</div>
		</section>
		<!-------------------------------session_plan_End--------------------------------------------->

		<!-------------------------------our_goal_section_Start--------------------------------------------->
		<section id="our_goal_section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="goal_left">
							<h4>Our goal is to create a place that engages each child.</h4>
							<div class="component-list component-list-style-1-alt">
								<ul>
									<li>Comprehensive reporting on individual achievement</li>
									<li>Educational field trips and school presentations</li>
									<li>Individual attention in a small-class setting</li>
									<li>Learning program with after-school care</li>
									<li>Opportunities to carry out scientific investigations</li>
									<li>Positive learning environment for your child</li>
									<li>Delightful, friendly and welcoming place</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="faq_box">
							<div class="container">
							  <div class="accordion">
							    <div class="accordion-item">
							      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Where is NewRobos based?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>NewRobos is based in Delhi, India.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Do you provide a free trial?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Yes, we offer 1 free demo class of 60 minutes for you to decide on the enrollment in the course.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What are the courses for beginners?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>We have two courses for beginners- Scratch Programming and Python Junior.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">What will be the duration of the courses?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Each course can take anywhere between 10-12 hours to complete. But sometimes it also depends on the child’s speed to grasp and learn.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Will the courses be live or will it be self-paced?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Our courses will be live. They will be conducted on Zoom and Google Meet. If the kids have queries, they can get in touch with our faculty anytime.</p>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-------------------------------our_goal_section_End--------------------------------------------->
		

		<!-------------------------------------Enroll_section_start------------------------------------------->
		<section id="enroll_section" class="child_enroll enroll_white">
			<div class="container">
				<div class="enroll_section_inner">
					<div class="enroll_box">
						<div class="enroll_text">
							<h3><span>Book a free</span> Demo For Your Child</h3>
						</div>
						<div class="enroll_btn_box">
							<a href="#" data-toggle="modal" data-target="#freedemoformmodal">Book now  <i class="fa fa-angle-right rightarrow" aria-hidden="true"></i></a>
						</div>
					</div>
				
				</div>
			</div>
		</section>
		<!-- Modal -->
			<div class="modal fade freebookdemoform" id="freedemoformmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-body">
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
							<div class="freebook">
								<div class="freebook_box">
									<div class="floating-form">
										<div class="form_logo">
											<img src="https://newrobos.com/assets/img/blacklogo.jpg">
										</div>
										<div class="form_heading_text">
											<h3>Book Your Free Class</h3>
										</div>
										<div class="floating-label">      
										  <input class="floating-input" type="text" placeholder=" ">
										  <span class="highlight"></span>
										  <label class="custom_lable">Enter Parent's Email Id</label>
										</div>
									 
										<div class="floating-label">      
										  <input class="floating-input" type="text" placeholder=" ">
										  <span class="highlight"></span>
										  <label class="custom_lable">Enter Parent's Name</label>
										</div>
										
										<div class="floating-label">      
										  <input class="floating-input" type="number" placeholder=" ">
										  <span class="highlight"></span>
										  <label class="custom_lable">Enter Parent's Mobile</label>
										</div>
										
										<div class="floating-label">      
										  <input class="floating-input" type="number" placeholder=" ">
										  <span class="highlight"></span>
										  <label class="custom_lable">Enter Your Child Name</label>
										</div>
										
										
										<div class="schedule schedule_box">
											<div class="student_age_box">Your Child's Age?</div>
											<div class="stock-images">
												<div class="box_12_wrapper">
													<input id="test1" name="same-group-name" type="radio" checked>
													<label for="test1">
														<div class="image">
															<div class="box_12"> <span class="font14 font12-mob txt-dark-grey ">6 to 8 </span><br><span class="font24 font20-mob txt-dark-grey ">Years</span></div>
														</div>
													</label>
												</div>
												<div class="box_12_wrapper">
													<input id="test2" name="same-group-name" type="radio">
													<label for="test2">
														<div class="image">
															<div class="box_12"> <span class="font14 font12-mob txt-dark-grey ">9 to 12 </span><br><span class="font24 font20-mob txt-dark-grey ">Years</span></div>
														</div>
													</label>
												</div>
												<div class="box_12_wrapper">
													<input id="test3" name="same-group-name" type="radio">
													<label for="test3">
														<div class="image">
															<div class="box_12"> <span class="font14 font12-mob txt-dark-grey ">13 to 16 </span><br><span class="font24 font20-mob txt-dark-grey ">Years</span></div>
														</div>
													</label>
												</div>
												
												<div class="box_12_wrapper">
													<input id="test4" name="same-group-name" type="radio">
													<label for="test4">
														<div class="image">
															<div class="box_12"> <span class="font14 font12-mob txt-dark-grey ">17 + </span><br><span class="font24 font20-mob txt-dark-grey ">Years</span></div>
														</div>
													</label>
												</div>
											</div>
										</div>
										
										<div class="radio_box schedule_box">
											<div class="student_age_box">Do you have Laptop/PC at home for class?</div>
											<div class="yesno">
												<div class="form-check form-check-inline">
												 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
												  <label class="form-check-label" for="inlineRadio1">Yes</label>
												</div>
												<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
												  <label class="form-check-label" for="inlineRadio2">No</label>
												</div>
											</div>
										</div>
										<div class="free_demo_class">
											<a href="">Schedule a Free Class</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


<style>
.freebookdemoform .modal-dialog{max-width:524px;margin:1.75rem auto}.free_demo_class a{background-color:#f4bd00;color:#fff;padding:13px 24px;font-weight:600;text-transform:unset;font-size:20px;border-radius:6px}.free_demo_class{margin:auto;text-align:center}.form_heading_text h3{text-align:center;font-size:25px;font-weight:inherit;line-height:1em;font-style:normal;color:#56509F;letter-spacing:1px;margin-bottom:20px}.form_logo{text-align:center;margin-bottom:25px}.form_logo img{width:150px}.schedule_box{margin-bottom:15px}.yesno{text-align:left}.student_age_box{font-size:21px;font-weight:inherit;line-height:1em;font-style:normal;color:#56509F;letter-spacing:1px;text-align:left;margin-bottom:10px}.floating-form{background:#fff;padding:10px 30px 30px;border:1px solid #bfbfbf;margin:auto}.floating-label{position:relative;margin-bottom:20px}.floating-input,.floating-select{border:1px solid #bfbfbf;font-size:14px;padding:4px 4px;display:block;width:100%;height:45px}.floating-label label{color:#999;font-size:16px;font-weight:400;position:absolute;pointer-events:none;left:10px;top:10px;transition:0.2s ease all;-moz-transition:0.2s ease all;-webkit-transition:0.2s ease all;background:#fff}.floating-input:focus~label,.floating-input:not(:placeholder-shown)~label{top:-14px;font-size:14px;color:#5264AE}.floating-select:focus~label,.floating-select:not([value=""]):valid~label{top:-14px;font-size:14px;color:#5264AE}.floating-input:focus~.bar:before,.floating-input:focus~.bar:after,.floating-select:focus~.bar:before,.floating-select:focus~.bar:after{width:50%}*,*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.highlight{position:absolute;height:50%;width:100%;top:15%;left:0;pointer-events:none;opacity:.5}.floating-input:focus~.highlight,.floating-select:focus~.highlight{-webkit-animation:inputHighlighter 0.3s ease;-moz-animation:inputHighlighter 0.3s ease;animation:inputHighlighter 0.3s ease}@-webkit-keyframes inputHighlighter{from{background:#5264AE}to{width:0;background:transparent}}@-moz-keyframes inputHighlighter{from{background:#5264AE}to{width:0;background:transparent}}@keyframes inputHighlighter{from{background:#5264AE}to{width:0;background:transparent}}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}.stock-images{display:flex;-webkit-flex-flow:row wrap;justify-content:flex-start}.box_12_wrapper input{display:none}.box_12{border-width:1px;border-style:solid;border-radius:3px;padding:8px;margin:8px 16px 8px 0;text-align:center;border-color:#212121;text-align:center;letter-spacing:.3px;font-size:1rem!important;font-weight:400;text-align:center;width:90px}.stock-images [type=radio]+label:after,.stock-images [type=radio]+label:before{display:none}.stock-images [type=radio]+label{position:relative;padding-left:0!important;cursor:pointer;display:inline-block;line-height:25px;font-size:1rem;transition:.28s ease;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.stock-images [type=radio]:not(:checked)+label .box_12{border:1px solid #bfbfbf;color:#999}.stock-images [type=radio]:checked+label .box_12{border:1px solid #f4bd00;background-color:#f4bd00;color:#fff}
</style>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--------------------------------------Enroll_end-------------------------------------------------->

		<!---------------------------------------other_start----------------------------------------------->
		<section id="other_services" class="p_t_50 p_b_50 hide_from_innerpages">
			<div class="container">
				<div class="title">
					<h2>Other Services</h2>
					<h6>We offer a quality children care and friendly atmosphere</h6>
					<div></div>
				</div>
			</div>

			<div class="container margin_top_100">
				<div class="row">
					<div class="col-md-4">
						<div class="price_plan_box_inner_white">
						 	<div class="other_services_price">
								<span>$15</span>
								<span>/ day</span>
							</div>

							<h5 class="component-pricing-plan-header">
								Morning Session
							</h5>
							<div class="component-pricing-plan-description">
								Movum elementum pulvinar detos morbi a dosis retrum gravida.
							</div>

							<div class="component-pricing-plan-feature">
								<div class="component-list">
									<ul>
										<li>8 am - 12 Noon Care</li>
										<li>3 Meals a Day</li>
										<li>Science Classes</li>
										<li>2 Educators</li>	
									</ul>
								</div>
							</div>

							<div class="component-pricing-plan-button">
								<a href="#" class="component-button">Choose Plan<i></i></a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="price_plan_box_inner_white">
							<div class="other_services_price">
								<span>$15</span>
								<span>/ day</span>
							</div>
							<h5 class="component-pricing-plan-header">
								Morning Session
							</h5>
							<div class="component-pricing-plan-description">
								Movum elementum pulvinar detos morbi a dosis retrum gravida.
							</div>

							<div class="component-pricing-plan-feature">
								<div class="component-list">
									<ul>
										<li>8 am - 12 Noon Care</li>
										<li>3 Meals a Day</li>
										<li>Science Classes</li>
										<li>2 Educators</li>	
									</ul>
								</div>
							</div>

							<div class="component-pricing-plan-button">
								<a href="#" class="component-button">Choose Plan<i></i></a>
							</div>
						</div>
					</div>


					<div class="col-md-4">
						<div class="price_plan_box_inner_white">
							<div class="other_services_price">
								<span>$15</span>
								<span>/ day</span>
							</div>
							<h5 class="component-pricing-plan-header">
								Morning Session
							</h5>
							<div class="component-pricing-plan-description">
								Movum elementum pulvinar detos morbi a dosis retrum gravida.
							</div>

							<div class="component-pricing-plan-feature">
								<div class="component-list">
									<ul>
										<li>8 am - 12 Noon Care</li>
										<li>3 Meals a Day</li>
										<li>Science Classes</li>
										<li>2 Educators</li>	
									</ul>
								</div>
							</div>

							<div class="component-pricing-plan-button">
								<a href="#" class="component-button">Choose Plan<i></i></a>
							</div>
						</div>
					</div>
					 
				</div>
			</div>
		</section>
		<!-------------------------------other_end---------------------------------------------------------->

 