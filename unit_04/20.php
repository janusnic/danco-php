<?php

$path = "/usr/locla/phppower/htdocs/index.php";

$file = dirname($path); // $file = "usr/local/phppower/htdocs"

echo $file;

$dir = dirname(__FILE__);

echo $dir;

$isdir = is_dir("index.html"); // Возвращает FALSE

$isdir = is_dir($dir);  // Возвращает TRUE

?>