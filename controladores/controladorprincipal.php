<?php
namespace controladores;
class controladorprincipal {
    public function presentapantalla(){
        include "vistas/login.php";
        //echo "estoy presentando pantalla";
    }
}

class presentarmenu{
    public function presentarmenu(){
        include "vistas/menu.php";
    }
}

?>