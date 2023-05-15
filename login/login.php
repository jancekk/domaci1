<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce5233f2e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
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
                <div class="container">
                    <label class="username">Username</label>
                    <input type="text" name="username" class="forma"  required>
                    <br>
                    <br>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="forma" required>
                    <br>
                    <br>
                    <button type="submit" name="submit" color="hotpink">Log In</button>
                </div>

            </form>
        </div>

    </body>
    </html>