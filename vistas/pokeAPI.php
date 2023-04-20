<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta con la PokeAPI</title>
    <link rel="stylesheet" href="../vistas/pokeAPI">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5VHJJbkViYDoWhs_55k-FegxBaJBw1dt85FtcYCU&s">
</head>
<body>
    <h1><marquee>Pokemon Lista</marquee></h1>
    <table>
      <thead>
        <tr>
          <th>Imagen</th>
          <th>Nombre</th>
          <th>tipo</th>
          <th>Fuerza</th>
        </tr>
      </thead>
      <tbody id="pokemonTable">
      </tbody>
    </table>
    <script src="../JS/pokeapp.js"></script>
  </body>
</html>