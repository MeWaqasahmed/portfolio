<?php
include('../connection.php');



if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$authenticate = "SELECT email from register WHERE email='$email' && password = '$password'";

$result = $conn->query($authenticate);

if($result->num_rows>0){
    echo "Succes";
    header("Location: ../index.php");
}else{
    echo "login failed";
    // header("Location: ../pages/login.php");
}






}
$conn->close();

