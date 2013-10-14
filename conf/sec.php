 <?php
  
  /*
     aqui vai varrer todos os REQUEST,POST e GET e jogar o seu valor para
     função limpa_sqlinjection, e retornar para o proprio REQUEST,POST e GET.
  
  */
  
  foreach ($_REQUEST as $index=>$valor){
        $_REQUEST[$index] = limpa_sqlinjection($valor);
  }
  foreach ($_GET as $index=>$valor){
        $_GET[$index] = limpa_sqlinjection($valor);
  }
  foreach ($_POST as $index=>$valor){
        $_POST[$index] = limpa_sqlinjection($valor);
  }
  
  function limpa_sqlinjection($var){
  /* 
     aqui você pode colocar todas as formas de proteção que você ja utiliza
     para seu banco de dados contra sql injection, vou colocar um exemplo
     que é a função mysql_real_escape_string
  */
        $var = mysql_real_escape_string($var);
  
  // caso nao tenha a function mysql_real_escape_string use a mysql_escape_string
  
        return $var;
  }
  
  ?>