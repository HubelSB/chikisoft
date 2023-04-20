<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina de Ingreso a Chikisoft</title>
    <link rel="stylesheet" href="http://localhost/chikisoft/css/estilo.css" />
  </head>
  <body>
    <div class="formulario">
      <form
        action="http://localhost/chikisoft/controladores/validar.php"
        method="post"
        class="form"
      >
        <h1>Login</h1>
        <div class="container--textbox">
          <label for=""> Usuario: </label>
          <input
            class="textbox"
            type="text"
            name="usuario"
            id="usuario"
            placeholder="juan"
          />
        </div>
        <div class="container--textbox">
          <label for="">Clave:</label>
          <input class="textbox" type="password" name="clave" id="clave" />
        </div>
        <div class="center">
          <button class="btn--login" type="submit" value="Ingresar">
            Ingresar al Sistema
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
