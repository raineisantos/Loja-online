<?php

/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */

if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows

else $quebra_linha = "\n"; //Se "nÃ£o for Windows"

 

// Passando os dados obtidos pelo formulário para as variáveis abaixo

$nome     = $_POST['nome'];

$email    = $_POST['email'];

$comcopia          = $_POST['comcopia'];

$comcopiaoculta    = $_POST['comcopiaoculta'];

$assunto           = $_POST['assunto'];

$mensagem          = $_POST['mensagem'];

 

 

/* Montando a mensagem a ser enviada no corpo do e-mail. */

$mensagemHTML = '<P>E-mail enviado pelo Srª <b>'.$nome.  ' </p><br>

<P>E-mail enviado pelo pelo site www.olfactive.com.br</P><br>

E-mail: <b>'.$email. '</b><br>

<p><b><i>'.$mensagem.'</i></b></p>

<hr>';

$emailadm = 'contato@olfactive.com.br';

 

 

/* Montando o cabeÃ§alho da mensagem */

$headers = "MIME-Version: 1.1" .$quebra_linha;

$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;

// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.

$headers .= "From: " . $emailsender.$quebra_linha;

$headers .= "Cc: " . $comcopia . $quebra_linha;

$headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;

$headers .= "Reply-To: " . $emailremetente . $quebra_linha;

// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

 

/* Enviando a mensagem */



//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:



if(!mail($emailadm, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix

    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"

    mail($emailadm, $assunto, $mensagemHTML, $headers );

}

 

/* Mostrando na tela as informações enviadas por e-mail */

print "Mensagem <b>$assunto</b> enviada com sucesso!<br><br>

De: $emailsender<br>

Para: $emailadm<br>

Com cópia: $comcopia<br>

Com cópia Oculta: $comcopiaoculta

<p><a href='".$_SERVER["HTTP_REFERER"]."'>Voltar</a></p>"

?>

