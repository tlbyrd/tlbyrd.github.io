<?php
$servername = 'localhost';
$username = 'byrdt279';
$password = 'Tatik&Paw6';
$dbname = 'Transplant';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 


$value1 = mysql_real_escape_string ($_POST['name']);
$value2 = mysql_real_escape_string ($_POST['email']);
$value3 = mysql_real_escape_string ($_POST['facebook']);
$value4 = mysql_real_escape_string ($_POST['hometown']);

$sql = "INSERT INTO FormA (name, email, facebook, hometown)
VALUES ('$value1', '$value2', '$value3', '$value4')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>