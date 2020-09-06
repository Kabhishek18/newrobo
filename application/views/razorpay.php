<?php 
  $detail =  json_decode($order_detail,TRUE);
  $product =  $_SESSION['checkout'];
?>

</head><script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<div class="container">
<br><br><br>
<div class="row">
  <div class="col-md-12 ">
    <div class="alert alert-warning">
     <p>1. <strong>Warning!</strong> Please Don't end Session or Browser.</p>
     <p>2. <strong>Note!</strong> Please Follow up the instruction as given Below.</p>
    </div>
  </div>
<div class="col-md-4">
<figure class="card card-product">
  <div class="bottom-wrap">
    <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1000" data-id="1">Proceed To Payment</a> 
  </div> <!-- bottom-wrap.// -->
</figure>
</div> <!-- col // -->
<div class="col-md-4">
<figure class="card card-product">

  <div class="bottom-wrap">
      <a href="<?=base_url()?>checkout" onclick="window.history.back();"class="btn btn-sm btn-success float-right ">Back To Checkout</a> 
     
  </div> <!-- bottom-wrap.// -->
</figure>
</div> <!-- col // -->
<div class="col-md-4">
<figure class="card card-product">
  <div class="bottom-wrap">
      <a href="<?=base_url()?>" class=" btn btn-info float-right ">Home</a>
  </div> <!-- bottom-wrap.// -->
</figure>
</div> <!-- col // -->
</div> <!-- row.// -->
</div> 
<!--container.//-->
 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  var SITEURL = "<?=base_url()?>";
  $('body').on('click', '.buy_now', function(e){
    var totalAmount = "<?=$order_amount?>";
    var product_id =   "<?=$product['pro']['id']?>";
    var product_desc =   "<?=$product['pro']['product_name']?>";
    var img_url = SITEURL.concat('assets/img/logo.jpg');
    var options = {
    "key": "rzp_test_OD5kkX7KJcn8Yd",
    "amount": (totalAmount*100), 
    "name": "New Robos",
    "description": product_desc,
    "image": img_url,
    "handler": function (response){
          $.ajax({
            url: SITEURL + 'page/razorPaySuccess',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = SITEURL + 'page/RazorThankYou';
            }

        });
      
    },
 
    "theme": {
        "color": "#56509f"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>