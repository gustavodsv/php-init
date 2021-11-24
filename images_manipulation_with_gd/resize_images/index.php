<?php
$file = 'img.jpg';
$maxWidth = 200;
$maxHeight = 200;

$arrayImg = getimagesize($file);

# list = salva os 2 primeiros itens do array nas variaveis
list($originalWidth, $originalHeight) = $arrayImg;

# proportions
$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest < $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$image = imagecreatetruecolor($finalWidth, $finalHeight);
//$image = imagecreatetruecolor($originalWidth, $originalHeight);
$originalImg = imagecreatefromjpeg($file);

 imagecopyresampled($image, $originalImg, 0, 0, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);
//imagecopyresampled($image, $originalImg, 0, 0, 0, 0, $originalWidth, $originalHeight, $originalWidth, $originalHeight);

#  print
header("Content-Type: image/jpeg");
imagejpeg($image, null, 100);

# save new image
// imagejpeg($image, "img-new", 100);


