<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso a ChikiSoft</title>
    <link rel="stylesheet" href="http://localhost/chikisoft/css/style.css">
</head>
<body>
    <h1>BUSCADOR <span class="logo">POKEMON</span></h1>
    <p>Usuario: pokemon         Contraseña: pokemon</p>
    <div class='form'>
        <form action="http://localhost/chikisoft/controladores/validar.php" method="post">
            <label for="">Usuario</label>
            <input type="text" name="username" id="username">
            <label for="">Contraseña</label>
            <input type="password" name="userpwd" id="userpwd">
            <button type="submit" value='userlogin'>Ingresar</button>
        </form>
    </div>
    <?php ?>
</body>
</html>