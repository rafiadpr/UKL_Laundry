<?php 
    if($_GET['id']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from outlet where id_outlet='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus outlet');location.href='tampil_outlet.php';</script>";
        }
    }
?>