<?php
    if($_SESSION['status_login']!=true){
        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-home-admin3.css">
</head>
<body>
    <!-- Jumbotron -->
    <div class="container">
        <section class="jumbotron">
            <div class="caption">
                <h2>Clean Clothes <br>
                    in an Instant</h2>
                <p>We will use all our strength to shorten the time it <br>
                    takes for the laundry to take place.</p>
            </div>
            <div class="report">
                <div class="report-wrapper">
                    <div class="report-card">
                        <div class="report-desc">
                            <h3>Owners</h3>
                        </div>
                        
                        <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        if(isset($_POST['cari'])){
                            $cari = $_POST['cari'];
                            $qry_user=mysqli_query($conn, "select * from user where id = '$cari' or nama like '%$cari%' or username like '%$cari%'");
                        }
                        else {
                        $qry_user = mysqli_query($conn, "SELECT id, nama, username, role FROM user WHERE role='owner'");
                        }
                            $action = "owner";
                            $no = 0;
                            while ($data_user = mysqli_fetch_array($qry_user)) {
                            $no++;
                            $hapus = "<a href='hapus_user.php?id=$data_user[id]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' style='color:red'>Hapus</a>";
                            $edit = "<a href='ubah_user.php?id=$data_user[id]&action=$action' style='color:white'>Edit</a>";
                        ?>
                            <tr>
                                <td><?= $data_user['id'] ?></td>
                                <td><?= $data_user['nama'] ?></td>
                                <td><?= $data_user['username'] ?></td>
                                <td><?= $data_user['role'] ?></td>
                                <td><?= $edit ?></td>
                                <td><?= $hapus ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                      </table>
                        <div class="register">
                            <a href="tambah_user.php?action=<?= $action ?>"><button>Register</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>