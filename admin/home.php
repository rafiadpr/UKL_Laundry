<?php
    include 'navbar.php';
    include 'header.php';
    include 'footer.php';
    if($_SESSION['status_login']!=true){
        header('location: ../index.php');
    }
?>