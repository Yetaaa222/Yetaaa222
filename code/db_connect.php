<?php
$servername = "localhost"; // or the server IP
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "your_database_name"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
