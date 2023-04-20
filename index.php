<?php
// esta directiva jala un archivo
include "controladores/controladorprincipal.php";
// esta directiva usa el contenido especifico
 use controladores\controladorprincipal;  

 $miinstancia = new controladorprincipal();
 $miinstancia->presentarpantalla();
 
?>
