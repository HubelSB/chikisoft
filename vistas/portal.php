<?php 
 session_start();
 if (isset($_SESSION["usuario"])) {
    include "chikipoke.php";
    include "pie.php";
 } else 
 {
    header("Location: http://localhost/construc/chikis/vistas/login.php");
 }

?>