<?php
// esto lo defino de forma estatica
// en clase lo debemos obtener de SQLLite
$usuario_sistema= "alumno";
$clave_sistema = "2023";

$var_usuario = $_POST["usuario"];
$var_clave   = $_POST["clave"];

if ($usuario_sistema === $var_usuario
&& $clave_sistema === $var_clave) {

    session_start();
    $_SESSION["usuario"] = $var_usuario;

    header("Location: http://localhost/chikisoft/vistas/portal.php");
} else {
    echo "Usuario incorrecto...";
    echo "<BR>";
    echo "<a href='http://localhost/chikisoft/vistas/login.php'>Regresar</a>";
}
