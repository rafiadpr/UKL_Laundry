<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-navbar-admin4.css">
</head>
<body>
    <!-- Navbar Section -->
    <div class="container">
        <section class="navbar">
            <nav>
                <h2>Laun<span>dry</span>aja</h2>
                <ul>
                    <li>
                        <a href="home.php"><i class="fa-regular fa-house"></i></a>
                        <a href="tampil_user_member.php"><i class="fa-regular fa-user"></i></a>
                        <!-- <a href="tambah_transaksi.php"><i class="fa-regular fa-plus"></i></a> -->
                        <a href="tampil_paket.php"><i class="fa-regular fa-cubes"></i></a>
                        <a href="tampil_outlet.php"><i class="fa-regular fa-store"></i></a>
                        <a href="histori_transaksi.php"><i class="fa-regular fa-rectangle-history"></i></a>
                        <a href="logout.php"><i class="fa-regular fa-arrow-right-from-bracket"></i></a>
                    </li>
                </ul>
                <div class="user">
                    <img src="../assets/img/Ellipse 1.png" alt="">
                    <h5><?=$_SESSION['nama']?></h5>
                </div>
            </nav>
        </section>
    </div>
    <!-- End of Navbar -->
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>