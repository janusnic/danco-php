 <!DOCTYPE html>
<html>
<body>
<?php
// Процедурный стиль
$link = mysqli_connect("localhost", "dev", "ghbdtn", "test");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}


/* Select запросы возвращают результирующий набор */
if ($result = mysqli_query($link, "SELECT  id, firstname, lastname, email  FROM test LIMIT 10")) {
    printf("Select вернул %d строк.\n", mysqli_num_rows($result));

		if (mysqli_num_rows($result) > 0) {
		     // output data of each row
		     while($row = $result->fetch_assoc()) {
		         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"]. " " . $row["email"] . "<br>";
		     }
		} else {
		     echo "0 results";
		}

    /* очищаем результирующий набор */
    mysqli_free_result($result);
}


mysqli_close($link);

?>
</body>
</html>
