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
    <link rel="stylesheet" href="reservation.css">
    <title>Make a reservation</title>
</head>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $stylist = $_POST['stylist'];
        $phone = $_POST['phone'];
        $sqls = "SELECT * FROM reservations WHERE name='$name' AND stylist='$stylist' AND phone='$phone'";
            $result = mysqli_query($conn, $sqls);
            $num = mysqli_num_rows($result);
            if($num == 0){
                $sqli = "INSERT INTO reservations (name, phone, stylist)
                VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['stylist']."')";
                $res=mysqli_query($conn,$sqli);
            if($res)
                {
                echo "Reservation is submitted. We will call you shortly.";
                }
            else
                {
                echo "There is some problem in inserting record";
                }
            } else{
                echo"Reservation already exists.";
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
                    <label class="name">Your name</label>
                    <input type="text" name="name" class="forma"  required>
                    <br>
                    <br>
                    <label class="phone">Your phone number</label>
                    <input type="text" name="phone" class="forma"  required>
                    <br>
                    <br>
                    <label for="stylists">Choose your stylist</label>
                    <input type="text" name="stylist" class="forma"  required>
                    <br>
                    <br>
                    <button type="submit" name="submit" color="hotpink">Log In</button>
                    </form>
                </div>

            </form>
        </div>

    </body>
    </html>