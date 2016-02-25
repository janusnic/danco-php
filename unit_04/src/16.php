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
$last_id = $conn->query("SELECT * FROM test")->num_rows;
++$last_id;
$sql="INSERT INTO test (id, firstname, lastname, email) VALUES ($last_id, 'Bob1','Gray1','bob1@example.com');";
++$last_id;
$sql.="INSERT INTO test (id, firstname, lastname, email) VALUES ($last_id,'Marry','Gray','mm@ex.com');";
++$last_id;
$sql.="INSERT INTO test (id, firstname, lastname, email) VALUES ($last_id, 'Julie', 'Gray','julie@example.com');";
  
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 