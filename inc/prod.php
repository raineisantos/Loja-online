<?php
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
          
                      </head>

                  

                    </style>
                    <title>Cadastro de produtos</title>
                    </head>

                    </br>

                    <center><img src="img_icon/logomarca.png" width="337" height="90"></center>

                    <BODY><table align="center" width="337" height="60"><td></td></table>



                        <table align="center" border="0"td width="350" cellpadding="2" cellspacing="2">
                            <form method="post" action="cadprod.php" enctype="multipart/form-data">
 

                                    <tr bgcolor="#FFFFFF">
                                        <td align="right"><FONT FACE=verdana COLOR="#000000" size="2" >CATEGORIAS DE PRODUTOS:</td>
                                        <td><select style="width:240px;" name="setor_destino">
                                                <option>Selecione a categoria</option> 






                                                <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" >Descricao:</td><td> <textarea name="nome_arquivo" cols="30" rows="4" ></textarea></td>
                                                </tr>

                                                <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" >Anexar imagem: </td><td>  <input type="file" name="anexo">
                                                    </td>
                                                </tr>


                                                <tr align="right">
                                                    <td align="right"><input type="image" value="  enviar  " src="img_icon/enviar.png" width="80" height="30"></td>
                                                    <td></td>
                                                </tr>


                                                <td colspan="2"><h4><center></center></h4></a></td>
                                                </br>
                                                </form> </table>

                                                <br>
                                                    <br>
                                                       

                                                        </BODY>
                                                        </HTML>

