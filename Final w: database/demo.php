<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'forms1';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$value1 = $_POST['first_name'];
$value2 = $_POST['last_name'];
$value3 = $_POST['email'];
$value4 = $_POST['message'];

$sql = "INSERT INTO demo (first_name, last_name, email, message)
VALUES ('$value1', '$value2', '$value3', '$value4')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>