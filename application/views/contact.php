
			<div class="google_map">
					 
					
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14018.832687611388!2d77.2397564!3d28.5484901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c2d63541da8daba!2sNewRobos!5e0!3m2!1sen!2sin!4v1597928968695!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                 </div>
                 
              
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
 
         <!---------------------------------------------------Contact-us_Start----------------------------->
         <section class="contact_us_box p_t_50 p_b_50">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="addrress_list">
                             <div class="feature-size-medium"></div>
                             <div class="feature_text">
                                 <h5>Postal Address</h5>
                                 <p>
                                     C-50, Greater Kailash 1<br>
                                      C Block, Greater Kailash I<br>
                                      Greater Kailash<br>
                                     New Delhi -110048	<br>
                                     
                                      
                                 </p>
                             </div>
                         </div>
                     </div>
 
                     <div class="col-md-4">
                         <div class="addrress_list">
                             <div class="feature-size-medium feature_mob" ></div>
                             <div class="feature_text">
                                 <h5>Phone & E-mail</h5>
                                 <p>
                                 
                                 Office : 011- 4019 6289<br>
 Mobile 1: 85108 26062<br>
 Mobile 2: 99997 05943<br>
                                 <a href="mailto:info@newrobos.com">info@newrobos.com</a>			
                                 </p>
                             </div>
                         </div>
                     </div>
 
                     <div class="col-md-4">
                         <div class="addrress_list">
                             <div class="feature-size-medium feature_time"></div>
                             <div class="feature_text">
                                 <h5>Business Hours</h5>
                                 <p>
                                 Monday – Saturday<br>
                                 10:00 am – 7:00 pm<br>
                           							
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
 
  
                 <div class="contact_form">
                     <form method="Post" action="<?=base_url()?>page/ContactMail">
                         <div class="form-row">
                             <div class=" col-md-6 form_left">
                                 <div class="form-group">
                                     <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name *">
                                 </div>
 
                                 <div class="form-group">
                                     <input type="email" name ="email" class="form-control" id="inputPassword4" placeholder="Mail *">
                                 </div>
 
                                 <div class="form-group">
                                     <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="Number*">
                                 </div>     
                             </div>
 
 
                             <div class="col-md-6">
                                 <div class="form-group">
                                      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" name="message" rows="8 "></textarea>
                                 </div>
                             </div>
                         </div>
 
                         <div class="sub">
                             <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                         </div>
                     </form>
                 </div>
 
                 <style>
				 input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
				 </style>
             </div>
         </section>
         <!---------------------------------------------------Contact-us_End----------------------------->
 