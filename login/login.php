<?php
require '../db.php';
require '../class.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce5233f2e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Log In</title>
</head>
<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $mail = $_POST['mail'];
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND mail='$mail'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0){
            header("Location: ../error.php");
        }else{
        session_start();
        $_SESSION['username'] = $username;
        echo("<script>alert('You are now logged in ${username}!! <3')</script>");
        echo("<script>window.location = '../home/index.php';</script>");
        }}
    
?>
<body>
    <nav class="nav">
        <div class="logo">
            <a href="../home/index.php">
            <img src="../img/logo1.jpg" alt="logo" width="300" height="auto"></a>
        </div>
        <ul class="lista">
            <li><a href="login.php">Log in</a></li>
            <li><a href="../register/register.php">Register</a></li>
        </ul>
    </nav>
    <body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div id="login">
                    <form action="../home/index.php" method="post">
                    <label class="username">Username</label>
                    <input type="text" name="username" class="forma"  required>
                    <br>
                    <br>
                    <label class="mail">Email</label>
                    <input type="text" name="mail" class="forma"  required>
                    <br>
                    <br>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="forma" required>
                    <br>
                    <br>
                    <button type="submit" name="submit" color="hotpink">Log In</button>
                    </form>
                </div>

            </form>
        </div>

    </body>
    </html>