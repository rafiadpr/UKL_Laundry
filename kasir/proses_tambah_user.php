<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama_member."', '".$alamat."',  '".$jenis_kelamin."', '".$tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_user.php';</script>";
        }
    }
?>