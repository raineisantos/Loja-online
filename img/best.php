<?php
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
						 <div class="single-item">
							<span class="title"><a href="details.html">Great New Perfume for Her</a></span>
							<span class="price">$149.90</span>
							<img src="images/product1.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
						
						
						
						<div class="single-item">
							<span class="title"><a href="detalhes.php"><?php echo "$nome"; ?></a></span>
							<span class="price">R$<?php echo "$preco"; ?></span>
							<img src="images/product2.png" alt="Item"/>
							<?php echo "<a href='details.php?nome=$nome' class='general-button float-left'><span class='button'>Add ao carrinho</span></a> ";?>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Delight in Orange and Yellow</a></span>
							<span class="price">$23</span>
							<img src="images/product3.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Kiss in the Rain</a></span>
							<span class="price">$129.90</span>
							<img src="images/product5.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
					  </div>
					  
					  <!-- 4-8 -->
					  <div class="group-items">
						 <div class="single-item">
							<span class="title"><a href="details.html">Aroma Dolce</a></span>
							<span class="price">$149.90</span>
							<img src="images/product4.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Wind of Spring</a></span>
							<span class="price">$29</span>
							<img src="images/product2.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Great New Perfume for Her</a></span>
							<span class="price">$23</span>
							<img src="images/product6.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
						
						<div class="single-item">
							<span class="title"><a href="details.html">Delight in Orange and Yellow</a></span>
							<span class="price">$129.90</span>
							<img src="images/product3.png" alt="Item"/>
							<a href="#" class="general-button float-left"><span class="button">Add to cart</span></a>
							<span class="list-link">
								<a href="details.html" class="regular">Leia mais...</a>
							</span>
							<br class="clear"/>
						</div>
					  </div>
					  
				   </div>
				   
				   <!-- End -->
				   
				</div>

				<br class="clear"/>
			</div>

		</div>
		<div class="shadow"></div>
		<!-- Bestsellers End -->
