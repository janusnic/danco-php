<?php

$filename = "somefile.txt";
if (is_file($filename)):
print "The file $filename is valid and exists!";
else:
print "The file $filename does not exist or it is not a valid file!";
endif;

$fs = filesize($filename);

print "The file $filename is $fs bytes!";

$data = "08:13:00|12:37:12|208.247.106.187|Win";

$mode = 'a+';
if ( is_writeable($filename) ):
	$handle = fopen($filename, $mode);
    $success = fwrite($handle, $data);
  	
	fclose($handle);
	print "The file $filename was updatting!";
else:
    print "Could not open filename for writing!";
endif;
?>