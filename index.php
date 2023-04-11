<?php
// Esta directiva jala un archivo
include 'controladores/controladorprincipal.php';
// Esta directiva usa el contenido especifico
use controladores\controladorprincipal;

$miinstancia = new controladorprincipal();
$miinstancia->presentarpantalla();
?>
