<?php

 include("conexao.php");
 $codcli=$_COOKIE["codcli"];
 $codped=$_COOKIE["codped"];
 $codprod=$_POST["codprod"];
 $qtditem=$_POST["qtditem"];
 
 $inserir_carrinho="insert into item (codpeditem, codproditem, qtditem)
 values('$codped','$codprod','$qtditem')";//a tabela item é o carrinho de compras
 mysql_query($inserir_carrinho) or die ("problema no cadastro do item".$inserir_carrinho);
 $sql="select * from pedido, item, produto p, cliente where  codcli=codcliped and  p.codprod=codproditem and  codped=codpeditem and pedido_fechado=0 and  codcli='$codcli'";
 $resultado = mysql_query($sql) or die ("Problema no carrinho".$sql);
 $valortotal=0.00; //join sql
 $contador=0;
 while($linha=mysql_fetch_array($resultado))
             {
 $contador++;
 if($contador%2==0){
 $cor="#0066cc";
 }else{
 $cor="#ffcc00";
 }
 $nomeprod=$linha["nomeprod"];
 $nomecli=$linha["nomecli"];
 $unitario=$linha["valorprod"];
 $qtditem=$linha["qtditem"];
 $coditem=$linha["coditem"];
 $codcli=$linha["codcli"];
 $fotoprod=$linha["fotoprod"];
 $valoritem=$unitario*$qtditem;
 $valortotal=$valortotal+$valoritem;
 
          echo"<tr>
               <h4><td bgcolor='$cor'><h5>$nomeprod</h5></td>
               <td bgcolor='$cor'><h5>$nomecli</h5></td>
               <td bgcolor='$cor'><h5>$unitario</h5></td>
               <td bgcolor='$cor'><h5>$qtditem</h5></td>
               <td bgcolor='$cor'><h2><a href='produto_selecionado2.php?coditem=$coditem&qtditem=
               $qtditem&nomeprod=$nomeprod&fotoprod=$fotoprod'>Atualizar item</h2></a></td>
               <td bgcolor='$cor'><h2>
               <a href='excluiritem.php?coditem=$coditem'>Excluir item</h2></a></td>
               <td bgcolor='$cor'><img src='$fotoprod'width='25'height='23'alt='foto'onmouseover='aumenta(this)'onmouseout='diminui(this)'></td>
               </tr>";
              }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Carrinho</title>

<? include('inc/head.php');?>
<? include('inc/mailmenu.php');?>

</head>
<body>

<? include('inc/header.php');?>
<? include('inc/menu.php');?>
<? include('inc/megamenu.php');?>	

			
		</div>
	</div>

	<div id="content">
	
		<div class="content-top"></div>
		<div class="content-inner">
			
			<!-- List Begin -->
			
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Painas</a></li>
					<li class="last">Olfactive</li>
				</ul>
				<br class="clear"/>
			</div>
			

			
			
			
			
			
			<!-- Main Begin -->
			
			<div class="full-width-content">
				<h3>Carrinho de compras</h3>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td class="remove"><span class="heading">Remover</span></td>
						<td class="thumbnail"></td>
						<td class="product-name"><span class="heading">Produtos</span></td>
						<td class="unit-price"><span class="heading">Preço unitário</span></td>
						<td class="quantity"><span class="heading">Quantidade</span></td>
						<td class="price"><span class="heading">Preço</span></td>
					</tr>
					
					
					
					<?php
$sql="select * from olfactive_item where id='$id'";
 $resultado = mysql_query($sql) or die ("Problema no carrinho".$sql);
 $valortotal=0.00; //join sql
 $contador=0;
 while($linha=mysql_fetch_array($resultado))
             {
 $contador++;
 if($contador%2==0){
 $cor="#0066cc";
 }else{
 $cor="#ffcc00";
 }
 $id=$linha["id"];
 $nome=$linha["nome"];
 $preco=$linha["preco"];
 $descricao=$linha["descricao"];
 $qtditem=$linha["qtditem"]; 
 $valoritem=$unitario*$qtditem;
 $valortotal=$valortotal+$valoritem;
 
          echo"            
             
			
					
					<a href='excluiritem.php?coditem=$coditem'>Excluir item</h2></a>
					
					
					<tr>
						<td class='remove'><a href='excluiritem.php?id=$id'><img src='images/delete_icon.png' border='0'/></a></td>
						<td class='thumbnail'><?php echo'<img src='$valortotal' width='25' heigth='23''; ?></td>
						<td class='product-name'> $nome</td>
						<td class='unit-price'> $preco</td>
						<td class='quantity'><input type='text' value='$qtditem' onfocus='if(this.value=='1'){this.value=''};' onblur='if(this.value==''){this.value='1'};' class='input-text cart-field'></td>
						<td class='price'>$valortotal</td>
					</tr>
					
					  ";
              }

 
 ?>			
					
					
					
					
					<tr class="promo">
						<td colspan="4" class="unit-price"><span class="grey">Adicione código promoçional</span></td>
						<td class="quantity"><input type="text" value="" class="input-text-grey cart-field"></td>
						<td class="price"><a href="#" class="general-button-big cart-button"><span class="button-big">Adicionar</span></a></td>
					</tr>
					<tr>
						<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Subtotal</span></td>
						<td class="price"><span class="summary">R$<?php echo "$valortotal"; ?></span></td>
					</tr>
					<tr>
						<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Frete</span></td>
						<td class="price"><span class="summary">R$ 00</span></td>
					</tr>
					<tr>
						<td colspan="4" class="unit-price"></td>
						<td class="quantity"><span class="summary">Total</span></td>
						<td class="price"><span class="summary">R$<?php echo "$valortotal"; ?></span></td>
					</tr>
					<tr class="last submit">
						<td colspan="4" class="unit-price"></td>
						<td class="quantity">
							<a href="#" class="general-button-big-grey cart-button"><span class="button-big-grey">Atualizar</span></a>
						</td>
						<td class="price">
							<a href="#" class="general-button-big cart-button"><span class="button-big">Continue</span></a>
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
<? include('inc/footer.php');?>

			</div>
	</div>
</div>

</body>
</html>
