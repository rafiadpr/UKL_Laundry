<?php
    session_start();
    if($_SESSION['koneksi.php']){
        header('location: db_tokoonline/index.php');
    }
?>