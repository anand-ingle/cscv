<?php
session_start(); 
$captchanumber = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; 
$captchanumber = substr(str_shuffle($captchanumber), 8, 6); 
$_SESSION["code"] = $captchanumber; 
$image = imagecreatefromjpeg("bj.jpg"); 
$foreground = imagecolorallocate($image, 255, 0, 0); 
imagestring($image, 15, 30, 15, $captchanumber, $foreground);
header('Content-type: image/png');
imagepng($image);
?>

