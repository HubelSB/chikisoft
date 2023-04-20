const apiUrl = "https://pokeapi.co/api/v2/pokemon?limit=30";

const pokemonList = document.getElementById("pokemon-list");
async function getPokemon() {
	const response = await fetch(apiUrl);
	const data = await response.json();
	const pokemonData = data.results;


	pokemonData.forEach(pokemon => {

		getPokemonDetails(pokemon);
	});
}

async function getPokemonDetails(pokemon) {
	const response = await fetch(pokemon.url);
	const data = await response.json();

	const pokemonCard = document.createElement("div");
	pokemonCard.classList.add("pokemon-card");
	//pokemonCard.style.order = data.id;

	//pokemonCard.style.order = data.id;

	pokemonCard.setAttribute("data-order", data.id);
	pokemonCard.style.order = data.id;
	
	//console.log(lista[0].rules[8]);
	

	const pokemonImage = document.createElement("img");
	pokemonImage.src = data.sprites.front_default;
	pokemonImage.alt = `Picture of ${pokemon.name}`;

	const pokemonName = document.createElement("h2");
	pokemonName.textContent = pokemon.name;

	const pokemonType = document.createElement("p");
	pokemonType.textContent = `Type: ${data.types.map(type => type.type.name).join(", ")}`;

	pokemonCard.appendChild(pokemonImage);
	pokemonCard.appendChild(pokemonName);
	pokemonCard.appendChild(pokemonType);

	pokemonList.appendChild(pokemonCard);
}



getPokemon();