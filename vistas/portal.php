<?php
    session_start();
    if (isset($_SESSION['userlogin'])){
        include 'header.php';
        include 'buscador.php';
        include 'footer.php';
    }else{
        header('location: http://localhost/chikisoft');
    }
?>