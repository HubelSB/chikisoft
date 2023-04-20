<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Pokedex.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        Bienvenidos la Pokedex
        <a href="http://localhost/chikisoft/controladores/salir.php">Salir</a>
    </header>
    <main class="main">
        <div>¿cuantos pokemones quieres mostrar?</div>
        <div>
            <input id="numpoke"type="text">
            <input id="buscar" type="button" value="Buscar">
        </div>
		<div id="pokemon-list"></div>
	</main>

    <script src="../JS/api.js"></script>
</body>
</html>