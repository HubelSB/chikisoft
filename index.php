<?php
    use controllers\mainController;
    include 'controllers/inicial.php';

    date_default_timezone_set('America/Lima');

    $mi_instancia = new mainController;
    $mi_instancia->showScreen();
?>