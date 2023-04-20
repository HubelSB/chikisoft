const pokemonContainer = document.getElementById('pokemon-container');
const getPokemonBtn = document.getElementById('get-pokemon-btn');
getPokemonBtn.addEventListener('click', () => {
  const limit = document.getElementById('limit').value;
  const offset = document.getElementById('offset').value;
  pokemonContainer.innerHTML = '';
  fetch(`https://pokeapi.co/api/v2/pokemon?limit=${limit}&offset=${offset}`)
    .then(response => response.json())
    .then(data => {
      data.results.forEach(pokemon => {
        fetch(pokemon.url)
          .then(response => response.json())
          .then(data => {
            const name = data.name;
            const sprite = data.sprites.other['official-artwork'].front_default;
            const types = data.types.map(type => type.type.name).join(', ');
            const stats = data.stats.map(stat => `${stat.stat.name}: ${stat.base_stat}`).join('<br>');
            const abilities = data.abilities.map(ability => ability.ability.name).join(', ');
            pokemonContainer.innerHTML += `
              <div class="pokemon-card">
                <img class="pokemon-image" src="${sprite}" alt="${name}">
                <h2 class="pokemon-name">${name}</h2>
                <p class="pokemon-type">Type: ${types}</p>
                <p class="pokemon-stats">Stats:<br>${stats}</p>
                <p class="pokemon-abilities">Abilities: ${abilities}</p>
              </div>
            `;
          });
      });
    })
    .catch(error => {
      console.error(error);
      pokemonContainer.innerHTML = '<p>Ocurrió un error intentalo más tarde.</p>';
    });
});
function getPokeClick() {
    let limit = document.getElementById("limit").value;
    let offset = document.getElementById("offset").value;
    getPokemon(limit, offset);
  }
  let btnGetPoke = document.getElementById("get--poke");
  btnGetPoke.addEventListener("click", getPokeClick);
  
 