<?php
 
 session_start();
 if (isset($_SESSION["usuario"])) {

    include "pokedex.php";
    
    include "pie.php";
 } else 
 {
    header("Location: http://localhost/chikisoft3/vistas/login.php");
 }

?>