<div class="container">
    <main>
        <!-- HTML Formulario -->
        <div class="search-container" id="search-container">
            <input id="search-input" name="search-input" type="text" placeholder="Buscar..." class="search-input">
            <button type="submit" class="search-button">Buscar Película</button>
        </div>
        <div id="rp-search" class="rp-search">
        </div>
        <!-- Contenedor para los resultados de búsqueda -->
        <div class="container-peliculas" id="container-peliculas">
        </div>
        <!-- Contenedor para los botones de paginación -->
        <div class="pagination-container" id="pagination-container">
        </div>
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    var X_RapidAPI_Key = "257465541emsh93a7df7003fa4bbp14d043jsn024fbefaafde";
    var X_RapidAPI_Host = "movie-database-alternative.p.rapidapi.com";
    openPage();
    
    // url para peticion al api
  function getUrl(search,page){
    var urlBase = "https://movie-database-alternative.p.rapidapi.com";
    var s = search;
    var r = "jason";
    var page = page;
    var type = "";
    var y = "";
    var urlCompleta = urlBase + "?s=" + encodeURIComponent(s) + "&r=" + encodeURIComponent(r)+ "&page=" + encodeURIComponent(page);
    return urlCompleta;
  }
      // Buscador
    $(".search-button").click(function() {
        var searchTerm = $(".search-input").val();
        // Realiza la búsqueda aquí
        showResults(searchTerm,$('.pagination-link .active').text());
    });

    // Función para mostrar los resultados de búsqueda
    function showResults(search,page) {
        if(page==''){
            page='1';
        }
        const settings = {
            "async": true,
            "crossDomain": true,
            "url": getUrl(search,page),
            "method": "GET",
            "headers": {
                "X-RapidAPI-Key": X_RapidAPI_Key,
                "X-RapidAPI-Host": X_RapidAPI_Host
            }
        };
        $.ajax(settings).done(function (response) {
            if(response.Response=='True'){
                console.log(response);
                $('#rp-search').empty();
                $('#rp-search').append('<h4 >Resultado de: '+$(".search-input").val()+'</h4> <h5>mostrando '+response.Search.length+' de '+response.totalResults+'</h5>');
                showPagination(response.totalResults,page);
                // Vaciar contenedor de resultados
                $('#container-peliculas').empty();
                // Mostrar resultados
                peliculas = response.Search;
                $.each(peliculas, function(index, pelicula){
                    $('#container-peliculas').append('<section><img src="'+pelicula.Poster+
                                                '" alt="'+pelicula.Title+
                                                '"><h2>'+pelicula.Title+
                                                '</h2><p>Año : '+pelicula.Year+
                                                '</p><p>Tipo: '+pelicula.Type+
                                                '</p><button>Leer más</button></section>');
                });
            }else{
                $('#container-peliculas').empty();
                $('#pagination-container').empty();
                $('#rp-search').empty();
                $('#rp-search').append('<h4 >No se encontró resultados</h4>');
            }
        });

    }

    function showPagination(totalResults,page){
        // Vaciar contenedor de paginación
            $('#pagination-container').empty();
            // Calcular número total de páginas
        var totalPages = Math.ceil(totalResults / 10);
        // Agregar botones de paginación
        for (var i = 1; i <= totalPages; i++) {
            if(i==parseInt(page)){
                $('#pagination-container').append('<a href="http://localhost/chikisoft/vistas/portal.php?search='+encodeURIComponent($(".search-input").val())+'&page='+i+'" class="pagination-link active">' + i + '</a>');
            }else{
                $('#pagination-container').append('<a href="http://localhost/chikisoft/vistas/portal.php?search='+encodeURIComponent($(".search-input").val())+'&page='+i+'" class="pagination-link">' + i + '</a>');
            }
        }
    }
      // Paginación
    $(".pagination-link").click(function() {
        $(".pagination-link").removeClass("active");
        $(this).addClass("active");
        // Cambia la página aquí
        showResults($(".search-input").val(),$(this).text());
    });

    function openPage() {
        var parametrosGET = new URLSearchParams(window.location.search);
        var pg = parametrosGET.get('search');
        if (parametrosGET.get('search')) {
            // Actualiza el valor del campo de búsqueda con el valor del GET
            $('#search-input').val(parametrosGET.get('search'));
            
            // Realiza la búsqueda automáticamente
            showResults($(".search-input").val(),parametrosGET.get("page"));
        }

    }
});
</script>
