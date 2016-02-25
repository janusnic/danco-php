<?php

// Check procedure connection
$mysqli = mysqli_connect("localhost", "user", "password", "database");
if (mysqli_connect_errno($mysqli)) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error()."<br>";
}
else {
	echo "Connected successfully";
}

$servername = "localhost";
$username = "username";
$password = "password";
// Create connection

$conn = mysqli_connect($servername, $username, $password,'test');
// Check connection

if (!$conn) {
    die("Не удалось подключиться к MySQL: ".mysqli_connect_error());
}
echo "Connected successfully";

?>