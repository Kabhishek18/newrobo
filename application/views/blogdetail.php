	<!---------------------------------------------------Breadcrumb_Box_Start------------------------------>
		<section class="breadcrumb_box blog_breadcrumb">
			<div class="container">
				<div class="breadcrumb_text">
					<h1>Blog Details</h1>
			 							
				</div>
			</div>
		</section>
		<!---------------------------------------------------Breadcrumb_Box_End------------------------------>

		<!---------------------------------------------------Blog-Start--------------------------------------------->
		<section class="blog_wrapper p_t_50 p_b_50">
			<div class="container">
				<div class="row">
					<?php if($this->session->flashdata('success')){ ?>
                    <div class="col-md-12 mb-3">
                    <div class="alert alert-success" role="alert">
                                             <p class="mb-0">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </p>
                                        </div>
                    </div>                   
                         <?php }elseif($this->session->flashdata('warning')){ ?>  
                         <div class="col-md-12 mb-3">
                       <div class="alert alert-danger" role="alert">
                                          
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('warning'); ?>
                                            </p>
                                        </div>
                           </div>             
                        <?php }?> 
					<div class="col-md-9">
						<div class="blog_post blog_detail_left">
							<div class="post_list_container">
								<div class="post_list_container_header">
									<h4><a href="#"><?=$blog_title?></a></h4>
									<a href="#" class="post-date"><?=date('F,d Y',strtotime($created))?></a>
								</div>

								<div class="blog-component-image">
									<a href="">
										<img src="<?=base_url()?>uploads/blog/<?=$blog_image?>" alt="">
										<span><span><span></span></span></span>
									</a>
									<div class="blog_span_img"></div>
								</div>

								<div class="blog_post_meta">
									<ul>
										<li class="author"><a href=""><?=$blog_author?></a></li>
										<li class="category"><a href=""><?=$blurb_1?></a></li>
										<li class="comment"><a href=""><?=$blurb_2?></a></li>
									</ul>
								</div>

								<div class="blog_post_content">
									<?=$blog_description?>
								</div>
								<div class="blog_post_detail_btn"><a href="javascript:void(0)" class="component-button yellow_color_t">
								LEAVE MESSAGE<i></i></a></div>
							</div>
							<?php $comments = $this->page_model->ListReviewBlog($id)
									 ?>
							<div class="all_comment_box">
								<h5>All Comments (<?=count($comments)?>)</h5>
								<div class="comment_inner_box">

									<?php foreach($comments as $comment ){?>
									<div class="comment_holder">
										<div class="client_img">
											<img src="<?=base_url()?>assets/img/client1.png" alt="text">
										</div>
										<div class="client_right">
											<h6 class="comment-meta-author"><?=$comment['review_name']?></h6>
											<div class="comment-meta-date"><?=date('F,d Y',strtotime($comment['created']))?> at <?=date('H:s',strtotime($comment['created']))?></div>
											<p><?=$comment['review_description']?>.</p>
											
										</div>
									</div>
									<?php }?>
								</div>
							</div>
							<div class="reply-form">
								<h5>Leave Your Reply</h5>
								<p>Your email address will not be published. Required fields are marked *</p>
								<form method="post" action="<?=base_url()?>page/ReviewInsert">
								  <div class="form-row">
								  	<input type="hidden" name="review_blog_id" value="<?=$id?>">
									 <div class="col-12 form-group">
											 <textarea class="form-control" id="exampleFormControlTextarea1"  name ="review_description" placeholder="Comment" rows="5" required=""></textarea>
										</div>
										<div class="form-group col-12">
											<input type="text" class="form-control reply_form_filed" id="inputEmail4" name="review_name" placeholder="Your Name *" required="">
										</div>

										<div class="form-group col-12">
											<input type="email" class="form-control reply_form_filed" id="inputPassword4" name="review_email" placeholder="Your E-mail *" required="">
										</div>

										<div class="form-group col-12"> 
											<input type="number" class="form-control reply_form_filed" id="inputEmail4" name="review_phone" placeholder="Phone number*" required="">
										</div>
									</div>
									<div class="sub"><button type="submit" class="btn btn-primary">POST COMMENT</button></div>
								</form>
							</div>
						</div>
					</div>


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
 
							<div class="recent_post m_t_50">
								<div class="post_categories_heading">
									<h6>
										<span>MOST COMMENTED</span>
										<span></span>
									</h6>
								</div>

								<div class=" blog_post_list">
								<?php $lists =$this->page_model->MostCommentReview();?>	
								<?php foreach($lists as $list){?>
								<?php $plate =$this->page_model->ListBlog($list['review_blog_id']); ?>
									<div class="blog_post_feature">
										<div class="feature_post_img">
											<img src="<?=base_url()?>uploads/blog/<?=$plate['blog_image']?>" alt="text">
										</div>
										<div class="feature_post_text">
											<h6>
												<a href="">
													<?=$plate['blog_title']?>
												</a>
											</h6>
											<span class="icon-blog icon-blog-comment"><?=date('F d,Y',strtotime($plate['created']))?></span>
										</div>
									</div>
								<?php }?>	
								</div>
							</div>

						</div>
					</div>
					
				</div>

			</div> 
		</section>
		<!---------------------------------------------------Blog-End-------------------------------------------->