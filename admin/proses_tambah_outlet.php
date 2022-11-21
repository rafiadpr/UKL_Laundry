<?php
session_start();
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];
    $owner = $_POST['owner'];
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama, alamat, tlp, id_owner) value ('".$nama."', '".$alamat."', '".$tlp."', '".$owner."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
?>