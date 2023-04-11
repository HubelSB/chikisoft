<?php


include "controladores/controladorinicial.php";
use controladores\controladorinicial;

//date_default_timezone_set('america');

$paginaprincipal=new controladorinicial();
$paginaprincipal->presentarpantalla();

?>