<?php
/**
 * Created by PhpStorm.
 * User: Gehh
 * Date: 11.10.2015
 * Time: 2:35
 */
//
header('Content-Type: text/html; charset=WINDOWS-1251');

$number = '';
$filename = glob('../fotos/zapoblast/*.jpg');//echo count($dir);
// File and new size
$string = $filename[20];
$pattern = '/\.\.(\/\w+){1,2}[\/]{0,1}(.{1,60}(_{0,1}))\.jpg/i';
//$pattern = '/_/i';
$replacement = '$2  ---&3---';
$completenote =  preg_replace($pattern, $replacement, $string);
echo var_dump($completenote);