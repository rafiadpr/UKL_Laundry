<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-paket4.css">
</head>
<body>
    <!-- CRUD Jenis Paket -->
    <div class="container">
        <div class="report">
            <div class="report-wrapper">
                <div class="report-card">
                    <div class="report-desc">
                        <h3>Report Packages</h3>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jenis Paket</th>
                                <th>Harga</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        $sql = mysqli_query($conn, "SELECT p.id_paket, p.jenis, p.harga FROM paket p");
                        $no = 0;

                        $pan = mysqli_query($conn, "select * from paket");
                        $f = mysqli_num_rows($pan);

                            while ($data_paket = mysqli_fetch_array($sql)) {
                            $no++;
                            $hapus = "<a href='hapus_paket.php?id=$data_paket[id_paket]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' >Hapus</a>";
                            $edit = "<a href='ubah_paket.php?id=$data_paket[id_paket] '>Edit</a>";
                            $transaksi = "<a href='ubah_paket.php?id=$data_paket[id_paket] '>Transaksi</a>";
                        ?>
                            <tr>
                                <td><?= $data_paket['id_paket'] ?></td>
                                <td><?= $data_paket['jenis'] ?></td>
                                <td><?= $data_paket['harga'] ?></td>
                                <td><?= $edit ?></td>
                                <td><?= $hapus ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                      </table>

                    <div class="register">
                        <a href="tambah_paket.php"><button>Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>