<?php
// Чтение из файла всей информации о посещениях.
$lines = file('visits.txt');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Наш сайт</title>
</head>
<body>
<h1>Журнал посещений</h1>
<a href="index.php">На главную</a>
<br/>
<br/>
<table border="1">
<tr>
<td>Время</td>
<td>IP-адрес</td>
<td>Откуда</td>
</tr>
<?php
$n = count($lines);
for ($i = 0; $i < $n; $i += 3)
{
echo '<tr>';
echo '<td>' . $lines[$i + 0] . '</td>';
echo '<td>' . $lines[$i + 1] . '</td>';
echo '<td>' . $lines[$i + 2] . '</td>';
echo '</tr>';
}
?>
</table>
</body>
</html>