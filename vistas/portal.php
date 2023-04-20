<?php
 
 session_start();
 if (isset($_SESSION["usuario"])) {
    //echo "estas en : <br>";
    //echo getcwd();
    include "menu.php";
    include "cuerpo.php";
    include "pie.php";
 } else 
 {
    header("Location: http://localhost/chikisoft/vistas/login.php");
 }
   include 'poke.html'

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estile.css">
   
</head>
<body>
   <div id="nombre">Nombre</div>
   <div id ="order">Order</div>
   <script src="app.js"></script>
</body>
</html> -->