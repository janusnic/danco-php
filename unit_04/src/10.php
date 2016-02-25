<?php
$mysqli = new mysqli("localhost", "dev", "ghbdtn", "test");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT,firstname VARCHAR(80), lastname VARCHAR(80),email VARCHAR(100))") ||
    !$mysqli->query("INSERT INTO test(id,firstname,lastname,email) VALUES (1,'Jhon','Doo','jhondoo@google.com')")) {
    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
}
else {
	echo "All done!";
}

?>

