<?php

session_start();
if (isset($_SESSION["usuario"])){
    echo "estas en el sistema";

}else
{
    echo "eres hacker novato";
}
?>