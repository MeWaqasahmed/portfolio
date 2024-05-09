<!-- <?php
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
    echo "Connected successfully";
}
?> -->


<?php
$localhost = "localhost";
$user = "root";
$password = "";
$database = "waqasportfolio";
echo "conection waiting";
$conn = new mysqli("localhost", "user", "password", "database");

echo $conn->host_info . "\n";

$conn = new mysqli("127.0.0.1", "user", "password", "database", 3306);

echo $conn->host_info."\n";