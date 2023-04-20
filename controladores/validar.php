<?php
$usuario_sistema= "Kristell";
$clave_sistema = "pokemon123";

$var_usuario = $_POST["usuario"];
$var_clave   = $_POST["clave"];

if ($usuario_sistema === $var_usuario && $clave_sistema === $var_clave) {
    session_start();
    $_SESSION["usuario"] = $var_usuario;
    header("Location: http://localhost/chikisoft3/vistas/portal.php");
} else {
    echo "<div style='background-color: rgba(255, 255, 255, 0.8); padding: 20px; border: 2px solid #333; border-radius: 5px; margin: auto; width: 50%; text-align: center;'>";
    echo "<h1 style='color: #333;'>USUARIO INCORRECTO</h1>";
    echo "<img src='http://localhost/chikisoft3/recursos/pikatriste.jpg' alt='Pikachu triste' style='width: 200px; height: 200px;'>";
    echo "<br><br>";
    echo "<a href='http://localhost/chikisoft3/vistas/login.php' class='regresar-btn' style='background-color: #333; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;'>Regresar</a>";
    echo "</div>";
}
?>

