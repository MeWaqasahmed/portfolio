<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "waqasportfolio";

// Create connection
$conn = new mysqli($host, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}
?>
