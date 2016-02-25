
<?php
// Процедурный стиль
$link = mysqli_connect("localhost", "dev", "ghbdtn", "test");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}


/* Select запросы возвращают результирующий набор */
if ($result = mysqli_query($link, "SELECT firstname FROM test LIMIT 10")) {
    printf("Select вернул %d строк.\n", mysqli_num_rows($result));

    /* очищаем результирующий набор */
    mysqli_free_result($result);
}


mysqli_close($link);
?>