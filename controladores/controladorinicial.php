<?php
namespace controladores;
class controladorinicial {
    public presentarpantalla(){
        include "vistas/login.php";
        //echo "estoy presentando pamtalla";
    }
}

class presentarmenu{
    public function presentarmenu(){
        include "vistas/menu.php";
    }
}
?>