<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="success.css">
    <title>Success</title>
</head>
<body>
<nav class="nav">
        <div class="logo">
            <a href="home/index.php">
            <img src="img/logo1.jpg" alt="logo" width="300" height="auto"></a>
        </div>
        <ul class="lista">
            <li><a href="login/login.php">Log in</a></li>
            <li><a href="register/register.php">Register</a></li>
        </ul>
    </nav>  
    <div class="form">
        <h1><?php 'Success'; ?></h1>
        <p>
            <?phpif( isset($_SESSION['message']) AND !empty($_SESSION['message']):
            echo $_SESSION['message'];
            else:
                header("location: home/index.php");
            endif;
            ?>
        </p>

    </div>
</body>
</html>