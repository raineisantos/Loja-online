<?php
//ni_set('error_reporting', 0);
//ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');


$nome=$_POST["nome"];
$preco=$_POST["preco"];
$quantidade=$_POST["quantidade"];
$imposto=$_POST["imposto"];
$peso=$_POST["peso"];
$largura=$_POST["largura"];
$altura=$_POST["altura"];
$status=$_POST["status"];           
$categoria = $_POST["categoria"];
$nome_arquivo = $_POST["nome_arquivo"];
$descricao = $_POST["descricao"];
$arquivo = $_FILES["anexo"];


$pesquisar = mysql_query("select * from olfactive_produtos where nome_arquivo='$nome_arquivo'");
//CONFERIMOS SE EXISTE ALGUM ARQUIVO COM O MESMO NOME CADASTRADO!


$contagem = mysql_num_rows($pesquisar);
//TRAZ O RESULTADO DA CONSULTA ACIMA!

if ($contagem ==1)
{

echo "<script type='text/javascript'>
alert(\"J� EXISTE UM ARQUIVO CADASTRADO COM ESSE NOME! (FAVOR RENOMEAR O ARQUIVO).\");

  history.go(-1);
 </script> ";
 exit;
 }


if ($categoria=="Selecione uma categoria")
  {
     echo"
<script language='Javascript' type='text/javascript'>
alert('Selecione uma categoria.');
		history.back();
		</script>";

exit;

        }
		
		
		
//VERIFICA  SE O ARQUIVO DE ANEXO FOI SETADO 
if ($_FILES["anexo"]["error"] > 0)
{
	echo"
		<script language='Javascript' type='text/javascript'>
		alert('$arquivo[1] INSIRA UMA IMAGEM.');
		history.back();
		</script>";
	exit;	
}
        

        
  $data = date("isdmYh");
 
 date_default_timezone_set('Brazil/East');
 $hora_envio = date('H:i:s');

 $data_envio = date("d/m/Y");
  
 
  if(isset($_FILES["anexo"])){
  $arquivo = $_FILES["anexo"];
  

  $pasta_dir= "arquivo/";//diretorio dos arquivos
  //se nao xistir a pasta ele cria uma
  if (!file_exists($pasta_dir)){
  mkdir ($pasta_dir);
  }
  $arquivo_nome = $pasta_dir . $arquivo ["name"];

  move_uploaded_file($arquivo["tmp_name"],$arquivo_nome);
  }

          
  $sql="insert into olfactive_produtos (nome,preco,quantidade,imposto,peso,largura,altura,status,categoria,nome_arquivo,descricao,anexo_ida,data_envio) values 
('$nome','$preco','$quantidade','$imposto','$peso','$largura','$altura','$status','$categoria','$nome_arquivo','$descricao','$arquivo_nome','$data_envio')";

         mysql_query ($sql) or die ("problema no cadastro processo ".$sql); 
echo"
<script LANGUAGE=\"Javascript\">
alert(\"Seu cadastro foi realizado com sucesso.\");
</SCRIPT>";

echo"<script>window.location='prod.php'</script>";

     
 ?>
    
     </body>
     </html>
  


