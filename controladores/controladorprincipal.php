<?php
    namespace controladores;//en un futuro cuando llames a controladores y este puede acceder a las clases por un "."
    class controladorprincipal {
        public function presentarpantalla(){
            include "vistas/login.php";
            //echo "estoy presentando pantalla";
        }   
    }
    class presentarmenu {
        public function presentarmenu(){
            include "vistas/menu.php";
        }
    }
?>