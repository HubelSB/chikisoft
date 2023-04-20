<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="http://localhost/construc/chikis/css/estilo.css">
</head >
<body class="main_form">
   
   <div class="formulario">
      <form action="http://localhost/construc/chikis/controladores/validar.php" method="post">
       <h1> Ingresa tus datos: </h1>  
       <br>
       <br>
         <label class="usu" for=""> USUARIO: </label>
         <input type="text" name="usuario" id="usuario">
         <br>
         <br>
         <label for="">CLAVE:</label>
         <input type="password" name="clave" id="clave">
         <br>
         <br>
         <button type="submit" value="Ingresar">Ingresar</button>
      </form>
   </div> 
</body>
</html>