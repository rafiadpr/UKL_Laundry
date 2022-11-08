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

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        $sql = mysqli_query($conn, "SELECT o.id_outlet, o.nama, o.alamat, o.tlp FROM outlet o");
                        $no = 0;

                        $pan = mysqli_query($conn, "select * from outlet");
                        $f = mysqli_num_rows($pan);

                            while ($data_outlet = mysqli_fetch_array($sql)) {
                            $no++;
                            $hapus = "<a href='hapus_outlet.php?id=$data_outlet[id_outlet]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' >Hapus</a>";
                            $edit = "<a href='ubah_outlet.php?id=$data_outlet[id_outlet] '>Edit</a>";
                            $transaksi = "<a href='ubah_outlet.php?id=$data_outlet[id_outlet] '>Transaksi</a>";
                        ?>
                            <tr>
                                <td><?= $data_outlet['id_outlet'] ?></td>
                                <td><?= $data_outlet['nama'] ?></td>
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