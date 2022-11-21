<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-outlet.css">
</head>
<body>
    <!-- CRUD OUTLET -->
    <div class="container">
        <div class="report">
            <div class="report-wrapper">
                <div class="report-card">
                    <div class="report-desc">
                        <h3>Report Outlet</h3>
                    </div>

                    <form method=post action="tampil_outlet.php">
                        <label for="cari">Search :</label>
                        <input type="search" id="gsearch" name="cari">
                        <input type="submit">
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Pemilik</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        if(isset($_POST['cari'])){
                            $cari = $_POST['cari'];
                            $qry_outlet=mysqli_query($conn, "SELECT o.id_outlet, o.nama, o.alamat, o.tlp, o.id_owner, u.nama as nama_owner FROM outlet o JOIN user u ON o.id_owner=u.id where o.id_outlet = '$cari' or o.nama like '%$cari%' or o.alamat like '%$cari%' or o.tlp like '%$cari%' or o.id_owner like '%$cari%' or u.nama like '%$cari%'");
                        }
                        else{
                            $qry_outlet = mysqli_query($conn, "SELECT o.id_outlet, o.nama, o.alamat, o.tlp, o.id_owner, u.nama as nama_owner FROM outlet o JOIN user u ON o.id_owner=u.id");
                        }
                            $no = 0;
                            while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
                            $no++;
                            $hapus = "<a href='hapus_outlet.php?id=$data_outlet[id_outlet]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' style='color:red'>Hapus</a>";
                            $edit = "<a href='ubah_outlet.php?id=$data_outlet[id_outlet]' style='color:white'>Edit</a>";
                        ?>
                            <tr>
                                <td><?= $data_outlet['id_outlet'] ?></td>
                                <td><?= $data_outlet['nama'] ?></td>
                                <td><?= $data_outlet['nama_owner'] ?></td>
                                <td><?= $data_outlet['alamat'] ?></td>
                                <td><?= $data_outlet['tlp'] ?></td>
                                <td><?= $edit ?></td>
                                <td><?= $hapus ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                      </table>

                    <div class="register">
                        <a href="tambah_outlet.php"><button>Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>