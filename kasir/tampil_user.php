<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-user-kasir.css">
</head>
<body>

    <!-- CRUD user -->
    <div class="container">
        <div class="report">
            <div class="report-wrapper">
                <div class="report-card">
                    <div class="report-desc">
                        <h3>Report User</h3>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telp</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../koneksi.php";
                        $sql = mysqli_query($conn, "SELECT m.id_member, m.nama, m.alamat, m.jenis_kelamin, m.tlp FROM member m");
                        $no = 0;

                        $pan = mysqli_query($conn, "select * from member");
                        $f = mysqli_num_rows($pan);

                            while ($data_member = mysqli_fetch_array($sql)) {
                            $no++;
                            $hapus = "<a href='hapus_user.php?id_member=$data_member[id_member]' onclick='return confirm(Apakah anda yakin menghapus data ini?)'>Hapus</a>";
                            $edit = "<a href='ubah_user.php?id_member=$data_member[id_member]'>Edit</a>";
                            $transaksi = "<a href='tambah_transaksi.php?id_member=$data_member[id_member]'>Transaksi</a>";
                        ?>
                            <tr>
                                <td><?= $data_member['id_member'] ?></td>
                                <td><?= $data_member['nama'] ?></td>
                                <td><?= $data_member['alamat'] ?></td>
                                <td><?= $data_member['jenis_kelamin'] ?></td>
                                <td><?= $data_member['tlp'] ?></td>
                                <td><?= $transaksi ?></td>
                                <td><?= $edit ?></td>
                                <td><?= $hapus ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                      </table>

                    <div class="register">
                        <a href="tambah_user.php"><button>Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>