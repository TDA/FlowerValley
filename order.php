<!doctype html>
<html lang="en">
<head>
	<title></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="Flower Valley A Flower Shop that works 24/7.">
<meta name="keywords" content="Flower Valley,Flowers in chennai,Bouquets,Florists,Gifts,Flowers Home Delivery">
<meta name="author" content="Sai Pc">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<link rel="icon" type="image/png" href="favicon.png">

<!--[if lt IE 9]>  
<script src="html5shiv.js"></script> 
<script src="respond.min.js" type="text/javascript"></script>
<script src="selectivizr-min.js" type="text/javascript"></script>
 
<![endif]--> 

<link href="sitewide.css" rel="stylesheet">
</head>

<body>
<section id="container" class="inner"> 
<div class="banner">
<div class="column col_3 logo">
<img src="img/edi_logo.jpg">
</div>
<div class="column col_6">
<h1><span class="pink">Flower</span> <span class="green">Valley</span></h1>
<span class="blink">24/7 service</span>
</div>
<div class="column col_3 contacts">
<p>
For home delivery , Call us at:<span><img src="img/call_img.jpg" width="32px" height="32px">+91-8144630730.</span>
Address:5/277, Santhan Avenue, Okkiyam Thoraipakkam(opp. to CTS), Chennai - 600097.
</p>
</div>
</div>

	<header>
	<nav>
	<ul>
	<li><a href="index.htm">Home</a></li>
	<li><a href="order.htm"  class="active">Place an Order</a></li>
	<li><a href="products.htm">Products</a></li>
	<li><a href="occasions.htm">Occasions</a></li>
    <li><a href="deco.htm">Decorations</a></li>
    </ul>
	</nav>
</header>
<div class="col_12">

<div class="col_6 form">
<h2>Order Placed</h2>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$prod=$_POST['product'];
$extra=$_POST['desc'];
$to='dmadhan23@gmail.com';
$subject='Flowershop order';

echo '<p>Your Order has been placed,<br>with the following details:<br>';
echo 'Name :'.$name.'<br>';
echo 'E-Mail :'.$email.'<br>';
echo 'Product Category:'.$prod.'<br>';
echo 'Phone no :'.$phone.'</p>';
echo 'Our Customer Support executive will contact you shortly (usually 10-15 min)';
echo 'Return to page <a href="index.htm">Click here</a>';

$msg="Name :$name\nProduct: $prod\n Phone no: $phone\n Addl Reqmts: $extra";
mail($to, $subject, $msg, 'From:' . $email);
?>

</div>
</div>

<footer>
<ul><li>Quick Links:</li>
	<li><a href="index.htm">Home</a></li>
	<li><a href="order.htm">Place an Order</a></li>
	<li><a href="products.htm">Products</a></li>
	<li><a href="occasions.htm">Occasions</a></li>
    <li><a href="deco.htm">Decorations</a></li>
    </ul>
    <br>
&copy;2012-2013 Flower Valley.All rights Reserved. Orders taken/rejected are subject to our terms and conditions.
	
</footer>
</section> 


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="Scripts\/jquery-1.7.2.min.js"><\/script>')</script>
<script src="Scripts/waypoints.min.js"></script>
<script src="Scripts/waypoints-sticky.min.js"></script>
<script src="Scripts/scripts.js"></script>
	<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>

