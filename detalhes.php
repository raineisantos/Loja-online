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

<!--[if IE 6]>
	<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen" />
<![endif]-->

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

<!-- JS for price range slider -->
<script type="text/javascript" src="jQueryUI/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="jQueryUI/js/selectToUISlider.jQuery.js"></script>

<!-- JS for Collapsible Menu -->
<script type="text/javascript" src="js/jquery.collapse.js"></script> 

<!-- Style for product gallery -->
<link href="exposure/exposure.css" type="text/css" rel="stylesheet" />
		
<!-- JS for product gallery -->
<script src="exposure/jquery.exposure.js" type="text/javascript"></script>

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
	
	// Tabs
	$(function() {
			$("ul.tabs").tabs("div.panes > .tab-content");
	});
	
	$(document).ready(function() {
		
		// Exposure product image gallery
		$(function(){
				var gallery = $('#images');
				gallery.exposure({controlsTarget : '#controls',
					imageControls : false,
					controls : { prevNext : false, pageNumbers : false, firstLast : false },
					pageSize : 5,
					enableSlideshow: false,
					showCaptions: false,
					slideshowControlsTarget : '#slideshow',
					onThumb : function(thumb) {
						var li = thumb.parents('li');				
						var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.7;
						
						thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);
						
						thumb.hover(function() { 
							thumb.fadeTo('fast',1); 
						}, function() { 
							li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.7); 
						});
					},
					onImageHoverOver : function() {
						if (gallery.imageHasData()) {						
							// Show image data as an overlay when image is hovered.
							gallery.dataElement.stop().show().animate({bottom:0+'px'},{queue:false,duration:160});
						}
					},
					onImageHoverOut : function() {
						// Slide down the image data.
						var imageDataBottom = -gallery.dataElement.outerHeight();
						gallery.dataElement.stop().show().animate({bottom:imageDataBottom+'px'},{queue:false,duration:160});
					},
					onImage : function(image, imageData, thumb) {
						var w = gallery.wrapper;
						
						// Fade out the previous image.
						image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function() {
							$(this).remove();
						});
						
						// Fade in the current image.
						image.hide().stop().fadeIn(500);
						
						// Setup hovering for the image data container.
						imageData.hover(function() {
							// Trigger mouse enter event for wrapper element.
							w.trigger('mouseenter');
						}, function() {
							// Trigger mouse leave event for wrapper element.
							w.trigger('mouseleave');
						});
						
						// Check if wrapper is hovered.
						var hovered = w.hasClass($.exposure.imageHoverClass);						
						if (hovered) {
							if (gallery.imageHasData()) {
								gallery.onImageHoverOver();
							} else {
								gallery.onImageHoverOut();
							}	
						}
		
						if (gallery.showThumbs && thumb && thumb.length) {
							thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.7, function() { $(this).removeClass($.exposure.selectedImageClass); });			
							thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
						}
					}
				});
			});
		// Exposure end
		
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

			// Hiding any open menus
			jQuery(".dropdown").not(this).each(function() {
				jQuery(this).find("ul").hide();
				jQuery(this).find("a.nav-link").removeClass('selected');
			})
		
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

<div id="container">

	<div id="header-top">
		<p>
			<strong>FREE</strong> delivery on orders over $100. Add promo code <span class="promocode">FREEDEV</span> at checkout. Expires 12 March
		</p>
	</div>
	
	<div class="header-main">
		<div class="logo">
			<a href="index.php" name="top"><img src="images/logo.png" alt="logo" border="0"/></a>
		</div>
		
		<div class="login-block">
			<span class="account"><a href="#" class="account">Sign In</a></span> <span class="cart"><a href="cart.html" class="cart">My Cart (0)</a></span>
		</div>
	</div>
	
	<div id="navigation">
		
		<div class="search-container">
			<div class="search-inner">	
				<input type="text" value="I am looking for..." onfocus="if(this.value=='I am looking for...'){this.value=''};" onblur="if(this.value==''){this.value='I am looking for...'};" class="search-field">
				<input type="submit" id="s_submit" value="" class="search-btn">
			</div>
		</div>
		<div class="navigation-inner">
			<div class="flare"></div>
			<div class="home-icon">
				<a href="index.php"><img src="images/home_icon.png" border="0"/></a>
			</div>
			<!-- Navigation start -->
			<ul class="sf-menu">
				<li class="nav-item"><a href="#">Pages</a>
					<ul>
						<li class="sfish-navgiation-item">
							<a href="price_compare.html">Price Compare Table</a>
						</li>
						<li class="sfish-navgiation-item">
							<a href="faq.html">FAQ</a>
						</li>
						<li class="sfish-navgiation-item">
							<a href="cart.html">Shopping Cart</a>
						</li>
						<li class="sfish-navgiation-item">
							<a href="right_sidebar.html">Right Sidebar</a>
						</li>
					</ul>
				</li>
				<li class="nav-item"><a href="grid.html">Online Store</a>
					<ul>
						<li class="sfish-navgiation-item">
							<a href="grid.html">Product Listing as Grid</a>
						</li>
						<li class="sfish-navgiation-item">
							<a href="list.html">Product Listing as List</a>
						</li>
						<li class="sfish-navgiation-item last">
							<a href="details.html">Product Details</a>
						</li>
					</ul>	
				</li>
				<li class="nav-item"><a href="blog.html">Blog</a></li>
				<li class="nav-item"><a href="#">Shortcodes</a>
					<ul>
						<li class="sfish-navgiation-item">
							<a href="shortcodes_buttons.html">Buttons and Links</a>
						</li>
						<li class="sfish-navgiation-item">
							<a href="shortcodes_columns.html">Columns</a>
						</li>
						<li class="sfish-navgiation-item last">
							<a href="shortcodes_tabs.html">Tabs and Accordions</a>
						</li>
					</ul>	
				</li>
				<li class="nav-item"><a href="#">Portfolio</a>
					<ul>
						<li class="sfish-navgiation-item">
							<a href="portfolio_2columns.html">Two Columns Layout</a>
						</li>
						<li class="sfish-navgiation-item">
							<a href="portfolio_3columns.html">Three Columns Layout</a>
						</li>
						<li class="sfish-navgiation-item last">
							<a href="portfolio_4columns.html">Four Columns Layout</a>
						</li>
					</ul>
				</li>
				<li class="nav-item"><a href="contacts.html">Contacts</a></li>
			</ul>
			<!-- Navigation end -->
			
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
					<li><a href="index.php">Home</a></li>
					<li><a href="#">E-Store</a></li>
					<li><a href="grid.html">Fragrance</a></li>
					<li class="last">Great New Perfume for Her</li>
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
				<!-- Produtos em destaque limite 3 esquerda -->
<h3 class="active">Produtos em destaque</h3>
<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');

$id=$_GET["id"];/* valor enviadoatraves do link*/

$sql = "select * from olfactive_produtos where id='$id'";
$rs = mysql_query($sql) or die ("erro na consulta");
$contador=0;
while ($linha=mysql_fetch_array($rs))
{
 $contador++;
$id=$linha["id"];
$anexo_ida=$linha["anexo_ida"];
$nome_arquivo=$linha["nome_arquivo"];
$nome=$linha["nome"];
$preco=$linha["preco"];
$descricao=$linha["descricao"];
   
 ?> 
  
				
				<!-- Featured Products Begin -->
				
				<div class="featured-product">
					<div class="featured-product-item">
<a href="#" class="float-left"><?php echo "<img src='thumbcar.php?img=$anexo_ida' title='Produtos'>"; ?></a>
						<span class="title"><a href="#">Great New Perfume</a></span>
						<span class="price">$29.90</span>
					</div>
					<br class="clear"/>
</div>

<? } ?>					

					
				
				<!-- Featured Products Begin -->
				
			</div>
			<!-- Left Column End -->
			
			<!-- Main Column Begin -->
			<div class="main-content">
			
				<div class="detail-item">
					
						<!-- Product Gallery Begin -->
						<div class="product-gallery float-left">
							<div id="exposure"></div>
							<div class="panel">	
								<div id="controls"></div>				
								<div id="slideshow"></div>

								<ul id="images">
<li><a href="<?=$anexo_ida;?>">  <?php echo "<img src='thumbdeta.php?img=$anexo_ida' title='Produtos'>"; ?></a></li>
<li><a href="<?=$anexo_ida;?>">  <?php echo "<img src='thumbdeta.php?img=$anexo_ida' title='Produtos'>"; ?></a></li>
<li><a href="<?=$anexo_ida;?>">  <?php echo "<img src='thumbdeta.php?img=$anexo_ida' title='Produtos'>"; ?></a></li>
<li><a href="<?=$anexo_ida;?>">  <?php echo "<img src='thumbdeta.php?img=$anexo_ida' title='Produtos'>"; ?></a></li>
								</ul>
							</div>	
						</div>
						<!-- Product Gallery End -->
					
			 		<div class="text-info">
			 			<span class="title"><?=$nome;?></span>
						<span class="price">R$ <?=$preco;?></span>
													
						<span class="description">
							<p><?=$descricao;?>. </p>
						</span>
						
						<div class="dropdown-container">
							<span class="size">Quantidade:</span>
							<input type="text" value="1" onfocus="if(this.value=='1'){this.value=''};" onblur="if(this.value==''){this.value='1'};" class="input-text quantity">
						</div>
				
						<div class="dropdown-container">
							<span class="size">Tamanho:</span>
							<!-- Dropdown Begin -->
							<div class="color">
								<div class="dropdown">
									<a href="javascript:void(0)" class="dropdown-link">Selecione o tamanho...</a>
				
									<ul class="search-menu" style="display: none; position: absolute;">
										<li>
											<span class="menu-link">S</span>
										</li>
										<li>
											<span class="menu-link">M</span>
										</li>
										<li class="last">
											<span class="menu-link">L</span>
										</li>
									</ul>
										
								</div>  
							</div>
							<!-- Dropdown End -->
						</div>
						
						<br class="clear"/>
				
						<div class="float-left dropdown-container">
							<?php echo "<a href='carrinho.php?acao=add&id=$id' class='general-button float-left'><span class='button'>Add ao carrinho</span></a> ";?>
						</div>
						
						<br class="clear"/>
						
						
							<!-- Google Begin -->
							<div class="social-container float-left">
								<g:plusone size="medium" width="120"></g:plusone>

								<script type="text/javascript">
								  (function() {
									var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
									po.src = '../../../apis.google.com/js/plusone.js';
									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
								  })();
								</script>
							</div>
							<!-- Google End -->
							
							<!-- Twitter Begin -->
							<div class="social-container float-left">
								<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="../../../platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div>
							<!-- Twitter End -->
							
							<!-- Facebook Begin -->
							<div class="social-container float-left">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-like" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div>
							</div>
							<!-- Facebook End -->

			 		</div>
					
					<!-- Tabs Begin -->
					<div id="tabbed-menu">
						<ul class="tabs">
							<li><a href="#">Descrição</a></li>
							<li><a href="#">Comentários</a></li>
						</ul>
						<br class="clear"/>
		
						<div class="panes">
							<div class="tab-content description">
								
								<!-- Tab 1 section -->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id rutrum orci. Donec vel turpis orci, id condimentum est. Nunc nec felis non est dictum ultrices. Nam semper gravida auctor. Aenean non dolor at lorem viverra fringilla varius vitae nisi. Ut ornare sollicitudin leo, et rhoncus turpis volutpat vel. Nullam ac nunc in ipsum pellentesque facilisis id at justo.</p>

								<p>Aliquam ac libero elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla metus libero, rhoncus nec mattis ac, ullamcorper interdum elit. Nullam id congue est. Nam diam dui, accumsan quis pretium et, facilisis ut leo. Sed orci diam, dictum ut aliquet eget, sodales in massa. </p>

								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam rhoncus, felis sed aliquam tempus, ipsum sem consequat ligula, vitae mollis nunc diam quis sem. Aliquam ac libero elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla metus libero, rhoncus nec mattis ac, ullamcorper interdum elit. </p>
								
								<p>Maecenas id rutrum orci. Donec vel turpis orci, id condimentum est. Nunc nec felis non est dictum ultrices. Nam semper gravida auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean non dolor at lorem viverra fringilla varius vitae nisi. Ut ornare sollicitudin leo, et rhoncus turpis volutpat vel. Nullam ac nunc in ipsum pellentesque facilisis id at justo.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus libero, rhoncus nec mattis ac, ullamcorper interdum elit. Nullam id congue est. Nam diam dui, accumsan quis pretium et, facilisis ut leo. Sed orci diam, dictum ut aliquet eget, sodales in massa. Ut ornare sollicitudin leo, et rhoncus turpis volutpat vel. Nullam ac nunc in ipsum pellentesque facilisis id at justo.</p>
								<!-- End -->
							  
							</div>
							<div class="tab-content">
								
								<!-- Tab 2 section -->
								<div class="single-comment blog-page">
									<div class="avatar float-left">
										<img src="images/avatar.png"/>
									</div>
									<div class="comment-text blog-single-entry">
										<span class="name">John Smith</span>
										<span class="date">January 12, 2012, Wednesday, at 10:23 a.m.</span>
										<p>Nunc porta turpis vitae tellus pulvinar dapibus. Morbi ut leo sapien, vel vulte orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Fusce sed nisi enim, et tincidunt nunc. </p>
									</div>
								</div>
								
								<div class="comment-form-container">
									<span class="new-comment-heading">Post Your Comment</span>
									<div class="form-name float-left">
										<span>Your Name</span>
										<input type="text" value="" class="form-name input-text">
									</div>
									<div class="form-name float-right">
										<span>Your E-mail</span>
										<input type="text" value="" class="form-name input-text">
									</div>
									<br class="clear"/>
									<div class="form-comment">
										<span>Comment</span>
										<textarea name="comments" rows="4" cols="20" class="txtarea-comment"></textarea> 
									</div>
									<a href="#" class="general-button-big add-comment"><span class="button-big">Submit your comment</span></a>
							</div>
								<!-- End -->
							  
							</div>
							
						</div>
						
					</div>
					<!-- Tabs End -->
					
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
