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
							<div class="price_plan_box_inner">
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
							      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
							      </div>
							    </div>
							    <div class="accordion-item">
							      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
							      <div class="accordion-content">
							        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
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
							<a href="https://newrobos.com/course/1">Book now  <i class="fa fa-angle-right rightarrow" aria-hidden="true"></i></a>
						</div>
					</div>
				
				</div>
			</div>
		</section>
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

 