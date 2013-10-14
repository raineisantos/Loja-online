<?php include('inc/head.php');?>

<form action="?acao=up" method="post">

<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

require_once('conexao.php');
require_once('conf/settings.php');


session_start();

  if(!isset($_SESSION['carrinho'])){
  	
	$_SESSION['carrinho'] = array();
  }
  
  
// ADICIONA PRODUTO

if(isset($_GET['acao'])){
	
	  //ADICIONAR CARRINHO
	
	  if($_GET['acao'] == 'add'){
		$id = intval($_GET['id']);
		  
		if(!isset($_SESSION['carrinho']['$id'])){
			$_SESSION['carrinho'][$id] = 1;
			
		}else{
		$_SESSION['carrinho'][$id] += 1;	
		}
			
			
	}
	  //REMOVER CARRINHO
	  
	  if($_GET['acao'] == 'del'){
	  	$id = intval($_GET['id']);
	  	if(isset($_SESSION['carrinho'][$id])){
	  		
			unset($_SESSION['carrinho'][$id]);
			
	  	}
		
	  }
	  
	  //ALTERAR QUANTIDADE
	  if($_GET['acao'] == 'up'){	  	
		     if(is_array($_POST['prod'])){			
			        foreach($_POST['prod'] as $id => $qtd){
			           $id = intval($id);
					   $qtd = intval($qtd);
				       if(!empty($qtd) || $qtd <> 0){
				       	$_SESSION['carrinho'][$id] = $qtd;
				       	
					   }else{
					   						
					   	  unset($_SESSION['carrinho'][$id]);
					
					
				}
			}
		}
	  }
		
}
?>

	
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
				<h3>Carrinho de compras</h3>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td class="remove"><span class="heading">Remove</span></td>
						<td class="thumbnail"></td>
						<td class="product-name"><span class="heading">Produtos</span></td>
						<td class="unit-price"><span class="heading">Preco unitario</span></td>
						<td class="quantity"><span class="heading">Quantidade</span></td>
						<td class="price"><span class="heading">Preco</span></td>
					</tr>
					
<?php					
					
	if(count($_SESSION['carrinho']) ==	0){
				
				echo'<tr><td><colspan="5">Nenhum produto</td></tr>';	
				}
				
				else{
					
					foreach($_SESSION['carrinho'] as $id => $qtd){
					$sql = "SELECT * FROM olfactive_produtos WHERE  id= '$id'";
					$qr = mysql_query($sql) or die (mysql_error());
					$ln = mysql_fetch_assoc($qr);
					
					$nome = $ln['nome'];
					$preco = number_format($ln['preco'], 2, ',','.');
					$sub = 	 number_format($ln['preco']* $qtd, 2, ',','.');
					$total += $sub;	
					
          echo '<tr>
						<td class="remove"><a href="?acao=del&id='.$id.'"><img src="images/delete_icon.png" border="0"/></a></td>
						<td class="thumbnail"><img src="thumbcar.php?img=' .$ln['anexo_ida'].'"></td>
                                               	<td class="product-name">'.$nome.'</td>
						<td class="unit-price">'.$preco.'</td>
						<td class="quantity"><input type="text" size ="3" name="prod['.$id.']" value="'.$qtd.'""  class="input-text cart-field"></td>
						<td class="price">'.$sub.'</td>
					</tr>';
                        }

					
				}			
					
					
					 ?>					 
					

		<input type="image" value="  enviar  " src="images/atualizar_carrinho.jpg">
				
</form>	
					<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Total</span></td>
						<td class="price"><span class="summary">R$ <?php echo "$total"; ?>,00</span></td>
					</tr>

					
					<tr class="last submit">
						<td colspan="4" class="unit-price"></td>
						<td class="quantity">
							<a href="#" class="general-button-big-grey cart-button"><span class="button-big-grey">Atualizar</span></a>
						</td>
											
						<td class="price">
<a href="cadastraPedido.php?acao=finaliza" class="general-button-big cart-button"><span class="button-big">Pagar</span></a>
						</td>
					</tr>
				</table>
				 <tr>
					 
					 <td ></td><a href="index.php"><img src="images/continuar.jpg"></a></td>						
						
					</tr>
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
