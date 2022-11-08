<?php
session_start();
$id_user = @$_SESSION['id'];
if ($_POST) {
    $id_member = $_POST['id_member'];
    $id_outlet = $_POST['id_outlet'];
    $id_paket = $_POST['id_paket'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $qty = $_POST['qty'];
    $date_rn = date("Y-m-d");

    if (empty($id_member)) {
        echo "<script>alert('ID MEMBER tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif (empty($id_member)) {
        echo "<script>alert('Id member tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif ($dibayar == "dibayar") {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into transaksi (id_member, id_outlet, id_paket, id_user, tgl, batas_waktu, tgl_bayar, status, dibayar) value ('" . $id_member . "','" . $id_outlet . "','" . $id_paket . "','" . $id_user . "','" . $tgl . "','" . $batas_waktu . "','" . $date_rn . "','" . $status . "','" . $dibayar . "')") or die(mysqli_error($conn));
        if ($insert) {
            include "../koneksi.php";
            $qry_get_transaksi = mysqli_query($conn, "select max(id_transaksi) as id_transaksi from transaksi");
            $data_transaksi = mysqli_fetch_array($qry_get_transaksi);
            $insert_detail = mysqli_query($conn, "insert into detail_transaksi (id_transaksi, id_paket, qty) value ('" . $data_transaksi['id_transaksi'] . "','" . $id_paket . "','" . $qty . "')") or die(mysqli_error($conn));
            echo "<script>alert('Sukses menambahkan transaksi');location.href='histori_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        }
    } else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into transaksi (id_member, id_outlet, id_paket, id_user, tgl, batas_waktu, status, dibayar) value ('" . $id_member . "','" . $id_outlet . "','" . $id_paket . "','" . $id_user . "','" . $tgl . "','" . $batas_waktu . "','" . $status . "','" . $dibayar . "')") or die(mysqli_error($conn));
        if ($insert) {
            include "../koneksi.php";
            $qry_get_transaksi = mysqli_query($conn, "select max(id_transaksi) as id_transaksi from transaksi");
            $data_transaksi = mysqli_fetch_array($qry_get_transaksi);
            $insert_detail = mysqli_query($conn, "insert into detail_transaksi ( id_transaksi, id_paket, qty) value ('" . $data_transaksi['id_transaksi'] . "','" . $id_paket . "','" . $qty . "')") or die(mysqli_error($conn));
            echo "<script>alert('Sukses menambahkan transaksi');location.href='histori_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        }
    }
}