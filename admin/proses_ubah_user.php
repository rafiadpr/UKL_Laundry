<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
        include "../koneksi.php";
            $update=mysqli_query($conn,"update member set nama='".$nama ."', username='".$username ."', password='".md5($password)."', role='".$role."' where id = '".$id."' ") or die(mysqli_error($conn));
            mysqli_error($conn);
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_user.php';</script>";
            } 
            else {
                echo "<script>alert('Gagal update member');location.href='ubah_user.php?id=".$id."';</script>";
            }
        }
?>