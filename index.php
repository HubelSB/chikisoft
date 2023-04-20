<?php
    use controllers\mainController;
    include 'controladores/inicial.php';
    date_default_timezone_set('America/Lima');

    $mi_instancia = new mainController;
    $mi_instancia->showScreen();
?>