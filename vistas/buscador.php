<body>
    <div class="busqueda">
        <form action="javascript:void(0)" id="formulario" name="formulario">
            <input type="text" placeholder="Nombre o Id de un Pokemon" name="texto" id="texto">
            <input type="button" value="Buscar" name="boton" id="boton">
            <p name="estado" id="estado"></p>
        </form>
    </div>
    <div>
        <div class="poketabla oculto" id="poketabla" name="poketabla">
            <table>
                <thead>
                    <tr>
                        <th colspan="4" id="poketitulo">Nombre #ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Sprites</th>
                        <td><img id="sprite1"></img><img id="sprite2"></img></td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo</th>
                        <td id="poketipo"></td>
                    </tr>
                    <tr>
                        <th scope="row">Movimientos</th>
                        <td id="pokemov"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="http://localhost/chikisoft/js/busqueda.js"></script>    
</body>