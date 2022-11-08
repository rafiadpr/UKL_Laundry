<?php
if($_POST){
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis, harga) value ('".$jenis."', '".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
        }
    }
?>