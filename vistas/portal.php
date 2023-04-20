<?php
 
 session_start();
 if (isset($_SESSION["usuario"])) {
    //echo "estas en : <br>";
    //echo getcwd();
    include "menu.php";
    include "cuerpo.html";
    include "pie.html";
 } else 
 {
    header("Location: http://localhost/chikisoft/vistas/login.php");
 }

?>