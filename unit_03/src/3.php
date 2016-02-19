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

if (file_exists($filename)):
	$handle = fopen($filename, $mode);
	print "The file $filename is opened!";
	fclose($handle);
else:
    print "File filename does not exist!";
endif;
?>