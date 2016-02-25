
<?php
/*
Пример использования $mysqli->server_info

Объектно-ориентированный стиль
*/
$mysqli = new mysqli("localhost", "lara", "ghbdtn");

/* проверить соединение */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* вывести версию сервера */
printf("Server version: %s\n", $mysqli->server_info);

/* закрыть соединение */
$mysqli->close();

//Процедурный стиль


$link = mysqli_connect("localhost", "lara", "ghbdtn");

/* проверить соединение */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* вывести версию сервера */
printf("Server version: %s\n", mysqli_get_server_info($link));

/* закрыть соединение */
mysqli_close($link);
?>
