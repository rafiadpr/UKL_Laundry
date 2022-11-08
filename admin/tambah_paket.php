<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Paket</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-register-paket2.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>Register Paket</h2>
            </div>
            <div class="login-form">
                <form action="proses_tambah_paket.php" method="post">
                <input type="text" id="name" name="jenis" placeholder="Jenis"><br>
                <div class="line-dark"></div>
                <input type="text" id="price" name="harga" placeholder="Harga"><br>
                <div class="line-dark"></div>
                <input type="submit" id="login" value="Register">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>