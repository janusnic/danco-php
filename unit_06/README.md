# danco-php
# Create connection
<pre>
&lt;?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn-&gt;connect_error) {
    die("Connection failed: " . $conn-&gt;connect_error);
} 
echo "Connected successfully";
?&gt; 
</pre>
# Create database
<pre>
&lt;?php
$servername = "localhost";
$username = "lara";
$password = "ghbdtn";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn-&gt;connect_error){
	die("Connection failed: " . $conn-&gt;connect_error);

}
else {
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn-&gt;query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn-&gt;error;
}
}
$conn-&gt;close();
?&gt; 

CREATE USER 'dev'@'localhost' IDENTIFIED BY  '***';

GRANT ALL PRIVILEGES ON * . * TO  'dev'@'localhost' IDENTIFIED BY  '***' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON  `test` . * TO  'dev'@'localhost';

&lt;?php

$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn-&gt;connect_error){
	die("Connection failed: " . $conn-&gt;connect_error);

}
else {
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn-&gt;query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
} else {
	echo "Error creating table: " . $conn-&gt;error;
}
}
$conn-&gt;close();
?&gt; 
</pre>
# INSERT INTO
<pre>
&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn-&gt;query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "&lt;br&gt;" . $conn-&gt;error;
}
$conn-&gt;close();
?&gt;
</pre>
# New record
<pre>
&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn-&gt;query($sql) === TRUE) {
	$last_id = $conn-&gt;insert_id;
	echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
	echo "Error: " . $sql . "&lt;br&gt;" . $conn-&gt;error;
}

$conn-&gt;close();
?&gt; 
</pre>
# multi_query
<pre>
&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn-&gt;multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "&lt;br&gt;" . $conn-&gt;error;
}

$conn-&gt;close();
?&gt; 
</pre>
# prepare and bind
<pre>
&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}


// prepare and bind
$stmt = $conn-&gt;prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt-&gt;bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt-&gt;execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt-&gt;execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt-&gt;execute();

echo "New records created successfully";

$stmt-&gt;close();
$conn-&gt;close();
?&gt;
</pre>
# output data of each row
<pre>
 &lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}


$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn-&gt;query($sql);

if ($result-&gt;num_rows &gt; 0) {
     // output data of each row
	while($row = $result-&gt;fetch_assoc()) {
		echo "&lt;br&gt; id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "&lt;br&gt;";
	}
} else {
 	echo "0 results";
}

$conn-&gt;close();
?&gt; 

&lt;/body&gt;
&lt;/html&gt;
</pre>
# output data of each row
<pre>
 &lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;style&gt;
table, th, td {
     border: 1px solid black;
}
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn-&gt;query($sql);

if ($result-&gt;num_rows &gt; 0) {
	echo "&lt;table&gt;&lt;tr&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Name&lt;/th&gt;&lt;/tr&gt;";
 // output data of each row
	while($row = $result-&gt;fetch_assoc()) {
		echo "&lt;tr&gt;&lt;td&gt;" . $row["id"]. "&lt;/td&gt;&lt;td&gt;" . $row["firstname"]. " " . $row["lastname"]. "&lt;/td&gt;&lt;/tr&gt;";
 	}
	echo "&lt;/table&gt;";
} else {
	echo "0 results";
}

$conn-&gt;close();
?&gt; 

&lt;/body&gt;
&lt;/html&gt;
</pre>
# sql to delete a record
<pre>
&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn-&gt;query($sql) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: " . $conn-&gt;error;
}

$conn-&gt;close();
?&gt; 
</pre>
# updating
<pre>
&lt;?php
$servername = "localhost";
$username = "dev";
$password = "ghbdtn";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-&gt;connect_error) {
	die("Connection failed: " . $conn-&gt;connect_error);
}
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn-&gt;query($sql) === TRUE) {
	echo "Record updated successfully";
} else {
	echo "Error updating record: " . $conn-&gt;error;
}

$conn-&gt;close();
?&gt;
</pre> 