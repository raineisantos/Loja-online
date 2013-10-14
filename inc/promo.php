<?php
$sql = "select * from olfactive_slide";
$rs = mysql_query($sql) or die ("erro na consulta");

while ($linha=mysql_fetch_array($rs))
{

$img_small1=$linha["img_small1"];
$img_small2=$linha["img_small2"];
$img_small3=$linha["img_small3"];
$img_small4=$linha["img_small4"];
$nome=$linha["nome"];
$descricao=$linha["descricao"];

$anexo_ida=$linha["anexo_ida"];
$nome_arquivo=$linha["nome_arquivo"];
$nome=$linha["nome"];
$preco=$linha["preco"];
   
  
   }
      ?>


		<!-- Promo Begin -->
		<div class="promo-inner" id="promo">
		
			<!-- main navigator -->
			
			<ul id="main_navi">
			
				<li class="first">
					<img src="<?=$img_small1;?>">
					<span class="title">Dreams In Purple</span>
					Phasellus elefend, enim non euismodlacinia 									
					
				</li>
				<li class="active">
					<img src="<?=$img_small2;?>">
					<span class="title">Dreams In Purple</span>
					Phasellus elefend, enim non euismod lacinia
				</li>
				<li class="active">
					<img src="<?=$img_small4;?>">
					<span class="title">Dreams In Purple</span>
					Phasellus elefend, enim non euismod lacinia
				</li>
				<li class="active">
					<img src="<?=$img_small3;?>">
					<span class="title">Dreams In Purple</span>
					Phasellus elefend, enim non euismod lacinia
				</li>
			</ul>
			
			<!-- root element for the main scrollable -->
			<div id="main">
			
				<!-- root element for pages -->
				<div style="top: -940px;" id="pages">
			
					<!-- page #1 -->
					<div class="page">
			
						<!-- sub navigator #1 -->
						<div class="navi"><a class="nivo-control active"></a><a></a><a></a></div>
			
						<!-- inner scrollable #1 -->
						<div class="scrollable">
			
							<!-- root element for scrollable items -->
							<div class="items">
			
								<!-- items  -->
								<div class="item">
					<?php echo "<img src='thumbpromo.php?img=$img_small1' title='Produtos'>"; ?>
								</div>
								<div class="item">
					<?php echo "<img src='thumbpromo.php?img=$img_small4' title='Produtos'>"; ?>
								</div>
								<div class="item">
					<?php echo "<img src='thumbpromo.php?img=$img_small1' title='Produtos'>"; ?>
								</div>
			
								</div>
			
						</div>
			
					</div>
			
					<!-- page #2 -->
					<div class="page">
			
						<div class="navi"><a class="active"></a><a></a><a></a></div>
			
						<!-- inner scrollable #2 -->
						<div class="scrollable">
			
							<!-- root element for scrollable items -->
							<div class="items">
			
								<!-- items on the second page -->
							<div class="item">
									<img src="<?=$img_small2;?>">
								</div>
								<div class="item">
									<img src="<?=$img_small4;?>">
								</div>
								<div class="item">
									<img src="<?=$img_small3;?>">
								</div>
			
							</div>
			
						</div>
			
					</div>
					
					<!-- page #3 -->
					<div class="page">
			
						<div class="navi"><a class="active"></a><a></a><a></a></div>
			
						<!-- inner scrollable #2 -->
						<div class="scrollable">
			
							<!-- root element for scrollable items -->
							<div class="items">
			
								<!-- items on the second page -->
								<div class="item">
									<img src="<?=$img_small4;?>">
								</div>
								<div class="item">
									<img src="<?=$img_small2;?>">
								</div>
								<div class="item">
									<img src="<?=$img_small4;?>">
								</div>
			
							</div>
			
						</div>
			
					</div>
			
					<!-- page #4 -->
					<div class="page">
			
						<div class="navi"><a class="active"></a><a></a><a></a></div>
			
						<!-- inner scrollable #3 -->
						<div class="scrollable">
			
							<!-- root element for scrollable items -->
							<div class="items">
			
								<!-- items on the first page -->
							<div class="item">
									<img src="<?=$img_small3;?>">
								</div>
								<div class="item">
									<img src="<?=$img_small4;?>">
								</div>
								<div class="item">
									<img src="<?=$img_small3;?>">
								</div>
			
							</div>
			
						</div>
			
					</div>
					<!-- End page 4 -->
					
				</div>
			
			</div>

		</div>
		<!-- End Promo -->



		<div class="shadow"></div>
		<!-- Promo End -->
		
