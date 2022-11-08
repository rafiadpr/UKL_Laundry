<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Outlet</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-ubah-outlet2.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>Ubah Outlet</h2>
            </div>
            <?php 
            include "../koneksi.php";
            $qry_get_outlet = mysqli_query($conn, "select * from outlet where id_outlet = '" . $_GET['id'] . "'");
            $dt_outlet = mysqli_fetch_array($qry_get_outlet);
            ?>
            <div class="login-form">
                <form action="proses_ubah_outlet.php" method="post">
                    <input type="hidden" id="id_outlet" name="id_outlet" value="<?= $dt_outlet['id_outlet'] ?>">
                    <input type="text" id="name" name="nama" value="<?= $dt_outlet['nama'] ?>">
                    <div class="line-dark"></div>
                    <input type="text" id="address" name="alamat" value="<?= $dt_outlet['alamat'] ?>"><br>
                    <div class="line-dark"></div>
                    <input type="text" id="telp" name="tlp" value="<?= $dt_outlet['tlp'] ?>"><br>
                    <div class="line-dark"></div>
                    <input type="submit" id="login" value="Ubah">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>