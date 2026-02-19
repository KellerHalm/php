<?php

$img = imagecreate(400, 200);

$orange = imagecolorallocate($img, 255, 165, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 255, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$green = imagecolorallocate($img, 0, 255, 0);
$yellow = imagecolorallocate($img, 255, 255, 0);

imagefill($img, 0, 0, $yellow);

imagefilledellipse($img, 200, 100, 80, 80, $blue);

imagestring($img, 5, 0, 0, 'Hello, World!', $black);
imagestring($img, 5, 283, 0, 'Hello, World!', $black);
imagestring($img, 5, 0, 185, 'Hello, World!', $black);
imagestring($img, 5, 283, 185, 'Hello, World!', $black);

$filename = "test.png";
imagepng($img, $filename); 

echo "Image create: '$filename'";

?>
