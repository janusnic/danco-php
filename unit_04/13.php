<?php
function getthehost($host,$path) {
	// Открыть подключение к узлу
	$fp = fsockopen($host, 80);
	// Перейти в блокирующий режим
	socket_set_blocking($fp, 1);
	// Отправить заголовки
	fputs($fp,"GET $path HTTP/1.1\r\n");
	fputs ($fp, "Host: $host\r\n\r\n"); 
	$x = 1;
	// Получить заголовки
	while($x < 10):
		$headers = fgets ($fp, 4096);
		print $headers;
		$x++;
	endwhile;
	// Закрыть манипулятор
	fclose($fp);
	}
getthehost("www.ukr.net", "/");
