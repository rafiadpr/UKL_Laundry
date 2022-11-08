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
                <h2>Ubah User</h2>
            </div>
            <?php 
            include "../koneksi.php";
            $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
            $dt_member = mysqli_fetch_array($qry_get_member);
            ?>
            <div class="login-form">
                <form action="proses_ubah_user.php" method="post">
                    <input type="hidden" id="id_member" name="id_member" value="<?= $dt_member['id_member'] ?>">
                    <input type="text" id="name" name="nama" value="<?= $dt_member['nama'] ?>">
                    <div class="line-dark"></div>
                    <input type="text" id="address" name="alamat" value="<?= $dt_member['alamat'] ?>">
                    <div class="line-dark"></div>
                    <input type="text" id="gender" name="jenis_kelamin" value="<?= $dt_member['jenis_kelamin'] ?>">
                    <div class="line-dark"></div>
                    <input type="text" id="telp" name="tlp" value="<?= $dt_member['tlp'] ?>">
                    <div class="line-dark"></div>
                    <input type="submit" id="login" value="Ubah">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>