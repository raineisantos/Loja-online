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
<title>Web Shop</title>
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

<!-- Style for Custom Forms -->
<link rel="stylesheet" href="uniform/css/uniform.default.css" type="text/css" media="screen" charset="utf-8" />

<!-- Google font -->
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css' />

<!-- JS for jQuery -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<!-- JS for jQuery Product slider -->
<script type="text/javascript" src="js/jquery.tools.min.js"></script>

<!-- JS for jQuery Border effect -->
<script type="text/javascript" src="js/jquery.insetBorderEffect.js"></script>

<!-- JS for jQuery Fancy Box -->
<script type="text/javascript" src="fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<!-- JS for superfish navigation menu -->
<script type="text/javascript" src="superfish/hoverIntent.js"></script> 
<script type="text/javascript" src="superfish/superfish.js"></script> 

<!-- JS for Collapsible Menu -->
<script type="text/javascript" src="js/jquery.collapse.js"></script> 

<!-- JS for price range slider -->
<script type="text/javascript" src="jQueryUI/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="jQueryUI/js/selectToUISlider.jQuery.js"></script>

<!-- JS for Custom Forms -->
<script src="uniform/jquery.uniform.js" type="text/javascript"></script>

<script type="text/javascript">
	
	// Megamenu
	$(function() {
						
		var $menu = $('#ldd_menu');
		
		$menu.children('li').each(function(){
			var $this = $(this);
			var $span = $this.children('span');
			$span.data('width',$span.width());
			
			$this.bind('mouseenter',function(){
				$menu.find('.ldd_submenu').stop(true,true).hide();
				$span.stop().animate({'width':'auto'},150,function(){
					$this.find('.ldd_submenu').slideDown(300);
				});
			}).bind('mouseleave',function(){
				$this.find('.ldd_submenu').stop(true,true).hide();
				$span.stop().animate({'width':$span.data('width')+'px'},300);
			});
		});
	});
	
	$(document).ready(function() {
		
		// Custom forms
		$(function(){ 
			$("input:checkbox, input:radio").uniform();
		});
		
		// Border effects
		$(".featured-product-item img").insetBorder({
			borderColor : '#EDE6E9',
			inset: 5
		});
		
		// Navigation menu
		$("ul.sf-menu").superfish(); 
		
		// Collapsible menu
		$("#lhs, #features .box").collapse({
        show: function() {
            this.animate({opacity: 'toggle', height: 'toggle'}, 300);
        },
        hide : function() {
            this.animate({opacity: 'toggle', height: 'toggle'}, 300);
        }
    });
		
		// Slider
		$(".slider").scrollable();
	
		// Fancybox
		$("a.grouped-elements").fancybox({
			'titlePosition'	: 'inside'
		});

		$("a[rel=group4]").fancybox({
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
			}
		});
		
		// Mouseover effect for thumbnails
		$("a.grouped-elements").hover(function() {
			  $(this).find(".imagehover").toggleClass("mouseon");
		});
		
		// Price range
		$('select#valueA, select#valueB').selectToUISlider();

		// Dropdown show/hide
		jQuery(".dropdown").click(function() {

      	jQuery(this).find("ul").toggle();
			jQuery(this).find("a.nav-link").toggleClass('selected');
		});
      
		// Closing the menu if click outside
		jQuery(document).bind('click', function(e) {
			var $clicked = jQuery(e.target);
          
			if (! $clicked.parents().hasClass("dropdown")) {
				jQuery(this).find('.dropdown a.nav-link').removeClass("selected");
				jQuery(".dropdown ul").hide();
			}
          
		});
      
	});

	$(window).load(function() {
		
	});
		
</script>

</head>
<body>


<? include('inc/header.php');?>
<? include('inc/menu.php');?>
			
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
					<li><a href="#">E-Store</a></li>
					<li class="last">Fragrance</li>
				</ul>
				<br class="clear"/>
			</div>
			
			<!-- Left Column Begin -->
			<div id="lhs" class="left-side float-left">
				<h3 class="active">Categories</h3>
				<ul>
					<li><a href="#">Make Up</a></li>
					<li>Fragrance</li>
					<li><a href="#">Skincare</a></li>
					<li><a href="#">Bodycare</a></li>
					<li><a href="#">Hand Wash & Soaps</a></li>
				</ul>
				
				<h3 class="active">Brands</h3>
				<ul>
					
					<li><label><input type="checkbox" checked="yes" />Calvin Klein</label></li>
					<li><label><input type="checkbox" checked="yes" />Chloe</label></li>
					<li><label><input type="checkbox" />Jaguar</label></li>
					<li><label><input type="checkbox" />Nivea</label></li>
					<li><label><input type="checkbox" />Tommy Hilfiger</label></li>
				</ul>
				
				<h3 class="active">Price Range</h3>
				
				<!-- Price Slider Begin -->
				<div class="price-range">
					<fieldset>
						<label for="valueA">From:</label>
						<select name="valueA" id="valueA">
							<option value="$0">$0</option>
							<option value="$10">$10</option>
							<option value="$20">$20</option>
							<option value="$30" selected="selected">$30</option>
							<option value="$40">$40</option>
							<option value="$50">$50</option>
							<option value="$100">$100</option>
							<option value="$200">$200</option>
							<option value="$400">$400</option>
							<option value="$600">$600</option>
						</select>
				
						<label for="valueB">To:</label>
						<select name="valueB" id="valueB">
							<option value="$0">$0</option>
							<option value="$10">$10</option>
							<option value="$20">$20</option>
							<option value="$30">$30</option>
							<option value="$40">$40</option>
							<option value="$50">$50</option>
							<option value="$100" selected="selected">$100</option>
							<option value="$200">$200</option>
							<option value="$400">$400</option>
							<option value="$600">$600</option>
						</select>
					</fieldset>
				</div>
				<!-- Price Slider End -->
				
				<!-- Featured Products Begin -->
				<h3 class="active">Featured Products</h3>
				<div class="featured-product">
					<div class="featured-product-item">
						<a href="#" class="float-left"><img src="images/small01.jpg" border="0" /></a>
						<span class="title"><a href="#">Great New Perfume</a></span>
						<span class="price">$29.90</span>
					</div>
					<br class="clear"/>
					<div class="featured-product-item">
						<a href="#" class="float-left"><img src="images/small02.jpg" border="0" align="left" /></a>
						<span class="title"><a href="#">Great New Perfume</a></span>
						<span class="price">$29.90</span>
					</div>
					<br class="clear"/>
					<div class="featured-product-item">
						<a href="#" class="float-left"><img src="images/small03.jpg" border="0" align="left" /></a>
						<span class="title"><a href="#">Great New Perfume</a></span>
						<span class="price">$29.90</span>
					</div>
				</div>
				<!-- Featured Products Begin -->
				
			</div>
			<!-- Left Column End -->
			
			<!-- Main Column Begin -->
			<div class="main-content">
				<h3>Fragrance Category - Display as Grid</h3>
				
				<div class="list-options">
					<div class="float-left">
						<img src="images/icon_grid.png"/><span>View as grid</span>
						<img src="images/icon_list.png"/><a href="list.html" class="regular">View as list</a>
					</div>
					
					<!-- Sort By Begin -->
					<div class="float-right sortby">
						<div class="dropdown">
							<a href="javascript:void(0)" class="dropdown-link">Sort By...</a>
		
							<ul class="search-menu" style="display: none; position: absolute;">
								<li>
									<span class="menu-link">Price Low to High</span>
								</li>
								<li>
									<span class="menu-link">Price High to Low</span>
								</li>
								<li>
									<span class="menu-link">Rating</span>
								</li>
							</ul>
								
						</div>  
					</div>
					<br class="clear"/>
					<!-- Sort By End -->
				</div>
					
				
				 <!-- 1-3 -->
					<div class="list-items">
						<div class="single-item">
							<div class="sale-badge-grid"></div>
							<span class="title"><a href="details.html">Great New Perfume for Her</a></span>
							<span class="price"><span class="stricken">$89.90</span>$49.90</span>
							<img src="images/product1.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<div class="sale-badge-grid"></div>
							<span class="title"><a href="details.html">Aroma Accattivante</a></span>
							<span class="price"><span class="stricken">$39.90</span>$29.90</span>
							<img src="images/product2.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item last">
							<span class="title"><a href="details.html">Delight in Orange</a></span>
							<span class="price">$23</span>
							<img src="images/product3.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div><br class="clear"/>
					</div>
					
					<!-- 4-6 -->
					<div class="list-items">
						<div class="single-item">
							<span class="title"><a href="details.html">Kiss in the Rain</a></span>
							<span class="price">$149.90</span>
							<img src="images/product5.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Aroma Dolce</a></span>
							<span class="price">$29</span>
							<img src="images/product6.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item last">
							<span class="title"><a href="details.html">Wind of Spring</a></span>
							<span class="price">$23</span>
							<img src="images/product2.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div><br class="clear"/>
					</div>
					
					 <!-- 7-9 -->
					<div class="list-items">
						<div class="single-item">
							<span class="title"><a href="details.html">Great New Perfume for Her</a></span>
							<span class="price">$149.90</span>
							<img src="images/product4.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Delight in Yellow</a></span>
							<span class="price">$29</span>
							<img src="images/product3.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item last">
							<span class="title"><a href="details.html">Seduction in Purple</a></span>
							<span class="price">$23</span>
							<img src="images/product1.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">View more...</a>
							</span>
							<br class="clear"/>
						</div><br class="clear"/>
					</div>
				
			</div>
			<!-- Main Column End -->
			
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
