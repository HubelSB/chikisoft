const pokemonContainer = document.querySelector('.contenedorPokemon')

function Pokemon(id) {
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res => res.json())
    .then(data => {
        crearPokemon(data);
    });
}

function pedidoPokemons(cantidad) {
    for (let i = 1; i <=cantidad ; i++) {
        Pokemon(i);
    }
}

function crearPokemon(pokemon) {
    const cuadro = document.createElement('div');
    cuadro.classList.add('cuadroPokemon');

    const contenedorImagen = document.createElement('div');
    contenedorImagen.classList.add('contenedorImagenPokemon');

    const imagen = document.createElement('img');
    imagen.src = pokemon.sprites.front_default;

    contenedorImagen.appendChild(imagen);

    const numero = document.createElement('p');
    numero.textContent = `#${pokemon.id.toString().padStart(3, 0)}`;

    const nombre = document.createElement('p');
    nombre.classList.add('nombrePokemon');
    nombre.textContent = pokemon.name

    cuadro.appendChild(contenedorImagen);
    cuadro.appendChild(numero);
    cuadro.appendChild(nombre);

    pokemonContainer.appendChild(cuadro);
}

pedidoPokemons(12);