<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
        include "../koneksi.php";
            $update=mysqli_query($conn,"update member set nama='".$nama ."', alamat='".$alamat ."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));
            mysqli_error($conn);
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_user.php';</script>";
            } 
            else {
                echo "<script>alert('Gagal update member');location.href='ubah_user.php?id_member=".$id_member."';</script>";
            }
        }
?>