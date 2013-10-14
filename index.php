<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Olfactive</title>
<? include('inc/head.php');?>

<body>
<? include('inc/header.php');?>
<? include('inc/menu.php');?>
			
			
		</div>
		
	</div>
	
	<div id="content">
		<div class="sales-label">
		</div>
		
<? include('inc/promo.php');?>	
	
		<div class="shadow"></div>
		<!-- Promo End -->
		
<? include('inc/message.php');?>		
		
		<!-- Message End -->
<? include('inc/best.php');?>					
		
		
<? include('inc/boxes.php');?>		
		
		<br class="clear"/>

	</div>
<? include('inc/footer.php');?>	
	
		</div>
	</div>

</div>
<? include('inc/script.php');?>

</body>
</html>
