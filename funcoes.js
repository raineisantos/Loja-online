var msg = 'Você não tem permissão para acessar esta área do sistema!';

function printDiv(id, pg) {
	var oPrint, oJan;
	oPrint = window.document.getElementById(id).innerHTML;
	oJan = window.open(pg);
	oJan.document.write(oPrint);
	 document.getElementById('TabelaResultadosCliente').style.overflow='auto';
	oJan.window.print();
       oJan.document.close();
       oJan.focus();
}

function Enter (field, event) {
   var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
  if (keyCode == 13) {
    var i;
  for (i = 0; i < field.form.elements.length; i++)
     if (field == field.form.elements[ i ])
       break;
       i = (i + 1) % field.form.elements.length;
       field.form.elements[ i ].focus();
       return false;
    }
   else
return true;
}

function maiuscula(valor) {
var campo=document.form;
campo.texto.value=campo.texto.value.toUpperCase();
}

function mascara(src, mask){
	var i = src.value.length;
	var saida = mask.substring(1,2);
	var texto = mask.substring(i)
	if (texto.substring(0,1) != saida)
	{
		src.value += texto.substring(0,1);
	}
} 

function mascara2(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}
function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}
function mreais(v){
	v=v.replace(/\D/g,"")
	v=v.replace(/(\d{2})$/,".$1")
	v=v.replace(/(\d+)(\d{3},\d{2})$/g,"$1.$2")
	return v;
}

//RETORNA OS FORMS AOS VALORES INICIAIS
function ZeraForm(valor){
	for (i=0; i<document.getElementById(valor).elements.length; i++) {   
	    if(document.getElementById(valor).elements[i]!=document.getElementById(valor).Data && document.getElementById(valor).elements[i]!=document.getElementById(valor).Hora && document.getElementById(valor).elements[i]!=document.getElementById(valor).FuncionarioId){
	    	document.getElementById(valor).elements[i].value='';   
	    }
	}
	document.getElementById(valor).Acao.value='Insere';
	document.getElementById(valor).Tabela.value=valor;
	document.getElementById('BtExcluir'+valor).style.display='none';
	document.getElementById('Titulo'+valor).innerHTML='Cadastrar '+valor;
	document.getElementById(valor).Botao.value='Enviar';
	CarregaData();
	if(valor=='Venda'){
		document.getElementById(valor).StatusId.value='1';
		document.getElementById(valor).Botao.value='Incluir Produtos';
		document.Venda.DataEntrega.disabled=0;
		document.Venda.ClienteId.disabled=0;
		document.Venda.Desconto.disabled=0;
		document.Venda.StatusId.disabled=0;
		document.Venda.ProdId.disabled=0;
	}else if(valor=='Produto'){
		document.Produto.Estoque.value='0';
		document.Produto.AdicionaEstoque.value='0';
	}
}

//ZERA TODOS OS CAMPOS DE VISUALIZAÇÃO - CADASTRAR TODOS
function Zera(){
document.getElementById('Inicio').style.display='none';
document.getElementById('VisualizaLocalidade').style.display='none';
document.getElementById('Localidade').style.display='none';
document.getElementById('VisualizaFuncionario').style.display='none';
document.getElementById('Funcionario').style.display='none';
document.getElementById('VisualizaCliente').style.display='none';
document.getElementById('Cliente').style.display='none';
document.getElementById('VisualizaProduto').style.display='none';
document.getElementById('Produto').style.display='none';
document.getElementById('VisualizaVenda').style.display='none';
document.getElementById('Venda').style.display='none';
document.getElementById('VisualizaPagamento').style.display='none';
document.getElementById('Pagamento').style.display='none';
document.getElementById('VisualizaProdutos').style.display='none';
}

//EXIBE APENAS O LAYER DESEJADO
function Mostra(valor){
	Zera();
	document.getElementById(valor).style.display='block';
	ZeraForm(valor.replace("Visualiza",""));
}

//CARREGA OS DADOS DO BANCO EM DETERMINADO FORMULARIO
function Carrega(valor, id){
	document.getElementById(valor).Acao.value='Carrega';
	document.getElementById(valor).Id.value=id;
	document.getElementById(valor).Tabela.value=valor;
	document.getElementById(valor).style.display='block';
	document.getElementById("Visualiza"+valor).style.display='none';
	Solicita(valor);
}

//ENVIA AS SOLICITAÇÕES DE CADASTRAMENTO DE PRODUTOS
function InsereProduto(ProdutoId,VendaId,Quantidade) {   
    var url = "gerencia.php?Tabela=ProdutoPorVenda&Acao=Insere&ProdutoId="+ProdutoId+"&VendaId="+VendaId+"&Quantidade="+Quantidade;
  	ajax(url);
    return true;
}
function ExcluiProduto(ProdutoId,VendaId) {   
    var url = "gerencia.php?Tabela=ProdutoPorVenda&Acao=Exclui&Id="+ProdutoId+"&VendaId="+VendaId;
  	ajax(url);
    return true;
}
function VisualizaProdutos(VendaId,Bloqueio) {
	//document.getElementById('VisualizaProdutos').style.display='block'; 
    var url = "Produtos.php?VendaId="+VendaId+"&Bloqueio="+Bloqueio;
  	VizualizaAjax(url);
    return true;   
}
function AlteraStatus(StatusId,VendaId,Filtro,Descricao) {   
    var url = "gerencia.php?Tabela=Venda&Tipo=Bt&Acao=Atualiza&StatusId="+StatusId+"&Id="+VendaId+"&Filtro="+Filtro+"&Descricao="+Descricao;
  	ajax(url);
    return true;
}


//ENVIA AS SOLICITAÇÕES DE CADASTRAMENTO, EXCLUSÃO E EDIÇÃO NO BANCO
function Solicita(valor) {   
    var url = "gerencia.php?";
    for (i=0; i<document.getElementById(valor).elements.length; i++) {   
        var fieldValue = document.getElementById(valor).elements[i].value;   
        url = url+document.getElementById(valor).elements[i].name+"="+document.getElementById(valor).elements[i].value+"&";  
    } 
  	ajax(url);
    return true;   
}
function ajax(url)
{
req = null;
// Procura por um objeto nativo (Mozilla/Safari)
if (window.XMLHttpRequest) {
req = new XMLHttpRequest();

req.onreadystatechange = processReqChange;
//abre a requisição para o arquivo php que pesquisará o estado
req.open("GET",url,true);
req.send(null);
// Procura por uma versão ActiveX (IE)
} else if (window.ActiveXObject) {
req = new ActiveXObject("Microsoft.XMLHTTP");
if (req) {

req.onreadystatechange = processReqChange;
//abre a requisição para o arquivo php que pesquisará o estado
req.open("GET",url,true);

req.send();
}
}
}
function processReqChange() {

// apenas quando o estado for &#8220;completado"
if (req.readyState == 4) {

// apenas se o servidor retornar &#8220;OK"
if (req.status ==200) {

// procura pela div id="div_cidades" e insere o conteudo
// retornado nela, como texto HTML

var parametros=req.responseText;
var quebra=parametros.split("|");

document.getElementById('div_resultado').innerHTML = quebra[1];
document.getElementById('resultado').style.display = "block";
//alert(quebra[1]);
setTimeout("document.getElementById('resultado').style.display = \"none\"",5000);
	for (i=0; i<=quebra.length; i++) {   
        if(i>1){
        	eval(quebra[i]);  
        }
    } 

} else {
alert("Houve um problema ao obter os dados:n" + req.statusText);
}
}
}


//EXIBE A PÁGINA COM OS DADOS ATUALIZADOS NO BANCO
function Visualiza(Valor,Filtro,Descricao) {
	Mostra('Visualiza'+Valor);   
    var url = Valor+".php?Filtro="+Filtro+"&Descricao="+Descricao;
  	VizualizaAjax(url);
    return true;   
}

// JavaScript Document
function VizualizaAjax(url)
{
req = null;
// Procura por um objeto nativo (Mozilla/Safari)
if (window.XMLHttpRequest) {
req = new XMLHttpRequest();

req.onreadystatechange = processReqChange2;
//abre a requisição para o arquivo php que pesquisará o estado
req.open("GET",url,true);
req.send(null);
// Procura por uma versão ActiveX (IE)
} else if (window.ActiveXObject) {
req = new ActiveXObject("Microsoft.XMLHTTP");
if (req) {

req.onreadystatechange = processReqChange2;
//abre a requisição para o arquivo php que pesquisará o estado
req.open("GET",url,true);

req.send();
}
}
}

function processReqChange2() {

// apenas quando o estado for &#8220;completado"
if (req.readyState == 4) {

// apenas se o servidor retornar &#8220;OK"
if (req.status ==200) {

// procura pela div id="div_cidades" e insere o conteudo
// retornado nela, como texto HTML

var parametros=req.responseText;
var quebra=parametros.split("|");
//alert(quebra[0]);
document.getElementById('Visualiza'+quebra[0]).style.display='block';
document.getElementById('Resultado'+quebra[0]).innerHTML = quebra[1];
if(quebra[2]!=''){eval(quebra[2]);}
} else {
alert("Houve um problema ao obter os dados:n" + req.statusText);
}
}
}

//CARREGA OS VALORES DOS MENUS EM LISTA
function CarregaData(){
	url = 'Data.php';
	req = null;
	if (window.XMLHttpRequest) {
		req = new XMLHttpRequest();
		req.onreadystatechange = processReqChange3;
		req.open("GET",url,true);
		req.send(null);
	} else if (window.ActiveXObject) {
		req = new ActiveXObject("Microsoft.XMLHTTP");
		if (req) {
			req.onreadystatechange = processReqChange3;
			req.open("GET",url,true);
			req.send();
		}
	}
}

function processReqChange3() {
	if (req.readyState == 4) {
		if (req.status ==200) {
			var parametros=req.responseText;
			var quebra=parametros.split("|");
			for (i=0; i<=quebra.length; i++) {   
	        	eval(quebra[i]);  
	    	} 
		} else {
			alert("Houve um problema ao obter os dados:n" + req.statusText);
		}
	}
}

var my_div = null; 
var newDiv = null; 
 
ar_campo1 = new Array(0); 
 
function addElement() 
        { 
        //adicionar mais um elemento 
        y = ar_campo1.push(""); 
 
        //indicar o nome do campo como array[novo elemento]  
        newDiv = document.createElement("div"); 
        newDiv.innerHTML = "<input type='text' name='campo"+y+"'>"; 
 
        // adicionar o campo ao formulário 
        my_div = document.getElementById("org_div1"); 
 
        document.form1.insertBefore(newDiv, my_div); 
        } 
 
function readElement() 
{ 
        for(x=0; x < ar_campo1.length; x++) 
        { 
                w = x+1;  
                campo = "document.form1.campo" + w + ".value"; 
                eval("document.write(" + campo +")"); 
                document.write("<br>"); 
        } 
} 



function Limpar(valor, validos) {
// retira caracteres invalidos da string
var result = "";
var aux;
for (var i=0; i < valor.length; i++) {
aux = validos.indexOf(valor.substring(i, i+1));
if (aux>=0) {
result += aux;
}
}
return result;
}

//Formata número tipo moeda usando o evento onKeyDown

function ValorMoeda(campo,tammax,teclapres,decimal) {
var tecla = teclapres.keyCode;
vr = Limpar(campo.value,"0123456789");
tam = vr.length;
dec=decimal

if (tam < tammax && tecla != 8){ tam = vr.length + 1 ; }

if (tecla == 8 )
{ tam = tam - 1 ; }

if ( tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105 )
{

if ( tam <= dec )
{ campo.value = vr ; }

if ( (tam > dec) && (tam <= 5) ){
campo.value = vr.substr( 0, tam - 2 ) + "," + vr.substr( tam - dec, tam ) ; }
if ( (tam >= 6) && (tam <= 8) ){
campo.value = vr.substr( 0, tam - 5 ) + "." + vr.substr( tam - 5, 3 ) + "," + vr.substr( tam - dec, tam ) ; 
}
if ( (tam >= 9) && (tam <= 11) ){
campo.value = vr.substr( 0, tam - 8 ) + "." + vr.substr( tam - 8, 3 ) + "." + vr.substr( tam - 5, 3 ) + "," + vr.substr( tam - dec, tam ) ; }
if ( (tam >= 12) && (tam <= 14) ){
campo.value = vr.substr( 0, tam - 11 ) + "." + vr.substr( tam - 11, 3 ) + "." + vr.substr( tam - 8, 3 ) + "." + vr.substr( tam - 5, 3 ) + "," + vr.substr( tam - dec, tam ) ; }
if ( (tam >= 15) && (tam <= 17) ){
campo.value = vr.substr( 0, tam - 14 ) + "." + vr.substr( tam - 14, 3 ) + "." + vr.substr( tam - 11, 3 ) + "." + vr.substr( tam - 8, 3 ) + "." + vr.substr( tam - 5, 3 ) + "," + vr.substr( tam - 2, tam ) ;}
} 

} 