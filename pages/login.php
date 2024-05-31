<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'login_failed') {
        echo "<p style='color: red;'>Invalid email or password.</p>";
    }
}
include("../connection.php");
include("../database/logindb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="leftimg"><img src="../software-developer-6521720_1280.jpg" alt="Left Image" /></div>
            <div class="head">
                <h1 class="grey">Are you looking for a skilled full-stack developer?</h1>
                <br />
                <h class="blue"> Everything is possible in coding </h>
                <br />
                <p>I am here to convert your thoughts into reality.</p>
            </div>
        </div>
        
        <div class="right">
            <form action="../database/logindb.php" method="POST">
                <div class="loginbox">
                    <div class="logo"></div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Email Here" class="inp emailinp" required/>
                    <label for="password">Password</label>
                    <div class="pas">
                        <input type="password" name="password" placeholder="Enter Password Here" class="inp pasinp" required/>
                    </div>
                    <div class="btnbox">
                        <input type="submit" value="Login" class="btn" name="login"/>
                        <button class="btn"><a href="signup.php">Signup</a></button>
                    </div>
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../assets/javascripts/login.js"></script>
</html>
