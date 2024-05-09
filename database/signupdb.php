<?php
// echo "dsdc";
include('../connection.php');



if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conpassword = $_POST['confirmpassword'];


    $alreadyExist = "SELECT email FROM register WHERE email='$email'";
    $exist = $conn->query($alreadyExist);

    if ($exist->num_rows > 0) {
        header("Location: ../pages/login.html?error=email_exists");
        exit();
    } else {

        if ($password == $conpassword) {

            $authenticate = "INSERT INTO register (name, email, password, confirmpassword)
    VALUES ('$username', '$email', '$password' , '$conpassword')";
            $conn->query($authenticate);
            header("location: ../pages/login.html");
        } else {
            header("Location: ../pages/signup.html?error=password_mismatch");
            exit();
        }
    }
}
$conn->close();
