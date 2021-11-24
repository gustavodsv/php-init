<?php

$image = imagecreatetruecolor(300,300);
$color = imagecolorallocate($image, 255, 0, 0); // image ; r,g,b

imagefill($image, 0, 0, $color); //image ; x ; y ; color

// PNG image
// header("Content-Type: image/png"); // print index
// imagepng($image, null); // image ; print index 

// JPEG image
//header("Content-Type: image/jpeg"); // print index
//imagejpeg($image, 'nova_imagem.jpg', 100); // image; save location ; quality
