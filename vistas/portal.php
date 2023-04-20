<?php
 
 session_start();
 if (isset($_SESSION["usuario"])) {
    include "currency.php";
 } else 
 {
    header("Location: http://localhost/chikisoft/vistas/login.php");
 }

?>