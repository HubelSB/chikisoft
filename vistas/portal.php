<?php
 
 session_start();
 if (isset($_SESSION["usuario"])) {
    include "menu.php";
    include "cuerpo.php";
    include "pie.php";
 } else 
 {
    header("Location: http://localhost/chikisoft/vistas/login.php");
 }

?>