

<?php
// Объектно-ориентированный стиль
$mysqli = new mysqli("localhost", "dev", "ghbdtn", "test");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

printf ("Состояние системы: %s\n", $mysqli->stat());

$mysqli->close();

//Процедурный стиль


$link = mysqli_connect("localhost", "dev", "ghbdtn", "test");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

printf("Состояние системы: %s\n", mysqli_stat($link));

mysqli_close($link);
?>
