<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Error</title>
    <link rel="stylesheet" href="error.css">
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
    <h1>Error</h1>
    <p>
    <?php
    if(isset($_SESSION['message']) AND !empty($_SESSION['message'])):
        echo $_SESSION['message'];
    else:
        header("location: <home>index.php");
    endif;
    ?>
    </p>


</div>
    
</body>
</html>