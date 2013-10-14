<?php
// recebendo a url da imagem
$filename = $_GET['img'];
$percent = 0.10;

// Cabeçalho que ira definir a saida da pagina
header('Content-type: image/jpeg');

// pegando as dimensoes reais da imagem, largura e altura
list($width, $height) = getimagesize($filename);

//setando a largura da miniatura
$new_width = 67;
//setando a altura da miniatura
$new_height = 50;

//gerando a a miniatura da imagem
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//o 3º argumento é a qualidade da imagem de 0 a 100
imagejpeg($image_p, null, 50);
imagedestroy($image_p);
?>








