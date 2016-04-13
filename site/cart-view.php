<!doctype html>
<html>
<head>
    <title>Run Original</title><!--%%title%%-->
    <base href="<?=SITE_PATH?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
    <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />
    <!-- Start: Meta Info -->
    <!--<meta property="og:image" content="" />-->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="google-site-verification" content="YF0StaN8k3nLmmL5Bh48YgpXGNioIy3luUyOqYVJB-E" />
    <meta name="DC.title" content="%%title%%" />
    <meta name="DC.creator" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="DC.subject" content="Meta-data" />
    <meta name="DC.description" content="%%description%%" />
    <meta name="DC.publisher" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="DC.contributor" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="DC.date" content="%%datetime%%" scheme="DCTERMS.W3CDTF" />
    <meta name="DC.type" content="Text" scheme="DCTERMS.DCMIType" />
    <meta name="DC.format" content="text/html" scheme="DCTERMS.IMT" />
    <meta name="DC.identifier" content="%%uri%%" scheme="DCTERMS.URI" />
    <meta name="DC.source" content="http://www.w3.org/TR/html401/struct/global.html#h-7.4.4" scheme="DCTERMS.URI" />
    <meta name="DC.language" content="%%lang%%" scheme="DCTERMS.RFC3066" />
    <meta name="DC.relation" content="http://dublincore.org/" scheme="DCTERMS.URI" />
    <meta name="DC.coverage" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" scheme="DCTERMS.TGN" />
    <meta name="DC.rights" content="All rights reserved" />
    <meta name="author" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="keywords" content="%%keywords%%" />
    <meta name="description" content="%%description%%" />
    <?php include_once SITE_FS_PATH . "/common_css.php"; ?>
</head>
<body>
<div class="main-container">
    <?php include "header.php"; ?>


    <!--end of header-->

<section class="cart-sec">
<div class="container">
<div class="row">
<div class="col-md-12">
<h3><img src="images/cart.png" /> Your Shoping Cart</h3>
</div>
</div><!--end of first row-->

<div class="row">
<div class="col-md-12">
<div class="cart-box">
<div class="cart-box-inner">
<div class="col-md-2"><img src="images/cart/1.jpg" class="img-responsive" /></div>
<div class="col-md-4"><h4>1 <span>&times;</span> Clasic T-shirt</h4></div>
<div class="col-md-3"><p>XL, Black, Front</p></div>
<div class="col-md-3">
<div class="action-right">
<div class="action"><a href="#"><i class="fa fa-edit"></i></a> <a href="#"><i class="fa fa-times"></i></a></div><!--end of action-->
<div class="right"><p>Rs 24.34</p></div><!--end of right-->
</div><!--end of action right-->
</div>
</div><!--end of cart-box-inner-->
<div class="cart-box-inner">
<div class="col-md-2"><img src="images/cart/1.jpg" class="img-responsive" /></div>
<div class="col-md-4"><h4>1 <span>&times;</span> Clasic T-shirt</h4></div>
<div class="col-md-3"><p>XL, Black, Front</p></div>
<div class="col-md-3">
<div class="action-right">
<div class="action"><a href="#"><i class="fa fa-edit"></i></a> <a href="#"><i class="fa fa-times"></i></a></div><!--end of action-->
<div class="right"><p>Rs 24.80</p></div><!--end of right-->
</div><!--end of action right-->
</div>
</div><!--end of cart-box-inner-->

<div class="item-list totals">
  <div class="cart-line-item subtotal">
    <div class="right">
      <div class="total">
        <div class="heading">Subtotal</div>
        <div class="currency-display">Rs</div>
        <div class="amount">49.14</div>
      </div>
    </div>
  </div>

  <div class="cart-line-item shipping">
    <div class="right">
      <div class="total">
        <div class="heading">+ Estimated Shipping</div>

        <div class="currency-display">Rs</div>
        <div class="amount">11.43</div>
      </div>
    </div>
  </div>
</div><!--End item list  total-->

<div class="total-due">
  <span class="total-heading">
    Total
  </span>

  <span class="currency-display">Rs</span>
  <span class="total-price-calculated">60.57</span>
</div><!--end of total due-->

<div class="change-locale">
  <div class="disclaimer">Prices in USD and based on location: United States</div>
  <a href="#" class="text-button becomes-rb-button dialog-link" title="Change Currency">Change Currency &amp; Location</a>

</div><!--end of chage locale-->

<div class="cart-actions">

  <div class="checkout-or">OR</div>

<a href="#" class="rb-button rb-button_success" id="button-check-out">Pay by Credit Card</a>

<ul class="credit-card-list">
  <li class="credit-card-list_item credit-card-list_item__visa">Visa</li>
  <li class="credit-card-list_item credit-card-list_item__mastercard">Mastercard</li>
  <li class="credit-card-list_item credit-card-list_item__amex">American Express</li>
</ul>

  </div><!--end of cart action-->

</div>
</div><!--end of col 12-->

</div><!--end of row after container-->
</div><!--end of container-->
</section>
<!--end of cart-sec-->

<section class="after-cart-sec">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="after-cart-box">
<h4>Shipping</h4>
<p>Available as Standard or Express delivery. <a href="#">More Info</a></p>
</div><!--end of after cart box-->
</div><!--end of col 3-->

<div class="col-md-3">
<div class="after-cart-box" style="border-left:1px solid #ccc; padding-left:10px;">
<h4>Got Questions?</h4>
<p><a href="#">Drop us a line</a> and we'll get back to you as soon as possible.</p>
</div><!--end of after cart box-->
</div><!--end of col 3-->

<div class="col-md-3">
<div class="after-cart-box" style="border-left:1px solid #ccc; padding-left:10px;">
<h4>Shop With Confidence</h4>
<p>We're proud to offer a <a href="#">money back guarantee</a> on all purchases.</p>
</div><!--end of after cart box-->
</div><!--end of col 3-->

<div class="col-md-3">
<div class="after-cart-box" style="border-left:1px solid #ccc; padding-left:10px;">
<h4>Safe and Secure:</h4>
<p>Pay with your credit card or PayPal, secured with 256-bit SSL encryption.</p>
<div class="payment-options">
        <img alt="Cc_icon_paypal" src="images/cart/cc_icon_paypal.png">
        <img alt="Cc_icon_mastercard" src="images/cart/cc_icon_mastercard.png">
        <img alt="Cc_icon_visa" src="images/cart/cc_icon_visa.png">
        <img alt="Cc_icon_amex" src="images/cart/cc_icon_amex.png">
      </div>

</div><!--end of after cart box-->
</div><!--end of col 3-->
</div>
</div>
</section>

<!--start footer-->
    <?php include "footer.php"; ?>
</body>
<?php include SITE_FS_PATH."/common_js.php"; ?>
<script>
            var dm1Src = "images/brown-tshirt.jpg";
            var dm2Src = "images/brown-tshirt.jpg";
            var dm3Src = "images/brown-tshirt.jpg";
			var frontSrc ="images/description/1.jpg";
			var backSrc ="images/description/1-back.jpg";
           

            function changeImage(src){
                document.getElementById("myImage").src = src;
            }
			
			function outImage(src)
			{
				document.getElementById("myImage").src = "img/megamenu_default.png";
			}

        </script>
        
        <script>
		$('#btn').click(function() {
    	$("input[type='radio']:checked").each(function() {
        var idVal = $(this).attr("id");
        alert($("label[for='"+idVal+"']").text());
    });
});
</script>
        
</html>
