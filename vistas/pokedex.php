
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokedex</title>
  <link rel="stylesheet" href="../CSS/pokeapi.css">
</head>
<body>
<header>
      <img src="../recursos/Pokelogo.png" alt="Descripción de la imagen">
    </header>
  <div class="container">
    <h1>Consultor de Pokemones</h1>
    <form class ="form">
      <label for="limit">Limit(Cantidad):</label>
      <input type="text" name="limit" id="limit" value="20" placeholder="Ingrese la cantidad">
      <br>
      <label for="offset">Offset:</label>
      <input type="text" name="offset" id="offset" value="0" placeholder="Ingrese el offset">
      <br>
      <button id="get-pokemon-btn" type="button">Consultar Pokemon</button>
    </form>
    <hr>
    <div id="pokemon-container" class="pokemon-container"></div>
  </div>
  <script src="../JS/api.js"></script>
</body>
</html>

