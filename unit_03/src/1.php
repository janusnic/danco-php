<?php
$file = "somefile.txt";
if (is_file($file)):
print "The file $file is valid and exists!";
else:
print "The file $file does not exist or it is not a valid file!";
endif;
?>