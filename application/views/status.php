
	<!-- Our Dashbord -->
		<section class="about_us_container p_t_50 p_b_50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					
						<center>
							<h1>
								<?php if($this->session->flashdata('error')){ ?>
		                        <?php echo $this->session->flashdata('error'); } ?>
		                        <?php if($this->session->flashdata('success')){ ?>
		                        <?php echo $this->session->flashdata('success'); } ?>	
							</h1>
							
						</center>
					
				</div>
			</div>
		</div>
	</section>

