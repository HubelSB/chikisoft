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
   <h1>Chikisoft</h1>
   <p>El mejor lugar para encontrar personas </p>



   <div class="formulario">
      <form action="http://localhost/chikisoft/controladores/validar.php" method="post">
         <div class="clave">
            <label for=""> USUARIO: </label>
         </div>
         <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
         <br>
         <div class="clave">
            <label for="">CLAVE:</label>
         </div>
         <input type="password" name="clave" id="clave" placeholder="Ingrese su clave" >
         <br>
         <div class="ingresar">
            <button type="submit" value="Ingresar">Ingresar al Sistema</button>
         </div>
      </form>
   </div> 
</body>
</html>