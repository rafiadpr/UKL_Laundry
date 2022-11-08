<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-ubah-user.css">
</head>
<body>
    <!-- Ubah -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>Ubah user</h2>
            </div>
            <?php 
            include "../koneksi.php";
            $qry_get_user = mysqli_query($conn, "select * from user where id = '" . $_GET['id'] . "'");
            $dt_user = mysqli_fetch_array($qry_get_user);
            ?>
            <div class="login-form">
                <form action="proses_ubah_user.php" method="post">
                    <input type="hidden" id="id" name="id" value="<?= $dt_user['id'] ?>">
                    <input type="text" id="name" name="nama" value="<?= $dt_user['nama'] ?>">
                    <div class="line-dark"></div>
                    <input type="text" id="address" name="username" value="<?= $dt_user['username'] ?>">
                    <div class="line-dark"></div>
                    <input type="password" id="telp" name="password" value="<?= $dt_user['password'] ?>">
                    <div class="line-dark"></div>
                    <input type="text" id="gender" name="role" value="<?= $dt_user['role'] ?>">
                    <div class="line-dark"></div>
                    <input type="submit" id="login" value="Ubah">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>