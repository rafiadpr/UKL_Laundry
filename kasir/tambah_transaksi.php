<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$id_user = @$_SESSION['id_user'];
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Transaksi</title>
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <h1>Tambah Transaksi</h1>
    <form action="proses_tambah_transaksi.php" method="post">

        <div class="mb-3">
        <label for="nama_member" class="form-label"></label>
          <?php 
          include "../koneksi.php";
          $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
          $dt_member = mysqli_fetch_array($qry_get_member);
          ?>
        <input type="Hidden" class="form-control" id="id_member" name="id_member" value="<?= $dt_member['id_member'] ?>" required>
        </div>

        <div class="mb-3">
        <label for="nama_member" class="form-label">Nama Member</label>
          <?php 
          include "../koneksi.php";
          $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
          $dt_member = mysqli_fetch_array($qry_get_member);
          ?>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $dt_member['nama'] ?>" required>
        </div>

        <div class="mb-3">
        <label for="alamat_member" class="form-label">Alamat Member</label>
          <?php 
          include "../koneksi.php";
          $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
          $dt_member = mysqli_fetch_array($qry_get_member);
          ?>
        <input type="text" class="form-control" id="alamat_member" name="alamat_member" value="<?= $dt_member['alamat'] ?>" required>
        </div>

        <div class="mb-3">
        <label for="tlp_member" class="form-label">No Telp Member</label>
          <?php 
          include "../koneksi.php";
          $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
          $dt_member = mysqli_fetch_array($qry_get_member);
          ?>
        <input type="text" class="form-control" id="tlp_member" name="tlp_member" value="<?= $dt_member['tlp'] ?>" required>
        </div>

        <div class="mb-3">
          <label for="id_outlet" class="form-label">Nama Outlet</label>
          <select name="id_outlet" id="id_outlet" class="form-control">
            <option></option>
            <?php
            include "../koneksi.php";
            $qry_outlet = mysqli_query($conn, "select * from outlet");
            while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
              echo '<option value="' . $data_outlet['id_outlet'] . '">' . $data_outlet['nama'] . ' | ' . $data_outlet['alamat'] . '</option>';
            }
            ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="tgl" class="form-label">Tanggal Order</label>
          <input type="date" name="tgl" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="batas_waktu" class="form-label">Batas Waktu</label>
          <input type="date" name="batas_waktu" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="id_paket" class="form-label">Nama Paket</label>
          <select name="id_paket" class="form-control">
            <option></option>
            <?php
            include "../koneksi.php";
            $qry_paket = mysqli_query($conn, "select * from paket");
            while ($data_paket = mysqli_fetch_array($qry_paket)) {
              echo '<option value="' . $data_paket['id_paket'] . '">' . $data_paket['jenis'] . '</option>';
            }
            ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="qty" class="form-label">Berat Barang /Kg</label>
          <input type="number" name="qty" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <!-- <label for="id_user" class="form-label">Nama Petugas</label> -->
          <input type="hidden" name="id_user" class="form-control" value="<?= $id_user ?>">
          <?php
          include "../koneksi.php";

          // $qry_user = mysqli_query($conn, "select * from user where id_user = . '$id_user' .");
          // while ($data_user = mysqli_fetch_array($qry_user)) {

          // }
          // 
          ?>
        </div>
        
        <div class="mb-3">
          <label for="dibayar" class="form-label">Status Order</label>
          <select name="status" id="status" class="form-control">
            <option></option>
            <option value="baru">Baru</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="diambil">Diambil</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="dibayar" class="form-label">Status Bayar</label>
          <select name="dibayar" id="dibayar" class="form-control">
            <option></option>
            <option value="belum_dibayar">Belum dibayar</option>
            <option value="dibayar">Dibayar</option>
          </select>
        </div>
        <input type="submit" class="btn btn-primary mt-4 w-100" value="Tambah">
      </form>
    </div>
    <?php
    var_dump($id_user);
    ?>
</body>

</html>