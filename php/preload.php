<?php
$sorce = $_GET['s'];
$w = $_GET['w'];
$h = $_GET['h'];
$dir = glob("../fotos/*.jpg");//echo count($dir);
// File and new size
$filename = $dir[$sorce];

// Content type
header('Content-Type: image/jpeg');

// Get new sizes
list($width, $height) = getimagesize($filename);
$proportionwidth = $w / $width;
$proportionheight = $h / $height;
$scale = min($proportionwidth, $proportionheight);
$portetwidth = intval($width * $scale);
$portetheight = intval($height * $scale);

// Load
$thumb = imagecreatetruecolor($portetwidth, $portetheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $portetwidth, $portetheight, $width, $height);

// Output
imagejpeg($thumb, null, 1);