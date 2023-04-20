<link rel="stylesheet" href="../css/main.css">

<body>
  <main class="container">
    <h1 class="title">Random Cat Picture</h1>
    <span id="error"></span>
    <section class ="section">
      <figure class="container-img">
        <article class="cat-randoms">
          <img id="img1" width="150" alt="Foto gatito aleatorio">
          <button id="btn1">
            Guardar michi en favoritos
          </button>
        </article>

        <article class="cat-randoms">
          <img id="img2" width="150" alt="Foto gatito aleatorio">
          <button id="btn2">
            Guardar michi en favoritos
          </button>
        </article>
      </figure>

      <button class="load" onclick="loadRandomMichis()">Recargar</button>

    </section>
    <section id="uploadingMichi">
      <h2> Sube la foto de tu michi</h2>

      <form id="uploadingForm">
        <input id="file" type="file" name="file">
        <button type="button" onclick="uploadMichiPhoto()">Subir foto de michi</button>
      </form>

    </section>

    <section id="favoriteMichis">
      <h2>Michis favoritos</h2>

      <article>
        <img id="img1" width="150" alt="Foto gatito aleatorio">
        <button>Sacar al michi de favoritos</button>
      </article>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </main>
  <script src="../JS/main.js"></script>
</body>