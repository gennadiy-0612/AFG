<?php
/**
 * Created by PhpStorm.
 * User: Gehh
 * Date: 11.10.2015
 * Time: 2:35
 */
header('Content-Type: text/html; charset=WINDOWS-1251');

$l = $_GET['l'];
$number = '';
$filename = glob('../fotos/aleksandrovsk/*.jpg');
echo basename($filename[$l], '.jpg');