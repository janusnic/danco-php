<?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO test (id, firstname, lastname, email)
VALUES (2,'Bob', 'Gray', 'bob@example.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->query("SELECT * FROM test")->num_rows;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 