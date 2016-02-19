<?php
$path = "/usr/local/phppower/htdocs/index.php"; 

$file = basename($path); // $file = "index.php"
print $file;
echo "Last modified: ".date("H:i:s a".getlastmod());