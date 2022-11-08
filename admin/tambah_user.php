<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-register-user2.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>Register User</h2>
            </div>
            <div class="login-form">
                <form action="proses_tambah_user.php" method="post">
                    <input type="text" id="name" name="nama" placeholder="Name"><br>
                    <div class="line-dark"></div>
                    <input type="text" id="address" name="username" placeholder="Username"><br>
                    <div class="line-dark"></div>
                    <input type="text" id="gender" name="password" placeholder="Password"><br>
                    <div class="line-dark"></div>
                    <input type="text" id="telp" name="role" placeholder="Role"><br>
                    <div class="line-dark"></div>
                    <input type="submit" id="login" value="Register">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>