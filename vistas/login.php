<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="C:\laragon\www\chikisoft\css/login.css">
</head>
<body>
    <div class="formulario">
        <form action="htpps://localhost/chikisoft/controladores/validar.php">
            <label for=""> Usuario 
                <input type="text" name="usuario" id="usuario">
            </label>
            <label for=""> Contraseña 
                <input type="password" name="clave" id="clave">
            </label>
            <button type="submit" value="Ingresar">Ingresar al sistema</button>
        </form>
    </div>
</body>
</html>