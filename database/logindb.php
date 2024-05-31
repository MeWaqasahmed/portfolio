<?php
session_start();
include('../connection.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $authenticate = "SELECT email, name FROM register WHERE email='$email' AND password='$password'";
    $result = $conn->query($authenticate);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['name'];
        header("Location: ../index.php");
    } else {
        header("Location: ../pages/login.php?error=login_failed");
    }
}
$conn->close();
?>
