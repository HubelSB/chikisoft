<?php
 
 session_start();
 if (isset($_SESSION["usuario"])) {
    //echo "estas en : <br>";
    //echo getcwd();
    //include "pokedex.php";
    include "cuerpo.php";
    include "menu.php";
    include "pokedex.php";
    include "pie.php";
 } else 
 {
    header("Location: http://localhost/chikisoft/vistas/login.php");
 }

?>