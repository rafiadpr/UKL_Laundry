<?php
$id_transaksi = $_POST['id_transaksi'];
$dibayar = $_POST['dibayar'];
$tgl_bayar = $_POST['tgl_bayar'];
$status = $_POST['status'];
$qty = $_POST['qty'];

include '../koneksi.php';
$qry_detail_transaksi = mysqli_query($conn, "select id_detail_transaksi from detail_transaksi where id_transaksi= '" . $id_transaksi . "'");
$dt_detail_transaksi = mysqli_fetch_array($qry_detail_transaksi);
$sql = "update transaksi join detail_transaksi on detail_transaksi.id_transaksi = transaksi.id_transaksi set dibayar = '" . $dibayar . "', tgl_bayar = '" . $tgl_bayar . "', status = '" . $status . "', qty = '" . $qty . "' where id_detail_transaksi = '" . $dt_detail_transaksi['id_detail_transaksi'] . "' ";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('Success edit transaksi ');location.href='histori_transaksi.php';</script>";
  
} else {
  echo "<script>alert('Failed edit transaksi');location.href='ubah_transaksi.php';</script>";
}