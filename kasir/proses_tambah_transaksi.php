<?php
session_start();
// $id_user = @$_SESSION['id'];
// $check = $_POST['check'];
// $qty = $_POST['qty'];
// $harga = $_POST['harga'];

// // echo $_SESSION['id'];

// foreach($check as $item){
//     echo "selected id: ". $item ."<br/>";
//     echo "qty id: ". $qty[$item] ."<br/>";
//     echo "harga id: ".$harga[$item]."<br/>";
// }

if ($_POST) {
    $id_user = @$_SESSION['id'];
    $id_member = $_POST['id_member'];
    $id_outlet = $_POST['id_outlet'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $check = $_POST['check'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $date_rn = date("Y-m-d");
    
    if ($dibayar == "dibayar") {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into transaksi (id_member, id_outlet, id_user, tgl, batas_waktu, tgl_bayar, status, dibayar) value ('" . $id_member . "','" . $id_outlet . "','" . $id_user . "','" . $tgl . "','" . $batas_waktu . "','" . $date_rn . "','" . $status . "','" . $dibayar . "')")or die(mysqli_error($conn));
        if($insert){
            $id_trans = mysqli_insert_id($conn);
            foreach($check as $item){
                $subtotal = $qty[$item] * $harga[$item];
                mysqli_query($conn, "insert into detail_transaksi (id_transaksi, id_paket, qty, subtotal) value ('" . $id_trans . "','" . $item . "','" . $qty[$item] . "','" . $subtotal . "')");
            }
            echo "<script>alert('Sukses menambahkan transaksi');location.href='histori_transaksi.php';</script>";
        }else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tampil_member.php';</script>";
        }

    } else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into transaksi (id_member, id_outlet, id_user, tgl, batas_waktu, status, dibayar) value ('" . $id_member . "','" . $id_outlet . "','" . $id_user . "','" . $tgl . "','" . $batas_waktu . "','" . $status . "','" . $dibayar . "')") or die(mysqli_error($conn));
    if($insert){
            $id_trans = mysqli_insert_id($conn);
            foreach($check as $item){
                $subtotal = $qty[$item] * $harga[$item];
                mysqli_query($conn, "insert into detail_transaksi (id_transaksi, id_paket, qty, subtotal) value ('" . $id_trans . "','" . $item . "','" . $qty[$item] . "','" . $subtotal . "')");
            }
            echo "<script>alert('Sukses menambahkan transaksi');location.href='histori_transaksi.php';</script>";
        } else {
        echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        }
    }
}