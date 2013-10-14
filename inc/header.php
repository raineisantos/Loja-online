<div id="container">

	<div id="header-top">
		<p>
			Entrega<strong>FREE</strong>  para encomendas superiores a R$ 100,00. Adicionar código promocional <span class="promocode">FREEDEV</span> no check-out. Expira em 12 mar
		</p>
	</div>
	
	<div class="header-main">
		<div class="logo">
			<a href="index.php" name="top"><img src="images/logo.png" alt="logo" border="0"/></a>
		</div>
		
		<div class="login-block">
			<span class="account"><a href="#" class="account">Entrar</a></span> <span class="cart"><a href="carrinho.php" class="cart">Meu  Carrrinho 
<?php   $a = array($_SESSION['carrinho'][$id]); echo" (".array_sum($a).")"; ?></a></span>
		</div>
	</div>
	
	<div id="navigation">
		
		<div class="search-container">
			<div class="search-inner">	
				<input type="text" value="Pesquisar..." onfocus="if(this.value=='I am looking for...'){this.value=''};" onblur="if(this.value==''){this.value='I am looking for...'};" class="search-field"/>
				<input type="submit" id="s_submit" value="" class="search-btn"/>
			</div>
		</div>
		<div class="navigation-inner">
			<div class="flare"></div>
			<div class="home-icon">
				<a href="index.php"><img src="images/home_icon.png" border="0"/></a>
			</div>
