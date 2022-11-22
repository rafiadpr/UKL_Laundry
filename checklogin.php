<?php
    session_start();
    if($_SESSION['koneksi.php']){
        header('location: index.php');
    }
?>