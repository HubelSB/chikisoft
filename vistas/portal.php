<?php
session_start();
if (isset($_SESSION["usuario"])){
    echo "estas en el portal";
}else
echo "eres un novato";
?>