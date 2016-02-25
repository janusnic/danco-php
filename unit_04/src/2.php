<?php
$servername = "localhost";
$username = "username";
$password = "password";

// OOP connection
$mysqli = new mysqli($servername, $username, $password, "database");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error."<br>";
}
else {
echo "Connected successfully";
}

// Create connection
$conn = new mysqli($servername, $username, $password, "database");

// Check connection
if ($conn->connect_error) {
	die("Не удалось подключиться к MySQL: ".$conn->connect_error);
} 
echo "Connected successfully";
?>