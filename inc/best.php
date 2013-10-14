<?php 
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
require_once('conexao.php');
require_once('conf/settings.php');

     ?>
       
<!-- Bestsellers Begin -->
		<div class="content-top">
		</div>		
		<div class="content-inner home">
			
			<div id="slider-container">
				
			<div class="slider-nav">
				<a class="prev2"></a>
				<a class="next2"></a>
			</div>

				<div class="slider">   
					
				   <!-- Listing of the elements of the slider -->
				   <div class="items">
				   
					  <!-- 1-4 -->
					  <div class="group-items">
						<? // exibe de produtos
					$sql = "select * from olfactive_produtos where destaque = '1' limit 4";
$rs = mysql_query($sql) or die ("erro na consulta");

while ($linha=mysql_fetch_array($rs))
{   
   $id=$linha["id"];
   $nome=$linha["nome"];
   $preco=$linha["preco"];
   $quantidade=$linha["quantidade"]; 
   $anexo_ida=$linha["anexo_ida"];               
                   
    ?>
						 <div class="single-item">

							<span class="title"><?php echo $nome ?></span>
							<span class="price">R$ <?php echo $preco ?></span>                                                        
<?php echo "<img src='thumb.php?img=$anexo_ida' title='Produtos'>"; ?>
 
							 
							<?php echo "<a href='carrinho.php?acao=add&id=$id' class='general-button float-left'><span class='button'>Add ao carrinho</span></a> ";?>
							<span class="list-link">
								<?php echo"<a href='detalhes.php?id=$id' class='regular'>Leia mais...</a>";?>
							</span>

							<br class="clear"/>
						</div>
					
				  
					  <? } ?>
				    </div>
				 </div>  <!-- End -->
				   
				</div>

				<br class="clear"/>
			</div>

		</div>
		<div class="shadow"></div>
		<!-- Bestsellers End -->
		
		<div class="content-top">
		</div>		
		<div class="content-inner home">
			
			<div id="slider-container">
				
			<div class="slider-nav">
				<a class="prev2"></a>
				<a class="next2"></a>
			</div>

				<div class="slider">   
					
				   <!-- Listing of the elements of the slider -->
				   <div class="items">
				   
					  <!-- 1-4 -->
					  <div class="group-items">
						<? // exibe de produtos
					$sql = "select * from olfactive_produtos where destaque = '0' order by id desc limit 4";
$rs = mysql_query($sql) or die ("erro na consulta");

while ($linha=mysql_fetch_array($rs))
{   
   $id=$linha["id"];
   $nome=$linha["nome"];
   $preco=$linha["preco"];
   $quantidade=$linha["quantidade"]; 
   $anexo_ida=$linha["anexo_ida"];
                   
    ?>
						 <div class="single-item">

							<span class="title"><?php echo $nome ?></span>
							<span class="price">R$ <?php echo $preco  ?></span>                                                        
<?php echo "<img src='thumb.php?img=$anexo_ida' title='Produtos'>"; ?>
							 
							<?php echo "<a href='carrinho.php?acao=add&id=$id' class='general-button float-left'><span class='button'>Add ao carrinho</span></a> ";?>
							<span class="list-link">
								<?php echo"<a href='detalhes.php?id=$id' class='regular'>Leia mais...</a>";?>
							</span>
							<br class="clear"/>
						</div>
					
				  
					  <? } ?>
				    </div>
				 </div>  <!-- End -->
				   
				</div>

				<br class="clear"/>
			</div>

		</div>
		<div class="shadow"></div>
		<!-- Bestsellers End -->
