<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h3>Ubah Transaksi</h3>
    <form action="proses_ubah_transaksi.php" method="post">

      <?php
      include "../koneksi.php";
      $sql = "SELECT t.id_transaksi, t.tgl, t.batas_waktu, t.tgl_bayar, t.status, t.dibayar, d.qty FROM transaksi t JOIN detail_transaksi d ON t.id_transaksi=d.id_transaksi WHERE t.id_transaksi = " .$_GET['id_transaksi'];
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_assoc($result);
      $qry_get_transaksi = mysqli_query($conn, "select * from transaksi where id_transaksi = '" . $_GET['id_transaksi'] . "'");
      $dt_transaksi = mysqli_fetch_array($qry_get_transaksi);
      $id_transaksi = $_GET['id_transaksi'];
      ?>

      <input type="hidden" value="<?= $id_transaksi ?>" name="id_transaksi">
      <div class="mb-3">
        <strong><label class="col-lg-4 col-form-label" for="val-username">Status Pembayaran<span class="text-danger">*</span>
          </label></strong>
        <div class="col-lg-12">
          <?php
          $arr_dibayar = array('belum_dibayar' => 'Belum dibayar', 'dibayar' => 'Dibayar');
          ?>
          <select name="dibayar" class="form-control">
            <?php foreach ($arr_dibayar as $key_dibayar => $val_dibayar) :
              if ($key_dibayar == $dt_transaksi['dibayar']) {
                $selek = "selected";
              } else {
                $selek = "";
              }
            ?>
              <option value="<?= $key_dibayar ?>" <?= $selek ?>><?= $val_dibayar ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <strong><label class="col-lg-4 col-form-label" for="val-email">Tanggal Bayar<span class="text-danger">(Jika Status Pembayaran bukan "dibayar" tidak usah diisi)</span>
          </label></strong>
        <div class="col-lg-12">
          <input type="date" class="form-control" id="val-email" name="tgl_bayar" placeholder="Enter nama kelas.." value="<?= $data['tgl_bayar'] ?>">
        </div>
      </div>
      <div class="mb-3">
        <?php
        $arr_status = array('baru' => 'Baru', 'proses' => 'Proses', 'selesai' => 'Selesai', 'diambil' => 'diambil');
        ?>
        <strong><label class="col-lg-4 col-form-label" for="val-email">Status Order<span class="text-danger">*</span>
          </label></strong>
        <div class="col-lg-12">
          <select name="status" class="form-control">
            <?php foreach ($arr_status as $key_status => $val_status) :
              if ($key_status == $dt_transaksi['status']) {
                $selek = "selected";
              } else {
                $selek = "";
              }
            ?>
              <option value="<?= $key_status ?>" <?= $selek ?>><?= $val_status ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
       
      <div class="mb-3">
        <strong><label class="col-lg-4 col-form-label" for="val-email">Jumlah (kg)<span class="text-danger">*</span>
          </label></strong>
        <div class="col-lg-12">
          <input type="text" class="form-control" id="val-email" name="qty" placeholder="Enter nama kelas.." value="<?= $data['qty'] ?>">
        </div>
      </div>


      <br><br>
      <div class="form-group row">
        <div class="col-lg-8 ml-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="./admin/detail_transaksi.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>