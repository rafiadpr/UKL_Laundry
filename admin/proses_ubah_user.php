<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
        include "../koneksi.php";
            $update=mysqli_query($conn,"update user set nama='".$nama ."', username='".$username ."', password='".md5($password)."', role='".$role."' where id = '".$id."' ") or die(mysqli_error($conn));
            mysqli_error($conn);
            if($update){
                if($_POST['action'] == 'kasir'){
                    echo "<script>alert('Sukses update User');location.href='tampil_user.php';</script>";
                }
                else if ($_POST['action'] == 'owner') {
                    echo "<script>alert('Sukses update owner');location.href='home.php';</script>";
                }
                else{
                    echo "salah";
                }
                
            } 
            else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=".$id."';</script>";
            }
        }
?>