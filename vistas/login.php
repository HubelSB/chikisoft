<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="http://localhost/chikisoft3/css/estilo.css">
</head>
<body>
   <div class="formulario">
      <h1>PokeLogin</h1>
      <form action="http://localhost/chikisoft3/controladores/validar.php" method="post">
         
         <label for=""> Usuario </label>
         <input type="text" name="usuario" id="usuario"  placeholder="Ingrese su usuario">
         <label for="">Clave</label>
         <input type="password" name="clave" id="clave"  placeholder="Ingrese su contraseña">
         <button type="submit" value="Ingresar">Ingresar al PokeSistema</button>
      </form>
   </div> 
</body>
</html>