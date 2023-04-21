<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="tile-login" >Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="http://localhost/chikisoft/css/estilo.css">
</head>
<body>
   <div class="login-container">
      <h2>Iniciar sesión</h2>
      <form class="frm-form" action="http://localhost/chikisoft/controladores/validar.php" method="post">
         <label class="frm-lbl" for=""> usuario </label>
         <input class="frm-inpt" type="text" name="usuario" id="usuario">
         <label class="frm-lbl" for="">clave</label>
         <input class="frm-inpt" type="password" name="clave" id="clave">
         <button class="frm-btn" type="submit" value="Ingresar">Ingresar al Sistema</button>
      </form>
   </div> 
</body>
</html>