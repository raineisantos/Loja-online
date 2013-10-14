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
<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
//require_once('functions.php');
require_once('conf/settings.php');
include('conf/sec.php');
$nome=$_GET["nome"];/* valor enviadoatraves do link*/

$sql = "select * from olfactive_produtos";
$rs = mysql_query($sql) or die ("erro na consulta");
$contador=0;
while ($linha=mysql_fetch_array($rs))
{
 $contador++;

$anexo_ida=$linha["anexo_ida"];
$nome_arquivo=$linha["nome_arquivo"];
$nome=$linha["nome"];
$preco=$linha["preco"];
   
  
   }
      ?>


?>		
<!-- JS for product gallery -->
<script src="exposure/jquery.exposure.js" type="text/javascript"></script>

<!-- JS for Custom Forms -->
<script src="uniform/jquery.uniform.js" type="text/javascript"></script>



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
					<li><a href="grid.php">Fragrância</a></li>
					<li class="last">Excelente perfume masculino</li>
				</ul>
				<br class="clear"/>
			</div>
			
				<!-- Left Column Begin -->
			<div id="lhs" class="left-side float-left">
				<h3 class="active"><a href="<?=URL?>">Categorias</a></h3>
				<ul>
<?php
		$query = mysql_query("SELECT * FROM olfactive_categorias order by nome asc");
		$pos = 1;
      	while ($arr = mysql_fetch_array($query)) {

	$nome = $arr["nome"];
	$id = $arr["id"];

		?>
        <li><a href="<?=URL?>categoria.php?id=<?=urlencode("$nome")?>"> <span></span> <?=$nome?></a></li>
        <?
        $pos++;
}	?>
				</ul>
				
				<h3 class="active">Marcas</h3>
				<ul>
					
					<li><label><input type="checkbox" checked="yes" />Calvin Klein</label></li>
					<li><label><input type="checkbox" checked="yes" />Chloe</label></li>
					<li><label><input type="checkbox" />Jaguar</label></li>
					<li><label><input type="checkbox" />Nivea</label></li>
					<li><label><input type="checkbox" />Tommy Hilfiger</label></li>
				</ul>
				
				<h3 class="active">Faixa de preço</h3>
				
				<!-- Price Slider Begin -->
				<div class="price-range">
					<fieldset>
						<label for="valueA">A partir de:</label>
						<select name="valueA" id="valueA">
							<option value="$0">R$0</option>
							<option value="$10">R$10,00</option>
							<option value="$20">R$20,00</option>
							<option value="$30" selected="selected">$30,00</option>
							<option value="$40">R$40,00</option>
							<option value="$50">R$50,00</option>
							<option value="$100">R$100,00</option>
							<option value="$200">R$200,00</option>
							<option value="$400">R$400,00</option>
							<option value="$600">R$600,00</option>
						</select>
				
						<label for="valueB">To:</label>
						<select name="valueB" id="valueB">
							<option value="$0">R$0</option>
							<option value="$10">R$10,00</option>
							<option value="$20">R$20,00/option>
							<option value="$30">R$30,00</option>
							<option value="$40">R$40,00</option>
							<option value="$50">R$50,00</option>
							<option value="$100" selected="selected">R$100,00</option>
							<option value="$200">R$200,00</option>
							<option value="$400">R$400,00</option>
							<option value="$600">R$600,00</option>
						</select>
					</fieldset>
				</div>
				<!-- Price Slider End -->
				
				<!-- Featured Products Begin -->
				<h3 class="active">Produtos em destaque</h3>
				<div class="featured-product">
					<div class="featured-product-item">
						<a href="#" class="float-left"><img src="images/small01.jpg" border="0" /></a>
						<span class="title"><a href="#"><?php echo "$nome"; ?></a></span>
						<span class="price"><?php echo "$preco"; ?></span>
					</div>
					<br class="clear"/>
					<div class="featured-product-item">
						<a href="#" class="float-left"><img src="images/small02.jpg" border="0" align="left" /></a>
						<span class="title"><a href="#">Great New Perfume</a></span>
						<span class="price">R$ 29.90</span>
					</div>
					<br class="clear"/>
					<div class="featured-product-item">
						<a href="#" class="float-left"><img src="images/small03.jpg" border="0" align="left" /></a>
						<span class="title"><a href="#">Great New Perfume</a></span>
						<span class="price">R$ 29.90</span>
					</div>
				</div>
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
									<li><a href="images/product1.jpg"><img src="images/product1_small1.jpg" title="Home made" /></a></li>
									<li><a href="images/product1_2.jpg"><img src="images/product1_small2.jpg" title="Chocolate" /></a></li>
									<li><a href="images/product2.jpg"><img src="images/product1_small3.jpg" title="Love birds" /></a></li>
									<li><a href="images/product3.jpg"><img src="images/product1_small4.jpg" title="Blue" /></a></li>
								</ul>
							</div>	
						</div>
						<!-- Product Gallery End -->
					
			 		<div class="text-info">
			 			<span class="title">Excelente perfume masculino</span>
						<span class="price">R$ .90</span>
													
						<span class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id rutrum orci. Donec vel turpis orci, id conditum est. Nunc nec felis non est dictum ultrices. </p>
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
									<a href="javascript:void(0)" class="dropdown-link">Selecione tamanho...</a>
				
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
							<a href="#" class="general-button-big"><span class="button-big">Adicione ao carrinho</span></a>
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
									<span class="new-comment-heading">Post seu comentário</span>
									<div class="form-name float-left">
										<span>Seu Name</span>
										<input type="text" value="" class="form-name input-text">
									</div>
									<div class="form-name float-right">
										<span>Seu E-mail</span>
										<input type="text" value="" class="form-name input-text">
									</div>
									<br class="clear"/>
									<div class="form-comment">
										<span>Comentário</span>
										<textarea name="comments" rows="4" cols="20" class="txtarea-comment"></textarea> 
									</div>
									<a href="#" class="general-button-big add-comment"><span class="button-big">Enviar seu comentário</span></a>
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

	<? include('inc/footer.php');?>
		</div>
	</div>
</div>

</body>
</html>
