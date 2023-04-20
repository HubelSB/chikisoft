const apiUrl = `https://pokeapi.co/api/v2/pokemon?limit=20`;

fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    const pokemonTable = document.getElementById('pokemonTable');
    data.results.forEach(pokemon => {
      fetch(pokemon.url)
        .then(response => response.json())
        .then(pokemonData => {
          const row = document.createElement('tr');
          const imageCell = document.createElement('td');
          const image = document.createElement('img');
          image.src = pokemonData.sprites.front_default;
          image.alt = pokemonData.name;
          imageCell.appendChild(image);
          const nameCell = document.createElement('td');
          nameCell.innerText = pokemonData.name;
          const powerCell = document.createElement('td');
          powerCell.innerText = pokemonData.base_experience;
          const typeCell = document.createElement('td');
          const types = pokemonData.types.map(type => type.type.name).join('');
          typeCell.innerText = types;
          row.appendChild(imageCell);
          row.appendChild(nameCell);
          row.appendChild(typeCell);
          row.appendChild(powerCell);
          pokemonTable.appendChild(row);
        });
    });
  })
  .catch(error => {
    console.error(error);
  });
