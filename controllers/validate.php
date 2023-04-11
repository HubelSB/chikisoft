<?php 
    $usuario_nombre = 'fabrizzio';
    $usuario_clave = '123';

    $username = $_POST['username'];
    $userpwd = $_POST['userpwd'];

    if ($username==$usuario_nombre && $userpwd==$usuario_clave){
        session_start();
        $_SESSION["userlogin"] = $username;
        header('location: http://localhost/chikisoft/views/portal.php');
    }else{
        echo "Usuario incorrecto...";
        echo "<BR>";
        echo "<a href='http://localhost/chikisoft/views/login.php'>Regresar</a>";
    }
?>