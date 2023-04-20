<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de ingreso a Chikisoft</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="css/login/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&isplay=swap"
  rel="stylesheet"
  />
</head>
<body>
  <div class="general-container">
    <div class="header-wrapper">
      <header class="header">
        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="nav-link active" href="#"> Nostros </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" focus> Inicie Sesion </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Registrese </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Contactenos </a>
            </li>
          </ul>
        </nav>
        <div class="header-logo">
          <a class="logo-link" href="#">
            <img class="logo-img" src="img/login/logo.svg" alt="Mi Empresa SAC logo" />
            <h2 class="logo-text">Consulta del Clima</h2>
          </a>
        </div>
      </header>
    </div>
    <div class="main-logo">
      <div class="container">
        <div class="head-form">
            <div class="icono-container">
                <div class="icono-title">
                  <img class="logo-img" src="img/login/logo.svg" alt="Mi Empresa SAC logo" />
                </div>
            </div>
            <div class="title">
                <h5 class="main-title">Ingreso al Sistema</h1>
            </div>
        </div>
        <div class="body-form">
            <form action="http://localhost/chikisoft/controladores/validar.php" method="post" class="form-login">
              <div class="inputbox">
                <input type="text" name="usuario" id="usuario" required>
                <label for="">Usuario</label>
              </div>
              <div class="inputbox">
                <input type="password" name="clave" id="clave" required>
                <label for="">Password</label>
              </div>
              <div class="captcha-code">
                <img class="captcha-code" src="img/login/images.png" alt="captcha">
              </div>
              <div class="inputbox">
                <input type="text">
                <label for="">Codigo Validacion</label>
              </div>
              <button type="submit" value="ingresar" class="btn-login">Ingresar</button>
              <div class="forget">
                <label for=""><input type="checkbox">Recuerdame <a href="#">Olvidar Contraseña</a></label>
              </div>
              <div class="register">
                <p>¿No tienes cuenta?<a href="#">Registrate aqui</a></p>
              </div>
            </form>
        </div>
    </div>
  </div>
</body>
</html>
