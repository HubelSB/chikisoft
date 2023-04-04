<?php
    include 'controllers/inicial.php';
    use controllers\inicial;
    date_default_timezone_set('America/Lima');

    $pag_principal = new controllerinicial();
    $pag_principal->cargarportal();
?>
<!-- <?php 
    class principal{
        public $dato = "hola";
        public function saluda(){
            echo $this->dato;
            echo " mundo!";
        }
    }
    $mi_instancia = new principal();
    $mi_instancia->saluda();    
?> -->