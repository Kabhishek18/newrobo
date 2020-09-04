  <div class="container">
  <div class="py-5 text-center">
    
    <h3 class="Learner">Checkout form</h3>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?=$product_name?></h6>
            <small class="text-muted"><?=$product_slug?></small>
          </div>
          <?php  
          if($_SESSION['checkout']['selection'] == 1){?>
            <span class="text-muted">₹ <?=$_SESSION['checkout']['pro']['novice_price']?></span>
          <?php }else if($_SESSION['checkout']['selection'] ==2){?>
            <span class="text-muted">₹ <?=$_SESSION['checkout']['pro']['developer_price']?></span>  
          <?php }else if($_SESSION['checkout']['selection'] ==3){?>  
            <span class="text-muted">₹ <?=$_SESSION['checkout']['pro']['champion_price']?></span>
          <?php }?>  
        </li>

        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong> <?php  
          if($_SESSION['checkout']['selection'] == 1){?>
            ₹ <?=$_SESSION['checkout']['pro']['novice_price']?>
          <?php }else if($_SESSION['checkout']['selection'] ==2){?>
            ₹ <?=$_SESSION['checkout']['pro']['developer_price']?>  
          <?php }else if($_SESSION['checkout']['selection'] ==3){?>  
            ₹ <?=$_SESSION['checkout']['pro']['champion_price']?>
          <?php }?>  
        </strong>
        </li>
      </ul>

   <!--    <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> -->
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" method="post" action="<?=base_url()?>page/Order">
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
          <div class="col-md-12 mb-3">
            <label for="firstName">Full Name</label>
            <input type="text" class="form-control" id="firstName" name="name"  placeholder="Full Name" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Country" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state" placeholder="State" required>
              <div class="invalid-feedback">
                State required.
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control"  name="zip" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
     
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        <hr class="mb-4">
      </form>
    </div>
  </div>
</div>