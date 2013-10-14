<?php
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$sexo=$_POST["sexo"];
$cep=$_POST["cep"];
$endereco=$_POST["endereco"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$data_nasc=$_POST["data_nasc"];
$tel_alterna=$_POST["tel_alterna"];
$tel_comer=$_POST["tel_comer"];
$nome_opcao=$_POST["nome_opcao"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$conf_senha=$_POST["conf_senha"];
$identifica_end=$_POST["identifica_end"];
$numero=$_POST["numero"];
$complemento=$_POST["complemento"];
$referencia=$_POST["referencia"];
$destaque=$_POST["destaque"];




$sql="insert into olfactive_usuario
(nome,cpf,sexo,cep,endereco,bairro,cidade,data_nasc,tel_alterna,tel_comer,nome_opcao,email,
senha,conf_senha,identifica_end,numero,complemento,referencia,destaque) values
('$nome','$cpf','$sexo','$cep','$endereco','$bairro','$cidade','$data_nasc','$tel_alterna','$tel_comer','$nome_opcao',
'$email','$senha','$conf_senha','$identifica_end','$numero','$complemento','$referencia','$destaque')";

  mysql_query($sql) or die ("problema no cadastro de usuario insert into".$sql);

  echo"
<script LANGUAGE=\"Javascript\">
alert(\"Seu cadastro foi realizado com sucesso.\");
</SCRIPT>";

echo"<script>window.location='cadastro.php'</script>";

?>
 
