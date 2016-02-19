<?php
// Запись в файл информации о посещении страницы.
$f = fopen('visits.txt', 'a+');
fwrite($f, date('Y-m-d H:i:s') . "");
fwrite($f, $_SERVER['REMOTE_ADDR'] . "");
fwrite($f, $_SERVER['HTTP_REFERER'] . "");
fclose($f);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Наш сайт</title>
</head>
<body>
<h1>Это главная страница сайта</h1>
Мы <a href="visits.php">следим</a> за ее посещаемостью!
<br/><br/>
На нас ссылаются два сайта: <a href="site1.htm">раз</a>, <a href="site2.htm">два</a>.
</body>
</html>