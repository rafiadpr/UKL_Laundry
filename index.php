<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style-landing.css">
</head>
<body>
    <!-- Header -->
    <div class="navbar">
        <div class="navbar-logo">
            <h2>Laundryaja</h2>
        </div>
    </div>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>Lo<span>gin</span></h2>
            </div>
            <div class="login-form">
                <form action="proses_login.php" method="post">
                    <input type="text" id="username" name="username" placeholder="Username"><br>
                    <div class="line-dark"></div>
                    <input type="password" id="password" name="password" placeholder="Password"><br>
                    <div class="line-dark"></div>
                    <input type="checkbox" id="checkbox" name="checkbox">
                    <label for="checkbox">Keep me logged in</label><br>
                    <input type="submit" id="login" value="Login">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>