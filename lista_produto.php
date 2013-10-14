<?php
//ni_set('error_reporting', 0);
//ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Lista produtos</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
 
  <script language="javascript">
 <!--
 function aumenta(obj){
          obj.height=obj.height*5;
          obj.width=obj.width*5;}
 function diminui(obj){
          obj.height=obj.height/5;
          obj.width=obj.width/5;}
//-->
</script>
 
</HEAD>

<BODY>

<div>

<p><a href="prod.php"/>Cadastrar Produtos</a></p>


</div>

<div id="centro"><table align="center"><td><h1>Lista de Produtos</h1></td><td></td><td width="300" align="right"><a href="index.php"><img src="img_icon/sair.png" width="100%" height="26" /></table></div>

<table width="100%"align="center">
<tr>
<td><h5>ID</h5>
<td><h5>NOME DO PRODUTO</h5>
<td><h5>PRECO</h5>
<td><h5>QUANT</h5>
<td><h5>IMPOSTO</h5>
<td><h5>PESO</h5>
<td><h5>LARGURA</h5>
<td><h5>ALTURA</h5>
<td><h5>STATUS</h5>
<td><h5>CATEGORIA</h5>
<td><h5>TITULO</h5></td>
<td><h5>DESCRICAO DO PRODUTO</h5></td>
<td><h5>IMAGENS</h5>
</td width="200">
</tr>
<?php
$sql = "select * from olfactive_produtos";
$rs = mysql_query($sql) or die ("erro na consulta");
$contador=0;
while ($linha=mysql_fetch_array($rs))
{
 $contador++;
 if ($contador%2==0)
 {
  $cor="#0066cc";
  }
  else
  {
   $cor="#ffcc00";
   }
$id=$linha["id"];
$nome=$linha["nome"];
$preco=$linha["preco"];
$quantidade=$linha["quantidade"];
$imposto=$linha["imposto"];
$peso=$linha["peso"];
$largura=$linha["largura"];
$altura=$linha["altura"];
$status=$linha["status"];
$categoria=$linha["categoria"];
$nome_arquivo=$linha["nome_arquivo"];
$descricao=$linha["descricao"];
$anexo_ida=$linha["anexo_ida"];
   
   echo"
   
   <tr bgcolor='$cor'>
   
<td><h5>$id</h5></td>
<td><h5>$nome</h5></td>
<td><h5>$preco</h5></td>
<td><h5>$quantidade</h5></td>
<td><h5>$imposto</h5></td>
<td><h5>$peso</h5></td>
<td><h5>$largura</h5></td>
<td><h5>$altura</h5></td>
<td><h5>$status</h5></td>
<td><h5>$categoria</h5></td> 
<td><h5>$nome_arquivo</h5></td>   
<td><h5>$descricao</h5></td>
   
  
   
      <td align='right' bgcolor='$cor'><img src='$anexo_ida' width='25' heigth='23' alt='$anexo_ida'
       onMouseOver='aumenta(this)' onMouseOut='diminui(this)'></td>
   </tr>
   ";
   }
      ?>
     
   
   </table>
   </BODY>

</HTML>
