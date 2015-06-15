<meta charset="UTF-8" />
<?php

$filename = "somefile.txt";
if (is_file($filename)):
print "The file $filename is valid and exists!";
else:
print "The file $filename does not exist or it is not a valid file!";
endif;

$fs = filesize($filename);

print "The file $filename is $fs bytes!";

$mode = 'r';

if ( is_readable($filename) ) :
// Открыть файл и установить указатель текущей позиции в конец файла
$handle = fopen($filename, "r");
else:
print "$filename is not readable!";
endif;
$handle = fopen($filename, $mode) or die("Can't open file") ;
while(!feof($handle)):
	$char = fgetc($handle);
	print $char;
endwhile;
fclose($handle);

