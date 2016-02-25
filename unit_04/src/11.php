<?php
$mysqli = new mysqli("localhost", "dev", "ghbdtn", "test");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/* Если нужно извлечь большой объем данных, используем MYSQLI_USE_RESULT */
if ($result = $mysqli->query("SELECT * FROM test")) {

	var_dump($result);
	printf("Select вернул %d строк.\n", $result->num_rows);

       
    }
    /* очищаем результирующий набор */
    $result->close();


$mysqli->close();
?>

