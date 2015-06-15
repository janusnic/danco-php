<meta charset="UTF-8" />
<?php

$file_array = file("pastry.txt");
while (list($line_num,$line) = each($file_array)):
	print "<b>Line $line_num:</b> ".htmlspecialchars($line)."<br>\n";
endwhile;