<meta http-equiv="refresh" content="0;URL=cart.php">

<html>
<head>
<title>Excluir Item</title>
</head>
<body>

<?php

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
//require_once('functions.php');
require_once('conf/settings.php');
include('conf/sec.php');
$id=$_GET["id"];

$sql="delete from olfactive_item where id='$id'";
mysql_query($sql) or die ("Erro na exclusao".$sql);

?>

</body>
<html>
