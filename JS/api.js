const apiUrl = "https://pokeapi.co/api/v2/pokemon?limit=20";

const pokemonList = document.getElementById("pokemon-list");
async function getPokemon(cantidad) {
    const apiUrl = "https://pokeapi.co/api/v2/pokemon?limit="+cantidad;
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

	pokemonCard.style.order = data.id;

	const pokemonImage = document.createElement("img");
    pokemonImage.classList.add("img");
	pokemonImage.src = data.sprites.front_default;
	pokemonImage.alt = `Picture of ${pokemon.name}`;

	const pokemonName = document.createElement("h2");
    pokemonName.classList.add("h2");
	pokemonName.textContent = pokemon.name;

	const pokemonType = document.createElement("p");
    pokemonType.classList.add("p");
	pokemonType.textContent = `Type: ${data.types.map(type => type.type.name).join(", ")}`;

	pokemonCard.appendChild(pokemonImage);
	pokemonCard.appendChild(pokemonName);
	pokemonCard.appendChild(pokemonType);

	pokemonList.appendChild(pokemonCard);
}

const buscador= document.getElementById("buscar");
buscador.addEventListener("click", buscar);

function buscar(){
    const cantidad = document.getElementById("numpoke").value;
    document.getElementById("pokemon-list").innerHTML="";
    getPokemon(cantidad);
    
}



