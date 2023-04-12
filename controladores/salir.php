<?php

session_start();
// destruyo la sesion
session_destroy();
// regreso al login
header("Location: http://localhost/profe/chikisoft/vistas/portal.php");

?>