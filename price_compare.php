<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
//require_once('functions.php');
require_once('conf/settings.php');
include('conf/sec.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Olfactive</title>
<!-- Main style -->
<link rel="stylesheet" href="css/main.css" type="text/css" />

<!-- Fancybox style -->
<link rel="stylesheet" href="fancybox/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<!-- Product slider style -->
<link rel="stylesheet" href="css/product-slider.css" type="text/css" />

<!-- Style for the superfish navigation menu -->
<link rel="stylesheet" href="superfish/superfish.css" type="text/css" media="screen" />

<!-- Style for Megamenu -->
<link rel="stylesheet" href="css/megamenu.css" type="text/css" /> 

<!-- Style for price range slider -->
<link rel="stylesheet" href="jQueryUI/css/redmond/jquery-ui-1.7.1.custom.css" type="text/css" />
<link rel="Stylesheet" href="jQueryUI/css/ui.slider.extras.css" type="text/css" />

<!-- Google font -->
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css' />

<!-- JS for jQuery -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<!-- JS for jQuery Product slider -->
<script type="text/javascript" src="js/jquery.tools.min.js"></script>

<!-- JS for jQuery Fancy Box -->
<script type="text/javascript" src="fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<!-- JS for superfish navigation menu -->
<script type="text/javascript" src="superfish/hoverIntent.js"></script> 
<script type="text/javascript" src="superfish/superfish.js"></script> 

<!-- JS for price range slider -->
<script type="text/javascript" src="jQueryUI/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="jQueryUI/js/selectToUISlider.jQuery.js"></script>

<? include('inc/mailmenu.php'); ?>
</head>
<body>
<? include('inc/header.php'); ?>

<? include('inc/menu.php'); ?>
			
			<!-- Megamenu Begin -->
			<ul id="ldd_menu" class="ldd_menu">
				<li>
					<span>Mega Menu</span><!-- Increases to 510px in width-->
					<div class="ldd_submenu">
						<div class="mega-menu-text float-left">
							<h4>What is Mega Menu?</h4>
							Mega menu is a next step of the js based dropdown. It's similar to a normal menu in terms of general behaviour, but enriched with more options, multiple links, complex navigation, form elements like login, search and much more.
						</div>
						<div class="mega-menu-text float-right">
							<h4>Example</h4>
							<p class="newsletter">
								<input type="text" class="megamenu-field" onblur="if(this.value==''){this.value='Enter your e-mail...'};" onfocus="if(this.value=='Enter your e-mail...'){this.value=''};" value="Enter your e-mail...">
							</p>
							<p class="newsletter">
								<input type="text" class="megamenu-field" onblur="if(this.value==''){this.value='Enter your name...'};" onfocus="if(this.value=='Enter your name...'){this.value=''};" value="Enter your name...">
							</p>
						</div><br class="clear"/>
						<div class="mega-menu-text float-left">
							<h4>Why do I need it?</h4>
							Because you can create much more interesting and complex navigation systems, grouping links, improve the UI, improve the user's workflow while filling forms, signing in etc.
						</div>
						<div class="mega-menu-text float-right">
							<h4>Another example</h4>
							<img src="images/slide_small1.jpg">
							<img src="images/slide_small3.jpg">
							<img src="images/slide_small2.jpg">
						</div>
					</div>
				</li>
			</ul>
			<!-- Megamenu End -->
			
		</div>
	</div>

	<div id="content">
	
		<div class="content-top"></div>
		<div class="content-inner">
			
			<!-- List Begin -->
			
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="last">Price Compare Table</li>
				</ul>
				<br class="clear"/>
			</div>
			
			<!-- Main Begin -->
			<div class="full-width-content">
				<h3>Product compare table</h3>
				<table cellpadding="0" cellspacing="0" class="compare">
					<tr class="table-head">
						<td class="first"></td>
						<td><img src="images/basic2.png"/></td>
						<td><img src="images/advanced2.png"/></td>
						<td><img src="images/premium2.png"/></td>
						<td><img src="images/ultimate2.png"/></td>
					</tr>
					<tr class="even">
						<td class="first">Lorem ipsum dolor sit amet</td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
					</tr>
					<tr>
						<td class="first">Nam mattis interdum</td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
					</tr>
					<tr class="even">
						<td class="first">Curabitur eleifend velit eu enim</td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
					</tr>
					<tr>
						<td class="first">Nullam pretium arcu eget leo laoreet</td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
					</tr>
					<tr class="even">
						<td class="first">Aenean pulvinar pulvinar dolor</td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
					</tr>
					<tr>
						<td class="first">Quisque in ultrices leo</td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/yes_icon.png"/></td>
					</tr>
					<tr class="even">
						<td class="first">Nunc porta turpis vitae tellus</td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/no_icon.png"/></td>
						<td>20</td>
						<td>40</td>
					</tr>
					<tr>
						<td class="first">Vestibulum ante ipsum in faucibus</td>
						<td><img src="images/no_icon.png"/></td>
						<td>1</td>
						<td>3</td>
						<td>5</td>
					</tr>
					<tr class="even">
						<td class="first">Morbi ut leo sapien, vel vulte orci</td>
						<td><img src="images/no_icon.png"/></td>
						<td>unlimited</td>
						<td>unlimited</td>
						<td>unlimited</td>
					</tr>
					<tr>
						<td class="first">Fusce sed nisi enim, et tincidunt nunc</td>
						<td><img src="images/no_icon.png"/></td>
						<td><img src="images/no_icon.png"/></td>
						<td>10</td>
						<td>unlimited</td>
					</tr>
					<tr class="last">
						<td class="first"></td>
						<td><a href="#" class="general-button-big cart-button"><span class="button-big">Select</span></a></td>
						<td><a href="#" class="general-button-big cart-button"><span class="button-big">Select</span></a></td>
						<td><a href="#" class="general-button-big cart-button"><span class="button-big">Select</span></a></td>
						<td><a href="#" class="general-button-big cart-button"><span class="button-big">Select</span></a></td>
					<tr>
				</table>
			</div>
			<!-- Main End -->
			
			<br class="clear"/>
			
			<!-- List End -->
			
		</div>
		<div class="shadow"></div>
		
		<br class="clear"/>
	</div>

		<div id="footer">
		<div class="footer-main">
			
			<div class="back-to-top"><a href="#top"><img src="images/top.png" alt="Back to top" border="0"/></a></div>
			
			<!-- Footer Column 1 Begin -->
			<div class="left-column float-left">
				<h5>Quick navigation</h5>
				<ul class="footer-nav">
					<li class="first"><a href="#">Customer support 24/7</a></li>
					<li><a href="#">Shipping information</a></li>
					<li><a href="#">Terms and conditions</a></li>
					<li><a href="#">Legal notice</a></li>
					<li><a href="#">Return policy</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</div>
			<!-- Footer Column 1 End -->
			
			<!-- Footer Column 2 Begin -->
			<div class="middle-column float-left">
				<h5>Newsletter</h5>
				<p>Sign up for our newsletter to receive on a regular basis updates, hot offers, site news etc.</p>
				<p class="newsletter">
					<input type="text" value="Enter your e-mail..." onfocus="if(this.value=='Enter your e-mail...'){this.value=''};" onblur="if(this.value==''){this.value='Enter your e-mail...'};" class="newsletter-field"/>
					<input type="submit" id="go" value="GO" class="go-btn"/>
				</p>
			</div>
			<!-- Footer Column 2 End -->
			
			<!-- Footer Column 3 Begin -->
			<div class="left-column float-right">
				<h5>Contact us</h5>
				<p>Paris, France 12009<br/>
					Boulevard de Sevastopol 377, Building A, Office 177
				</p>
				<p>
					Phone: +33 123 456 and +33 456 789<br/>
					Fax: +33 123 456<br/>
					Email: <a href="#" class="footerlink">info@yoursite.com</a><br/>
				</p>
				<p>
					<a href="#" class="social"><img src="images/facebook.png" alt="facebook" border="0"/></a>
					<a href="#" class="social"><img src="images/vimeo.png" alt="vimeo" border="0"/></a>
					<a href="#" class="social"><img src="images/youtube.png" alt="youtube" border="0"/></a>
					<a href="#" class="social"><img src="images/twitter.png" alt="twitter" border="0"/></a>
					<a href="#" class="social"><img src="images/google.png" alt="google" border="0"/></a>
				</p>
			</div>
			<!-- Footer Column 3 End -->
		</div>
	</div>
</div>

</body>
</html>
