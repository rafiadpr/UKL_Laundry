<?php
    include 'navbar.php';
    $id = @$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-outlet-owner3.css">
</head>
<body>
    <!-- CRUD OUTLET -->
    <div class="container">
        <div class="report">
            <div class="report-wrapper">
                <div class="report-card">
                    <div class="report-desc">
                        <h3>List Outlet</h3>
                    </div>

                    <form action="tampil_outlet.php" method="post">
                        <label for="gsearch">Search :</label>
                        <input type="search" id="gsearch" name="cari">
                        <input type="submit">
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        if(isset($_POST['cari'])){
                            $cari = $_POST['cari'];
                            $qry_outlet=mysqli_query($conn, "select * from outlet where id_outlet = '$cari' or nama like '%$cari%' or alamat like '%$cari%' or tlp like '%$cari%' ");
                        }
                        else{
                            $qry_outlet = mysqli_query($conn, "select * from outlet where id_owner = '$id'");
                        }
                            $no = 0;
                            while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
                            $no++;
                            $hapus = "<a href='hapus_outlet.php?id=$data_outlet[id_outlet]' style='color:red' onclick='return confirm(Apakah anda yakin menghapus data ini?)' >Hapus</a>";
                            $edit = "<a href='ubah_outlet.php?id=$data_outlet[id_outlet]' style='color:#D6E4E5' >Edit</a>";
                            $histori = "<a href='histori_outlet.php?id=$data_outlet[id_outlet] '>Histori</a>"; 
                        ?>
                            <tr>
                                <td><?= $data_outlet['id_outlet'] ?></td>
                                <td><?= $data_outlet['nama'] ?></td>
                                <td><?= $data_outlet['alamat'] ?></td>
                                <td><?= $data_outlet['tlp'] ?></td>
                                <td><?= $histori ?></td>
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