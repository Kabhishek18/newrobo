
		<!--------------------------------breadcrumb_box_START-------------------------------------------------->
		<section class="breadcrumb_box gallery_breadcrumb">
			<div class="container">
				<div class="breadcrumb_text">
					<h1>Gallery</h1>
					<h6>OUR GALLERY</h6>							
				</div>
			</div>
		</section>
		<!--------------------------------breadcrumb_box_End-------------------------------------------------->


		<!--------------------------------Gallery_START-------------------------------------------------->
		<section id="gallery_tab_wrapper" class="p_t_50 p_b_50">
			<div class="container">
				 <div class="gallery_tab_inner">
				 	<div class=" tab_box">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="gallery1-tab" data-toggle="tab" href="#gallery1" role="tab" aria-controls="gallert1" aria-selected="true">Junior Scientists</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="gallery2-tab" data-toggle="tab" href="#gallery2" role="tab" aria-controls="gallery2" aria-selected="false">Young Engineers</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="gallery3-tab" data-toggle="tab" href="#gallery3" role="tab" aria-controls="gallery3" aria-selected="false">Robo Wizards</a>
							</li>
						</ul>

						<div class="tab-content" id="myTabContent">


							<div class="tab-pane fade show active" id="gallery1" role="tabpanel" aria-labelledby="gallery1-tab">
								<div class="overview_tabpanel">
									<div class="gallery_3">
										<div class="gallery3 plus_icon">
											<div class="row">
												<?php $gallery1 =$this->page_model->CategoryGallery('gallery1'); 
												foreach($gallery1 as $item){?>
												<a href="<?=base_urL()?>uploads/gallery/<?=$item['image']?>" class="big col-md-3 light_box_grid_4 m_15">
													<img src="<?=base_urL()?>uploads/gallery/<?=$item['image']?>" alt="" title="<?=$item['blurb']?>" />
													<div class="text_with_light_box">
														<h6><?=$item['title']?></h6>
														<h5><?=$item['title']?></h5>
													</div>
													<span><span><span></span></span></span>
												</a>
												<?php }?>
											</div>
										</div>
								 </div>	
								</div>
							</div>

							<div class="tab-pane fade" id="gallery2" role="tabpanel" aria-labelledby="gallery2-tab">
								<div class="gallery_3">
										<div class="gallery3 plus_icon">
											<div class="row">
												<?php $gallery2 =$this->page_model->CategoryGallery('gallery2'); 
												foreach($gallery2 as $item){?>
												<a href="<?=base_urL()?>uploads/gallery/<?=$item['image']?>" class="big col-md-3 light_box_grid_4 m_15">
													<img src="<?=base_urL()?>uploads/gallery/<?=$item['image']?>" alt="" title="<?=$item['blurb']?>" />
													<div class="text_with_light_box">
														<h6><?=$item['title']?></h6>
														<h5><?=$item['title']?></h5>
													</div>
													<span><span><span></span></span></span>
												</a>
												<?php }?>
											</div>
										</div>
								 </div>	
							</div>

							<div class="tab-pane fade" id="gallery3" role="tabpanel" aria-labelledby="gallery3-tab">
								<div class="gallery_3">
										<div class="gallery3 plus_icon">
											<div class="row">											
												<?php $gallery3 =$this->page_model->CategoryGallery('gallery3'); 
												foreach($gallery3 as $item){?>
												<a href="<?=base_urL()?>uploads/gallery/<?=$item['image']?>" class="big col-md-3 light_box_grid_4 m_15">
													<img src="<?=base_urL()?>uploads/gallery/<?=$item['image']?>" alt="" title="<?=$item['blurb']?>" />
													<div class="text_with_light_box">
														<h6><?=$item['title']?></h6>
														<h5><?=$item['title']?></h5>
													</div>
													<span><span><span></span></span></span>
												</a>
												<?php }?>
											</div>
										</div>
								 </div>						  
							</div>

						</div>
					</div>
				 </div>
			</div>
		</section>
		<!--------------------------------GALLERY_END-------------------------------------------------->

		<!--------------------------------Enroll_START-------------------------------------------------->
		<section id="enroll_section" class="child_enroll">
			<div class="container">
				<div class="enroll_section_inner">
					<div class="enroll_box">
						<div class="enroll_text">
							<h3>See Our Photo Gallery!</h3>
						</div>
						<div class="enroll_btn_box">
							<a href="">View Gallery  <i class="fa fa-angle-right rightarrow" aria-hidden="true"></i></a>
						</div>
					</div>
				
				</div>
			</div>
		</section>
		<!--------------------------------FENROLL_END-------------------------------------------------->
