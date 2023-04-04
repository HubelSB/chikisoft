<?php
include 'controladores/controladorinicial.php'
use controladores/controladorinicial

date_default_timezone_set('America');

$paginaprincipal = new controladorinicial();
$paginaprincipal -> cargaportal();
// class principal {
//     public $dato = "hola";

//     public function saluda() {
//         echo $dato;
//     }
// }

?>
