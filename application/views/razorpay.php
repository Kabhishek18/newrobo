<?php 
  $detail =  json_decode($order_detail,TRUE);
  $product =  json_decode($order_product,TRUE);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment With Codeigniter</title>
</head><script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<body>
<div class="container">
<br><br><br>
<div class="row">
<div class="col-md-4">
<figure class="card card-product">
    <?=var_dump($detail)?>
  <div class="bottom-wrap">
    <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1000" data-id="1">Order Now</a> 
  </div> <!-- bottom-wrap.// -->
</figure>
</div> <!-- col // -->
<div class="col-md-4">
<figure class="card card-product">
  <div class="img-wrap"><img src="//www.tutsmake.com/wp-content/uploads/2019/03/vvjghg.png"> </div>
  <figcaption class="info-wrap">
      <h4 class="title">Sony Watch</h4>
      <p class="desc">Some small description goes here</p>
      <div class="rating-wrap">
        <div class="label-rating">132 reviews</div>
        <div class="label-rating">154 orders </div>
      </div> <!-- rating-wrap.// -->
  </figcaption>
  <div class="bottom-wrap">
      <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1280" data-id="2">Order Now</a> 
      <div class="price-wrap h5">
        <span class="price-new">₹1280</span> <del class="price-old">₹1400</del>
      </div> <!-- price-wrap.// -->
  </div> <!-- bottom-wrap.// -->
</figure>
</div> <!-- col // -->
<div class="col-md-4">
<figure class="card card-product">
  <div class="img-wrap"><img src="//www.tutsmake.com/wp-content/uploads/2019/03/jhgjhgjg.jpg"></div>
  <figcaption class="info-wrap">
      <h4 class="title">Mobile</h4>
      <p class="desc">Some small description goes here</p>
      <div class="rating-wrap">
        <div class="label-rating">132 reviews</div>
        <div class="label-rating">154 orders </div>
      </div> <!-- rating-wrap.// -->
  </figcaption>
  <div class="bottom-wrap">
      <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1280" data-id="3">Order Now</a> 
      <div class="price-wrap h5">
        <span class="price-new">₹1500</span> <del class="price-old">₹1980</del>
      </div> <!-- price-wrap.// -->
  </div> <!-- bottom-wrap.// -->
</figure>
</div> <!-- col // -->
</div> <!-- row.// -->
</div> 
<!--container.//-->
 
 
</body>
</html>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  var SITEURL = "<?php echo base_url() ?>";
  $('body').on('click', '.buy_now', function(e){
    var totalAmount = "<?=$order_amount?>";
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_live_ILgsfZCZoFIKMb",
    "amount": (totalAmount*100), 
    "name": "Tutsmake",
    "description": "Payment",
    "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "handler": function (response){
          $.ajax({
            url: SITEURL + 'payment/razorPaySuccess',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = SITEURL + 'payment/RazorThankYou';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>