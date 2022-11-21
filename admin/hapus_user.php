<?php 
    if($_GET['id']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from user where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus user');location.href='tampil_user.php';</script>";
        }
    }
?>