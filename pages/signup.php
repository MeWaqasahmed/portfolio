<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'email_exists') {
        echo "<p style='color: red;'>Email already exists.</p>";
    } elseif ($_GET['error'] == 'password_mismatch') {
        echo "<p style='color: red;'>Passwords do not match.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Signup</title>
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
            <form action="../database/signupdb.php" method="POST">
                <div class="loginbox">
                    <div class="logo"></div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter email here" class="inp emailinp" required/>
                    <label for="usrname">Username</label>
                    <input type="text" name="username" placeholder="Enter username here" class="inp emailinp" required/>
                    <label for="password">Password</label>
                    <div class="pas">
                        <input type="password" name="password" placeholder="Enter Password Here" class="inp pasinp" required/>
                    </div>
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="Enter password again" class="inp emailinp" required/>
                    <div class="btnbox">
                        <button class="btn"><a href="login.php">Login</a></button>
                        <input type="submit" value="Signup" class="btn signup" name="signup"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
