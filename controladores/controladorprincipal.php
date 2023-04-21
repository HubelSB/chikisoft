<?php 
namespace controladores;
class controladorprincipal {
    public function presentarpantalla(){
        include "vistas/login.php";
        //echo "estos presentando pantalla";
    }
}
class presentarmenu{
    public function presentarmenu(){
        include "vistas/menu.php";
    }
}
?>