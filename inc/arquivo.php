<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="jquery-1.7.2.min.js" language="javascript"></script>
<script language="javascript" type="text/javascript" src="funcoes.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function(){
    $("#cep").blur(function(e){
        if($.trim($("#cep").val()) != ""){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
                if(resultadoCEP["resultado"]){
                    $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
                    $("#bairro").val(unescape(resultadoCEP["bairro"]));
                    $("#cidade").val(unescape(resultadoCEP["cidade"]));
                    $("#estado").val(unescape(resultadoCEP["uf"]));
                    
                }else{
                    alert("Não foi possivel encontrar o endereço");
                }
            });
        }
    })
});
</script>    
        
<body>
<div class="comment-form-container" id="contact-wrapper">

<div class="form-name float-left">

<form method="post" action="Cadprocess.php" enctype="multipart/form-data" > 

<span class="new-comment-heading">Preencha o formulário abaixo</span>      


<div class="form-name float-left">
							
							
						</div>

<br class="clear"/>


<div class="form-nome float-left">
							<label for="nome">Seu nome</label>
							<input type="text" size="50" name="nome" id="nome" name="nome" value="" class="required form-name input-text" />
						</div>
<br class="clear"/>

<div class="form-cpf float-left">
							<label for="cpf">Seu Cpf</label>
							<input type="text" size="50" name="cpf" id="cpf" name="cpf" value="" class="required form-cpf input-text" />
						</div>

<br class="clear"/>

<div class="form-cpf float-left">
							  <label for="sexo">SEXO</label>
        <td><select style="width:240px;" name="sexo">

               <option></option>               
               <option>Masculino</option>
               <option>Feminino</option> 
 
        </select>
						</div>

<br class="clear"/>




<div class="form-cep float-left">
							<label for="cep">CEP</label>
							<input type="text" size="50" name="cep" id="cep" name="cep" value="" class="required form-name input-text" />
						</div>


<div class="form-endereco float-left">
							<label for="endereco">Endereço</label>
							<input type="text" size="50" name="endereco" id="rua" name="endereco" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="bairro">Bairro</label>
							<input type="text" size="50" name="bairro" id="bairro" name="bairro" value="" class="required form-bairro input-text" />
						</div>

<div class="form-cidade float-left">
							<label for="cidade">Cidade</label>
							<input type="text" size="50" name="cidade" id="cidade" name="cidade" value="" class="required form-cidade input-text" />
						</div>

<div class="form-data_nasc float-left">
							<label for="data_nasc">Data de nascimento</label>
							<input type="text" size="50" name="data_nasc" id="data_nasc" name="data_nasc" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="tel_alterna">Telefone alternativo</label>
							<input type="text" size="50" name="tel_alterna" id="tel_alterna" name="tel_alterna" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="tel_comer">Telefone comercial</label>
							<input type="text" size="50" name="tel_comer" id="tel_comer" name="tel_comer" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="nome_opcao">Como gostaria de ser chamado?</label>
							<input type="text" size="50" name="nome_opcao" id="nome_opcao" name="nome_opcao" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="email">Seu e-mail</label>
							<input type="text" size="50" name="email" id="email" name="email" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="senha">Senha</label>
							<input type="text" size="50" name="senha" id="senha" name="senha" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="conf_senha">Confirme a senha</label>
							<input type="text" size="50" name="conf_senha" id="conf_senha" name="conf_senha" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="identifica_end">Identificação. casa. apt....</label>
							<input type="text" size="50" name="identifica_end" id="identifica_end" name="identifica_end" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="numero">Número</label>
							<input type="text" size="50" name="numero" id="numero" name="numero" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="complemento">Complemento</label>
							<input type="text" size="50" name="complemento" id="complemento" name="complemento" value="" class="required form-name input-text" />
						</div>

<div class="form-cpf float-left">
							<label for="referencia">Referência</label>
							<input type="text" size="50" name="referencia" id="referencia" name="referencia" value="" class="required form-name input-text" />
						</div>

<input type="submit" class="contact-form-button" value="Enviar" name="submit" />
					</form>
					</div>
					<!-- Form End -->



    
