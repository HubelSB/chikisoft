<?php
// esto lo defino de forma estatica
// en clase lo debemos obtener de SQLLite
$usuario_sistema= "maria";
$clave_sistema = "1305";

$var_usuario = $_POST["usuario"];
$var_clave   = $_POST["clave"];

if ($usuario_sistema === $var_usuario
&& $clave_sistema === $var_clave) {

    session_start();
    $_SESSION["usuario"] = $var_usuario;

    header("Location: http://localhost/construc/chikis/vistas/portal.php");
} else {
    echo "<div style='background-color: rgba(255, 255, 255, 0.8); padding: 20px; border: 1px solid #333; border-radius: 5px; margin: auto; width: 50%; text-align: center;'>";
    echo "<p style='color: #333;'>USUARIO INCORRECTO</p>";
    echo "<BR>";
    echo "<a href='http://localhost/construc/chikis/vistas/login.php'>Regresar</a>";
    echo "</div>";
}
