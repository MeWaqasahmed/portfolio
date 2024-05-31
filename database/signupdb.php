<?php
session_start();
include('../connection.php');

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conpassword = $_POST['confirmpassword'];

    $alreadyExist = "SELECT email FROM register WHERE email='$email'";
    $exist = $conn->query($alreadyExist);

    if ($exist->num_rows > 0) {
        header("Location: ../pages/signup.php?error=email_exists");
        exit();
    } else {
        if ($password == $conpassword) {
            $authenticate = "INSERT INTO register (name, email, password, confirmpassword) VALUES ('$username', '$email', '$password', '$conpassword')";
            if ($conn->query($authenticate) === TRUE) {
                $_SESSION['username'] = $username;
                header("Location: ../index.php");
            } else {
                echo "Error: " . $authenticate . "<br>" . $conn->error;
            }
        } else {
            header("Location: ../pages/signup.php?error=password_mismatch");
            exit();
        }
    }
}
$conn->close();
?>
