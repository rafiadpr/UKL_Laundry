<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password, role) value ('".$nama."', '".$username."',  '".md5($password)."', '".$role."')") or die(mysqli_error($conn));
        if($insert){
            if($_POST['action'] == 'kasir'){
                echo "<script>alert('Sukses insert User');location.href='tampil_user.php';</script>";
            }
            else if ($_POST['action'] == 'owner') {
                echo "<script>alert('Sukses insert owner');location.href='home.php';</script>";
            }
            else{
                echo "salah";
            }
        } 
        else {
            echo "<script>alert('Gagal insert user');location.href='tambah_user.php?id=".$id."';</script>";
        }
    }
?>