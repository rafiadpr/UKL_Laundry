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
    <title>User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-histori-kasir-owner.css">
</head>
<body>

    <!-- CRUD user -->
    <div class="container">
        <div class="report">
            <div class="report-wrapper">
                <div class="report-card">
                    <div class="report-desc">
                        <h3>History</h3>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Masuk</th>
                                <th>Batas Waktu</th>
                                <th>Tanggal Bayar</th>
                                <th>No Telp</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Status Bayar</th>
                                <th colspan ="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        $sql = mysqli_query($conn, "SELECT t.id_transaksi, m.nama, t.tgl, t.batas_waktu, t.tgl_bayar, m.tlp, t.status, t.dibayar FROM transaksi t JOIN member m ON t.id_member=m.id_member JOIN outlet o ON t.id_outlet=o.id_outlet WHERE o.id_owner = '$id' order by id_transaksi desc");
                        $no = 0;
                        
                        while ($data_transaksi = mysqli_fetch_array($sql)) {
                            $pan = mysqli_query($conn, "SELECT o.id_outlet, o.nama, o.alamat, d.subtotal FROM outlet o JOIN transaksi t ON t.id_outlet=o.id_outlet JOIN detail_transaksi d ON d.id_transaksi=t.id_transaksi where d.id_transaksi = ".$data_transaksi['id_transaksi']."  ORDER BY id_detail_transaksi desc");
                            // $f = mysqli_fetch_array($pan);
                            $total = 0;
                            while ($data_detail = mysqli_fetch_array($pan)){
                                $total += $data_detail['subtotal'];
                            }
                            $no++;
                            $cetak = "<a href='cetak_transaksi.php?id_transaksi=$data_transaksi[id_transaksi]'>Cetak</a>";
                            $edit = "<a href='ubah_transaksi.php?id_transaksi=$data_transaksi[id_transaksi]'>Edit</a>";
                        ?>
                            <tr>
                                <td><?= $data_transaksi['id_transaksi'] ?></td>
                                <td><?= $data_transaksi['nama'] ?></td>
                                <td><?= $data_transaksi['tgl'] ?></td>
                                <td><?= $data_transaksi['batas_waktu'] ?></td>
                                <td><?= $data_transaksi['tgl_bayar'] ?></td>
                                <td><?= $data_transaksi['tlp'] ?></td>
                                <td><?= $total ?></td>
                                <td><?= $data_transaksi['status'] ?></td>
                                <td><?= $data_transaksi['dibayar'] ?></td>
                                <td><?= $cetak ?></td>
                                <td><?= $edit ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>