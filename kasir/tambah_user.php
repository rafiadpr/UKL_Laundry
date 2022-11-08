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
                    <input type="text" id="name" name="nama_member" placeholder="Name"><br>
                    <div class="line-dark"></div>

                    <input type="text" id="address" name="alamat" placeholder="Address"><br>
                    <div class="line-dark"></div>

                    <select name="jenis_kelamin" id="gender" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="line-dark"></div>

                    <input type="text" id="telp" name="tlp" placeholder="No. Telepon"><br>
                    <div class="line-dark"></div>
                    
                    <input type="submit" id="login" value="Register">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>