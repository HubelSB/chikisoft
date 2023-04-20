<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ingreso para Consultar Pokemones</title>
    <link rel="stylesheet" href="http://localhost/chikisoft/css/estilo.css">
</head>
<body>
   <div class="formulario">
      <form action="http://localhost/chikisoft/controladores/validar.php" method="post">
         <label for=""> USUARIO (obligatorio) </label>
         <input type="text" name="usuario" id="USUARIOS">
         <label for=""> CONTRASEÑA (obligatorio) </label>
         <input type="password" name="clave" id="CLAVE">
         <button type="submit" value="Ingresar">Ingresar al Sistema de Consultas Pokemon</button>
      </form>
   </div> 
</body>
</html>