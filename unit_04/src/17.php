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

$id = $conn->query("SELECT * FROM test")->num_rows;
print_r($id);
// prepare and bind
$stmt = $conn->prepare("INSERT INTO test (id, firstname, lastname, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param('isss',$id, $firstname, $lastname, $email);

// set parameters and execute
$id+=1;
print_r($id);
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
print_r($stmt);
$stmt->execute();
$stmt->bind_result($district);

$id+=1;
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();
$stmt->bind_result($district);

$id+=1;
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();
$stmt->bind_result($district);

echo "New records created successfully";

$stmt->close();
$conn->close();


?> 