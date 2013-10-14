<?php
require_once("conf/settings.php");

$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Ocorreu um erro no sistema Contate um administrador Codigo do erro: 01x".rand(1,999));
if($conn){
	mysql_select_db(DB_NAME, $conn) or die("Ocorreu um erro no sistema Contate um administrador Codigo do erro: 02x".rand(1,999));
}
?>