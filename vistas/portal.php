<?php
 session_start();
 if (isset($_SESSION["usuario"]) && isset($_SESSION["clave"])) {
   //echo "estas en : <br>";
   //echo getcwd();
   include "menu.php";
   include "cuerpo.php";
   $limite = 1009;
   $clave = $_SESSION["clave"];
   if(intval($clave) > $limite){
      $clave = $clave[0].$clave[1].$clave[2];
   }
   $url = "https://pokeapi.co/api/v2/pokemon/$clave/";
   echo "<div id=pokemon_container></div>";
   echo ("
        <script>
            fetch('$url')
            .then(response => response.json() )
            .then(data => {
                let pokemon = document.getElementById('pokemon_container')
                pokemon.innerHTML = `<p>su pokemon es ` + data.name + `</p>
                <img src='` + data.sprites.front_default + `'/>`;
            })
            .catch(err => console.log(err))
        </script>
        ");
   include "pie.php";
 } else 
 {
    header("Location: http://localhost/chikisoft/vistas/login.php");
 }

?>