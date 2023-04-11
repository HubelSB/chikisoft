<?php
session_start();
if (isset($_SESSION["usuario"])){
    include "vistas/menu.php";
    include "vistas/cuerpo.php";
    include "vistas/pie.php";
} else {
    echo "Eres un hacker novato ...";
}


?>