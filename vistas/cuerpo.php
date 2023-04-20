<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>App del Clima</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/body/style.css" />
  </head>
<body>
    <div class="container my-5">
    <h1 class="text-center title">Consulta del Clima</h1>
    <form class="search-loaction">
        <input
        type="text"
        name="city"
        placeholder="Ingrese la Ciudad"
        autocomplete="off"
        class="form-control text-muted form-rounded p-4 shadow-sm"
        />
    </form>

    <div class="card rounded my-3 shadow-lg d-none back-card">
        <div class="card-top text-center">
        <div class="city-name my-3">
            <p>Abuja</p>
            <span>...</span>
        </div>
        <img src="../img/body/night_image.svg" alt="" class="card-img-top time" />
        </div>

        <div class="card-body">
        <div class="card-mid row">
            <div class="col-8 text-center temp">
            <span>30&deg;C</span>
            </div>
            <div class="col-4 condition-temp">
            <p class="condition">Tormenta Electrica</p>
            <p class="high">30&deg;C</p>
            <p class="low">27&deg;C</p>
            </div>
        </div>

        <div class="icon-container card shadow mx-auto">
            <img src="../img/body/cloud.svg" alt="" />
        </div>
        <div class="card-bottom px-5 py-4 row">
            <div class="col text-center">
            <p>30&deg;C</p>
            <span>Sensacion Termica</span>
            </div>
            <div class="col text-center">
            <p>55%</p>
            <span>Humedad</span>
            </div>
        </div>
        </div>
    </div>
    </div>

    <script src="../js/request.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>
