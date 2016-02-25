<?php
/*
mysqli.default_host=192.168.2.27
mysqli.default_user=root
mysqli.default_pw=""
mysqli.default_port=3306
mysqli.default_socket=/tmp/mysql.sock

*/
$host = "127.0.0.1";
$user = "lara";
$passwd = "ghbdtn";
$dbase = "lara";

$mysqli = new mysqli($host, $user, $passwd, $dbase);
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться к MySQL: %s\n", mysqli_connect_error());
    exit();
}
/* вывод информации о хосте */
printf("Host info: %s\n", $mysqli->host_info);
/* закрытие соединения */
$mysqli->close();

// Процедурный стиль

$mysqli = mysqli_connect("127.0.0.1", $user, $passwd, $dbase, 3306);
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться к MySQL: %s\n", mysqli_connect_error());
    exit();
}

/* вывод информации о хосте */
printf("Host info: %s\n", mysqli_get_host_info($mysqli));
/* закрытие соединения */
mysqli_close($mysqli);
?>