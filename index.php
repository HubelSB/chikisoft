<!-- <?php
// esta directiva jala un archivo
include "controladores/controladorprincipal.php";
// esta directiva usa el contenido especifico
 use controladores\controladorprincipal;  

 $miinstancia = new controladorprincipal();
 $miinstancia->presentarpantalla();
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/dd2ef18787.js" crossorigin="anonymous"></script>
    <title>InicioSecion</title>
</head>

<body>
    <div class="padre">
        <header class="header">
            <div class="menu margen-interno">
                <div class="logo">
                    <a href="index.html"><img src="pngwing.com.png" alt="" width=200"></a>
                    
                </div>
                <div class="nav">
                    <a href="index.php"><i class="fa-solid fa-house"></i><span class="off">Inicio</span></a>
                    <a href="index.php"><i class="fa-solid fa-user"></i><span class="off">Nosotros</span></a>
                    <a href="index.php"><i class="fa-solid fa-message"></i><span class="off">Servicios</span></a>
                    <a href="index.php"><i class="fa-solid fa-file-lines"></i><span class="off">Noticias</span></a>
                    <a href="index.js"><i class="fa-solid fa-house"></i><span class="off">Hospedaje</span></a>
                    <a href="https://twitter.com/FCBarcelona_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-solid fa-envelope"></i><span class="off">Contacto</span></a>

                </div>
                <div class="social">
                    <div>
                        <a href="https://www.facebook.com/fcbarcelona"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                    <div>
                        <a href="https://twitter.com/FCBarcelona_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="texto-principal margen-interno icon-container center">
                <h1>
                    BUSCA HOTELES
                </h1>
                <h1>
                    Iniciar sesion:
                </h1>
                <form>
                    <label for="email">Usuario:</label>
                    <input type="email" id="email" name="email" placeholder="Escribe tu Usuario">

                    <label for="Contraseña">Contraseña:</label>
                    <input type="password" id="Contraseña" name="Contraseña" placeholder="Escribe tu Contraseña">
                    <button class="btn blue" id="hotel"> Acceder</button>
                    <div class="section">
                        <ul id="resultado"></ul>
                    </div>
                    <!-- <a href="index.js"><input type="button" value="Acceder"></a> -->
                    

                </form>
                <h1>Puede iniciar con:</h1>
                <a href="https://accounts.google.com/"><i class="fa-brands fa-google"></i></a>
                <a href="https://es-la.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <!-- <a href="respuesta" id="feriado"></a> -->

            </div>

        </header>
        
        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#"><br>Desarrollado por Jose Aquino ツ</a>
            </nav>
        </footer>
    </div>
    <script src="index.js"></script>

</body>

</html>