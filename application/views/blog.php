  

		<!---------------------------------------------------Breadcrumb_Box_Start------------------------------>
		<section class="breadcrumb_box blog_breadcrumb">
			<div class="container">
				<div class="breadcrumb_text">
					<h1>Blog</h1>
											
				</div>
			</div>
		</section>
		<!---------------------------------------------------Breadcrumb_Box_End------------------------------>



		<!---------------------------------------------------Blog_Start----------------------->
		<section class="blog_wrapper p_t_50 p_b_50">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="blog_sidebar">
							<div class="recent_post m_t_50">
								<div class="post_categories_heading">
									<h6>
										<span>RECENT POSTS</span>
										<span></span>
									</h6>
								</div>

								<div class=" blog_post_list">
								<?php $recent =$this->page_model->ListBlogLimit(5,'created');
									foreach ($recent as $key ) {?>
										
									<div class="blog_post_feature">
										<div class="feature_post_img">
											<img src="<?=base_url()?>uploads/blog/<?=$key['blog_image']?>" alt="text">
										</div>
										<div class="feature_post_text">
											<h6>
												<a href="">
													<?=$key['blog_title']?>
												</a>
											</h6>
											<span class="icon-blog icon-blog-date"><?=date('F,d Y',strtotime($key['created']))?></span>
										</div>
									</div>
											
									<?php }	?>

									


								</div>
							</div>

					 
<!-- 
							<div class="recent_post m_t_50">
								<div class="post_categories_heading">
									<h6>
										<span>CATEGORIES</span>
										<span></span>
									</h6>
								</div>

								<div class=" blog_post_list">
									<ul>
										<li>
											<a href="">App Development (2)</a>
										</li>
										<li>
											<a href="">Python Junior  (2)</a>
										</li>
										<li>
											<a href="" title="Events (2)">Animation  (2)</a>
										</li>
										<li>
											<a href="" title="Fun (2)">Designing (2)</a>
										</li>
										<li>
											<a href="" title="Games (2)">Games (2)</a>
										</li>
									 
									</ul>
								</div>
							</div>
 -->
						</div>
					</div>
					<div class="col-md-9">
						<div class="blog_post">


							<?php $latest =$this->page_model->ListBlogLimit(10,'modified');
									foreach ($latest as $value ) {?>
								
							<div class="post_list_container">
								<div class="post_list_container_header">
									<h4><a href="<?=base_url()?>blog/<?=$value['id']?>"><?=$value['blog_title']?></a></h4>
									<a href="Correct_Age_of_Kids_for_Learning_Coding.html" class="post-date"><?=date('F,d Y',strtotime($value['created']))?></a>
								</div>

								<div class="blog-component-image">
									<a href="Correct_Age_of_Kids_for_Learning_Coding.html">
										<img src="<?=base_url()?>uploads/blog/<?=$value['blog_image']?>" alt="">
										<span><span><span></span></span></span>
									</a>
									<div class="blog_span_img"></div>
								</div>

								<div class="blog_post_meta">
									<ul>
										<li class="author"><a href=""><?=$value['blog_author']?></a></li>
										<li class="category"><a href=""><?=$value['blurb_1']?></a></li>
										<li class="comment"><a href=""><?=$value['blurb_2']?></a></li>
									</ul>
								</div>

								<div class="blog_post_content">
									<p><?=$value['excerpt']?></p>
								</div>
								<div class="blog_post_detail_btn"><a href="<?=base_url()?>blog/<?=$value['id']?>" class="component-button yellow_color_t">
								Continue reading <i></i></a></div>


							</div>

							<?php }	?>
					


		
						</div>
					</div>
				</div>

			</div> 
		</section>
		<!---------------------------------------------------Blog_End----------------------->

