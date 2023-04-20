const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const pokemonContainer = document.getElementById('pokemonContainer');

searchButton.addEventListener('click', () => {
    const searchTerm = searchInput.value.toLowerCase();
    const apiUrl = `https://pokeapi.co/api/v2/pokemon/${searchTerm}`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Pokemon no encontrado');
            }
            return response.json();
        })
        .then(pokemonData => {
            pokemonContainer.innerHTML = "";
            const pokemonCard = createPokemonCard(pokemonData);
            pokemonContainer.appendChild(pokemonCard);
        })
        .catch(error => {
            console.error(error);
            pokemonContainer.innerHTML = `<p>${error.message}</p>`;
        });
});

function createPokemonCard(pokemonData) {
    const pokemonCard = document.createElement('div');
    pokemonCard.classList.add('pokemon-card');

    const pokemonImage = document.createElement('img');
    pokemonImage.classList.add('pokemon-image');
    pokemonImage.src = pokemonData.sprites.front_default;
    pokemonImage.alt = pokemonData.name;
    pokemonCard.appendChild(pokemonImage);

    const pokemonName = document.createElement('p');
    pokemonName.classList.add('pokemon-name');
    pokemonName.innerText = pokemonData.name;
    pokemonCard.appendChild(pokemonName);

    const pokemonType = document.createElement('p');
    pokemonType.classList.add('pokemon-type');
    pokemonType.innerText = `Tipo: ${pokemonData.types.map(type => type.type.name).join(', ')}`;
    pokemonCard.appendChild(pokemonType);

    const pokemonAbilities = document.createElement('p');
    pokemonAbilities.classList.add('pokemon-abilities');
    pokemonAbilities.innerText = `Habilidades: ${pokemonData.abilities.map(ability => ability.ability.name).join(', ')}`;
    pokemonCard.appendChild(pokemonAbilities);

    const pokemonStats = document.createElement('div');
    pokemonStats.classList.add('pokemon-stats');

    const statLabels = ['HP', 'Attack', 'Defense', 'Special Attack', 'Special Defense', 'Speed'];
    const statValues = [pokemonData.stats[0].base_stat, pokemonData.stats[1].base_stat, pokemonData.stats[2].base_stat, pokemonData.stats[3].base_stat, pokemonData.stats[4].base_stat, pokemonData.stats[5].base_stat];

    for (let i = 0; i < statLabels.length; i++) {
        const statLabel = document.createElement('p');
        statLabel.classList.add('pokemon-stat-label');
        statLabel.innerText = statLabels[i];
        pokemonStats.appendChild(statLabel);

        const statValue = document.createElement('p');
        statValue.classList.add('pokemon-stat-value');
        statValue.innerText = statValues[i];
        pokemonStats.appendChild(statValue);
    }

    pokemonCard.appendChild(pokemonStats);

    return pokemonCard;
}