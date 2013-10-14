<div id="container">

	<div id="header-top">
		<p>
			<strong>FREE</strong> delivery on orders over $100. Add promo code <span class="promocode">FREEDEV</span> at checkout. Expires 12 March
		</p>
	</div>
	
	<div class="header-main">
		<div class="logo">
			<a href="index.html" name="top"><img src="images/logo.png" border="0"/></a>
		</div>
		
		<div class="login-block">
			<span class="account"><a href="#" class="account">Entrar</a></span> <span class="cart"><a href="carrinho.php" class="cart">Meu  Carrrinho 
<?php   $a = array($_SESSION['carrinho'][$id]); echo" (".array_sum($a).")"; ?></a></span>
		</div>
	</div>
	
