<!---------------------------------------------------Breadcrumb_Box_Start------------------------------>
<section class="breadcrumb_box about_breadcrumb">
      <div class="container">
        <div class="breadcrumb_text">
          <h1>Student</h1>
          <h6>Dashboard</h6>             
        </div>
      </div>
    </section>
<!---------------------------------------------------Breadcrumb_Box_Start------------------------------>
<section class="about_us_container p_t_50 p_b_50">
  <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false">Orders</a>
              <a class="nav-link" href="<?=base_url()?>student/Logout">Logout</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                   <div class="container">
                     <div class="row">
                       <div class="col-9">
                          <table class="table">
                      <tr>
                        <th>#</th>
                        <th>Order Id</th>
                      <th>Order Amount</th>
                      <th>Order Course</th>
                      <th>Billing</th>
                      <th>Order Date</th> 
                      </tr>
                        <?php $user = $this->session->student_account; 
                        $orders =$this->cart_model->ListOrder($user['users_id']);?>
                        <?php $i=1 ;foreach ($orders as $order) {?>
                         <tr>
                          <td><?=($i++)?></td>
                           <td><?=$order['order_id']?></td>
                           <td><?=$order['order_amount']?></td>
                           <?php $pro =$this->cart_model->ListCourse($order['order_cart']);?>
                           <td><?=$pro['product_name']?></td>
                           <?php $bill =json_decode($order['order_detail'],TRUE); ?>
                           <td>
                             <p>Name : <?=$bill['name']?></p>
                             <p>Email : <?=$bill['email']?></p>
                             <p>Address : <?=$bill['address']?></p>
                             <p>Address 2: <?=$bill['address2']?></p>
                             <p>Country : <?=$bill['country']?></p>
                             <p>State : <?=$bill['state']?></p>
                             <p>Zip : <?=$bill['zip']?></p>
                           </td>
                           <td><?=date('F,d Y,h:i:s',strtotime($order['order_modified']))?></td>
                         </tr>
                        <?php }?>        
                    </table>
                       </div>
                     </div>
                   </div>
               
              </div>
          
            </div>
          </div>
        </div>
  </div>
</section>