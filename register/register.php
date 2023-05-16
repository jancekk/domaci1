<?php
ob_start();
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
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<?php
    if(ISSET($_POST['submit'])){
        if($_POST['username']==''||$_POST['password']==''||$_POST['mail']==''){
            echo "Please enter the empty fields!";
        }
        else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $mail = $_POST['mail'];
            $sqls = "SELECT * FROM users WHERE username='$username' AND password='$password' AND mail='$mail'";
            $result = mysqli_query($conn, $sqls);
            $num = mysqli_num_rows($result);
            if($num == 0){
                $sqli = "INSERT INTO users (mail, username, password)
                VALUES ('".$_POST['mail']."', '".$_POST['username']."', '".$_POST['password']."')";
                $res=mysqli_query($conn,$sqli);
            if($res)
                {
                echo "Record successfully inserted";
                }
            else
                {
                echo "There is some problem in inserting record";
                }
            } else{
                echo"User already exists";
            }
            
                }
    }
?>
<body>
    <nav class="nav">
        <div class="logo">
            <a href="../home/index.php">
            <img src="../img/logo1.jpg" alt="logo" width="300" height="auto"></a>
        </div>
        <ul class="lista">
            <li><a href="../login/login.php">Log in</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <body>
    <div class="register-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div id="register">
                    <label class="username">Give yourself a username</label>
                    <input type="text" name="username" class="forma"  required>
                    <br>
                    <br>
                    <label class="mail">Mail</label>
                    <input type="text" name="mail" class="forma" required>
                    <br>
                    <br>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="forma" required>
                    <br>
                    <br>
                    <button type="submit" name="submit" color="hotpink">Register</button>
                </div>

            </form>
        </div>

    </body>
    </html>