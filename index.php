<?php
//esta directiva jala un archivo
include "controladores/controladorprincipal.php";
//
use controladores\controladorprincipal;
class principal{
    public $dato;

    public function saluda($param) {
        echo "hola <br>";
        $this->dato=$param;
        echo $this->dato;
    }
}

//$miinstancia = new principal();
//$miinstancia->saluda("alumno");
$miinstancia =new controladorprincipal();
$miinstancia ->presentapantalla();

?>
