<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/chikisoft/css/currency.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container--convert">
      <p class="crc--result" id="resultCRC">---</p>
      <div>
        <span>from:</span>
        <select class="crc--select" id="crcFrom"></select>
      </div>
      <div>
        <span>to:</span>
        <select class="crc--select" id="crcTo"></select>
      </div>
      <input class="crc--cantidad" type="text" id="cantidadCRC" />
      <button class="btn--calculate" id="calcularCRC" type="button">
        <span>calcular</span>
    </button>
    <div id="containerLoading" class="container--loading">
        
    </div>
</div>
    <script src="http://localhost/chikisoft/js/currency.js"></script>
  </body>
</html>
