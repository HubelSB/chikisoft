<?php
    session_start();
    if (isset($_SESSION['userlogin'])){
        include 'body.php';
        include 'menu.php';
        include 'footer.php';
    }else{
        header('location: http://localhost/chikisoft');
    }
?>