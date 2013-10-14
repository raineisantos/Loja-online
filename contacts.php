<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="pt_br">
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

<!-- Style for product gallery -->
<link href="exposure/exposure.css" type="text/css" rel="stylesheet" />
		
<!-- JS for product gallery -->
<script src="exposure/jquery.exposure.js" type="text/javascript"></script>

<!-- JS for contact form -->
<script src="js/jquery.validate.pack.js" type="text/javascript"></script>

<? include('inc/mailmenu.php');?>
  
</head>
<body>

<? include('inc/header.php');?>
<? include('inc/menu.php');?>
<? include('inc/megamenu.php');?>
			
			
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
					<li class="last">Contato</li>
				</ul>
				<br class="clear"/>
			</div>
			
			<!-- Main Begin -->
			
			<div class="full-width-content">
				<h3>Entre em contato conosco</h3>
				
				<div class="one-half float-left">
				
					<!-- Form Begin -->
					<div class="comment-form-container" id="contact-wrapper">

					
					
					<form method="post" action="envio_contato.php" id="contactform">
					
						<span class="new-comment-heading">Envie-nos uma mensagem</span>
						
						<div class="form-name float-left">
							<label for="name">Seu Nome</label>
							<input type="text" size="50" name="nome" id="contactname" value="" class="required form-name input-text" />
						</div>
						
						<div class="form-name float-right">
							<label for="email">Seu E-mail</label>
							<input type="text" size="50" name="email" id="email" value="" class="required email form-name input-text" />
						</div>
						<br class="clear"/>
						
						<div class="form-comment">
							<label for="message">Mensagem</label>
							<textarea rows="4" cols="20" name="mensagem" id="message" class="required txtarea-comment"></textarea>
						</div>

						<input type="submit" class="contact-form-button" value="Send Message" name="submit" />
					</form>
					</div>
					<!-- Form End -->

				</div>

				<div class="one-half float-right address">
					<span class="new-comment-heading">Detalhes do contato</span>
					<div class="street">
						<p>Aracaju, Brasil</p>
						<p>Boulevard de Sevastopol 377, Building A, Office 177</p>
					</div>
						
					<div class="phone">
						<p>+55 (79) 1235 4567</p>
						<p>+55 (79) 4567 7891</p>
					</div>
						
					<div class="office-email">
						<p><a href="#" class="regular">contato@olfactive.com.br</a></p>
						<p><a href="#" class="regular">vendas@olfactive.com.br</a></p>
					</div>

				</div>

				<br class="clear"/>
				
				<!-- Map Begin --><br/>
				<h3>O nosso escritório local no mapa</h3>
				<div class="google-map">
					<iframe width="970" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=paris,+france&amp;aq=&amp;sll=52.370216,4.895168&amp;sspn=0.156795,0.308647&amp;g=Amsterdam,+The+Netherlands&amp;ie=UTF8&amp;hq=&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;t=m&amp;ll=48.858052,2.353477&amp;spn=0.019765,0.083256&amp;z=14&amp;output=embed"></iframe>
				</div>
				<!-- Map End -->

			</div>
			<!-- Main End -->
			
			<br class="clear"/>
			
			<!-- List End -->
			
		</div>
		<div class="shadow"></div>
		
		<br class="clear"/>
	</div>

<? include('inc/footer.php');?>
	

</body>
</html>
