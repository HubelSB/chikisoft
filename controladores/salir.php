<?php

session_start();
// destruyo la sesion
session_destroy();
// regreso al login
header("Location: http://localhost/2DO-PARCIAL/chikisoft/vistas/portal.php");

?>

