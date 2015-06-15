<?php

exec("ping -c 5 www.php.net", $ping);
// В Windows - exec("ping -n 5 www.php.net. $ping);

for ($i=0; $i< count($ping);$i++):
	print "<br>$ping[$i]";
endfor;