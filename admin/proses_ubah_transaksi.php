<?php
$id_transaksi = $_POST['id_transaksi'];
$dibayar = $_POST['dibayar'];
$tgl_bayar = $_POST['tgl_bayar'];
$status = $_POST['status'];

include '../koneksi.php';
$sql = "update transaksi set dibayar = '" . $dibayar . "', tgl_bayar = '" . $tgl_bayar . "', status = '" . $status . "' where $id_transaksi ";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('Success edit transaksi ');location.href='histori_transaksi.php';</script>";
  
} else {
  echo "<script>alert('Failed edit transaksi');location.href='ubah_transaksi.php';</script>";
}