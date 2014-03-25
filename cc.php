

<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payments</title>

    
    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more." />
    
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2013" />

    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <script src="/assets/js/vendor/modernizr.js"></script>
  </head>
  <body>
  <input class="first_name" placeholder="First Name" name="first_name" type="text" value="">
  <input class="last_name" placeholder="Last Name" name="last_name" type="text" value="">
	<div class="card">
		<div class="front">
			<a class="action"><span>Click Here<br>to Flip</span><i class="fa fa-share"></i></a>
			<div class="form">
			<label>Card Number</label><input class="cardNum amex identified" placeholder="0000 0000 0000 0000" required="required" name="card_number" type="text" value=""><label class="expire">Month/Year<input placeholder="MM/YY" name="exp_date" type="text" value=""></label>
				<div class="cardName"><span class="first"></span><span class="last"></span></div>
			</div>
		</div>
		<div class="back">
			<a class="action"><i class="fa fa-share fa-flip-horizontal"></i><span>Click Here<br>to Flip</span></a>
			<div class="form">
				<span class="cardStrip"></span>
				<div class="cardName cursive"><span class="first"></span><span class="last"></span></div>
				<div class="showcardNum">0000 0000 0000 0000</div>
				<label>CVV2</label><input class="cvv2" placeholder="CVV" required="required" name="cvv2" type="text" value="">
				<span class="expireback">MM/YY</span>
				<div class="cardName"><span class="first"></span><span class="last"></span></div>
			</div>
		</div>
	</div>
    <script src="/assets/js/vendor/jquery.js"></script>
    <script src="/assets/js/foundation.js"></script>
    <script src="/assets/js/foundation/foundation.abide.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/jquery.payment.js" type="text/javascript"></script>
    <script src="/assets/js/creditcard.js"></script>
  </body>
</html>