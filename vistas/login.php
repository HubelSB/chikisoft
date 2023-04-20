<!DOCTYPE html>
<html class="login" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="http://localhost/chikisoft/css/estilo.css">
</head>
<body>
   <div class="formulario">
      <p class="logo">Pokedex Chikisoft</p>
      <form class="ingreso" action="http://localhost/chikisoft/controladores/validar.php" method="post">
         <label for=""> Usuario </label>
         <input type="text" name="usuario" id="usuario">
         <label for="">Contraseña</label>
         <input type="password" name="clave" id="clave">
         <button class="boton" type="submit" value="Ingresar">Iniciar sesión</button>
      </form>
   </div> 
</body>
</html>