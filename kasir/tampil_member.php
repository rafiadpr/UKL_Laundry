<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <h1>Tampil Member</h1>
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA</th>
          <th>ALAMAT</th>
          <th>JENIS KELAMIN</th>
          <th>NO TELEPON</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "../koneksi.php";
        $qry_member = mysqli_query($conn, "select * from member");
        $no = 0;
        while ($data_member = mysqli_fetch_array($qry_member)) {
          $no++; ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $data_member['nama'] ?></td>
            <td><?= $data_member['alamat'] ?></td>
            <td><?= $data_member['jenis_kelamin'] ?></td>
            <td><?= $data_member['tlp'] ?></td>
            <td>
              <a href="./ubah_member.php?id_member=<?= $data_member['id_member'] ?>" class="btn btn-success">Ubah</a> |
              <a href="hapus_member.php?id_member=<?= $data_member['id_member'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>