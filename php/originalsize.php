<?php
$sorce = $_GET['s'];
$dir = glob("../fotos/*.jpg");//echo count($dir);
ob_start();
// File and new size
$filename = $dir[$sorce];

// Content type
header('Content-Type: image/jpeg');

// Get new sizes
list($width, $height) = getimagesize($filename);

// Load
$thumb = imagecreatetruecolor($width, $height);
//$source = imagecreatefromjpeg($filename);
//
//// Resize
//imagecopyresized($thumb, $source, 0, 0, 0, 0, $width, $height, $width, $height);

// Output
imagejpeg($thumb);