<?php
session_start();

  if(!isset($_SESSION['carrinho'])){
  	
	$_SESSION['carrinho'] = array();
  }
  
  
// ADICIONA PRODUTO

if(isset($_GET['acao'])){
	
	  //ADICIONAR CARRINHO
	
	  if($_GET['acao'] == 'add'){
		$id = intval($_GET['id']);
		if(!isset($_SESSION['carrinho']['id'])){
			$_SESSION['carrinho']['id'] = 1;
			
		}else{
		$_SESSION['carrinho']['id'] += 1;	
		}
			
			
	}	
		
		
}


print_r($_SESSION['carrinho']);








?>
<?php include('inc/head.php');?>
	
<? include('inc/mailmenu.php');?>
</head>
<body>

<?php include ('inc/statuscarrinho.php');?>		
	<div id="navigation">		
<?php include('inc/search.php');?>
		</div>
		<div class="navigation-inner">
			<div class="flare"></div>
			<div class="home-icon">
				<a href="index.php"><img src="images/home_icon.png" border="0"/></a>
			</div>
			<?php include('inc/menu.php');?>			
		</div>
	</div>

	<div id="content">
	
		<div class="content-top"></div>
		<div class="content-inner">
			
			<!-- List Begin -->
			
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Paginas</a></li>
					<li class="last">Carrinho de compras</li>
				</ul>
				<br class="clear"/>
			</div>
			
			<!-- Main Begin -->
			
			<div class="full-width-content">
				<h3>Shopping Cart</h3>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td class="remove"><span class="heading">Remove</span></td>
						<td class="thumbnail"></td>
						<td class="product-name"><span class="heading">Products</span></td>
						<td class="unit-price"><span class="heading">Unit Price</span></td>
						<td class="quantity"><span class="heading">Quantity</span></td>
						<td class="price"><span class="heading">Price</span></td>
					</tr>
					<tr>
						<td class="remove"><a href="#"><img src="images/delete_icon.png" border="0"/></a></td>
						<td class="thumbnail"><img src="images/product1_small1.jpg"/></td>
						<td class="product-name">Great new perfume for her</td>
						<td class="unit-price">&#36; 12.50</td>
						<td class="quantity"><input type="text" value="1" onfocus="if(this.value=='1'){this.value=''};" onblur="if(this.value==''){this.value='1'};" class="input-text cart-field"></td>
						<td class="price">&#36; 25</td>
					</tr>
					<tr class="last">
						<td class="remove"><a href="#"><img src="images/delete_icon.png" border="0"/></a></td>
						<td class="thumbnail"><img src="images/product1_small2.jpg"/></td>
						<td class="product-name">Passion in purple</td>
						<td class="unit-price">&#36; 35</td>
						<td class="quantity"><input type="text" value="1" onfocus="if(this.value=='1'){this.value=''};" onblur="if(this.value==''){this.value='1'};" class="input-text cart-field"></td>
						<td class="price">&#36; 35</td>
					</tr>
					<tr class="promo">
						<td colspan="4" class="unit-price"><span class="grey">Enter promo code</span></td>
						<td class="quantity"><input type="text" value="" class="input-text-grey cart-field"></td>
						<td class="price"><a href="#" class="general-button-big cart-button"><span class="button-big">Apply</span></a></td>
					</tr>
					<tr>
						<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Subtotal</span></td>
						<td class="price"><span class="summary">&#36; 60</span></td>
					</tr>
					<tr>
						<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Shipping</span></td>
						<td class="price"><span class="summary">&#36; 10</span></td>
					</tr>
					<tr>
						<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Total</span></td>
						<td class="price"><span class="summary">&#36; 70</span></td>
					</tr>
					<tr class="last submit">
						<td colspan="4" class="unit-price"></td>
						<td class="quantity">
							<a href="#" class="general-button-big-grey cart-button"><span class="button-big-grey">Update</span></a>
						</td>
						<td class="price">
							<a href="#" class="general-button-big cart-button"><span class="button-big">Proceed</span></a>
						</td>
					</tr>
				</table>
			</div>
			<!-- Main End -->
			
			<br class="clear"/>
			
			<!-- List End -->
			
		</div>
		<div class="shadow"></div>
		
		<br class="clear"/>
	</div>

	<?php include('inc/footer.php');?>
</body>
</html>