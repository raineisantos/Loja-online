<?php
//ni_set('error_reporting', 0);
//ini_set('display_errors', 0);
session_start();
ob_start();
require_once('conexao.php');
require_once('conf/settings.php');
include('conf/sec.php');
?>
</head>

			

<body>

<table align="center">	
<form method="post" action="cadprod.php" enctype="multipart/form-data">

<div>
     <p><a href="lista_produto.php"/>Listar Produtos</a></p>
          
         </div>
                              







                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> Nome do produto
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="nome" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Preco
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="preco" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Quant.
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="quantidade" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> Imposto
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="imposto" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Peso
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="peso" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Largura
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="largura" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Altura
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="altura" cols="30" rows="4" ></td>
                                                </tr> 
                                      <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Status
                                                    </td>


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="status" cols="30" rows="4" ></td>
                                                </tr> <br>


<td>
			
<select style="width:300px;" name="categoria">
<option>Selecione a categoria do produto</option>           
<?php
		$query = mysql_query("SELECT * FROM olfactive_categorias order by nome asc");
		$pos = 1;
      	while ($arr = mysql_fetch_array($query)) {

	$nome = $arr["nome"];
	$id = $arr["id"];

		?>

<option><a href="<?=URL?>categoria.php?id=<?=urlencode("$nome")?>"> <?=$nome?></a></option>

        <?
        $pos++;
}	?>
	
			 </select>
</td><td>Descricao do produto</td>
 
				
 




 <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <textarea name="descricao" cols="30" rows="4" ></textarea></td>
                                                </tr> <br>

                                                <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td>  Titulo do poduto
                                                    </td>
                                                    
                                                    
                                                    


<tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" ></td><td> <input type="text" name="nome_arquivo" cols="30" rows="4" ></td>
                                                </tr> <br>

                                                <tr align="left">
                                                    <td align="right"><FONT FACE=verdana COLOR="#000000000" size="2" >Anexar imagem: </td><td>  <input type="file" name="anexo">
                                                    </td>
                                                    
                                                    
                                                    
                                                      <tr bgcolor="#FFFFFF">
        <td align="right"><FONT FACE=verdana COLOR="#000000" size="2" >DESTAQUE</td>
                                  <td><select name="destaque">
                                  <option>0 </option>
                                  <option>1</option>
            </select></td>
      </tr>


                                                <tr align="right">
                                                    <td align="right"><input type="submit" value="  enviar  " src="img_icon/enviar.png" width="80" height="30"></td>
                                                    <td></td>
                                              

			



				<!-- fim -->
</form>				
</table>			
		
		

</body>
</html>
