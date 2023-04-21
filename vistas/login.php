<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="http://localhost/chikisoft/css/estilo.css">
</head>
<body>
   <div class="formulario">
      <form action="http://localhost/chikisoft/controladores/validar.php" method="post">
         <label for=""> usuario </label>
         <input type="text" name="usuario" id="usuario">
         <label for="">clave</label>
         <input type="password" name="clave" id="clave">
         <button type="submit" value="Ingresar">Ingresar al Sistema</button>
      </form>
   </div> 
</body>
</html>