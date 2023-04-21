let btn_pokemon = document.getElementById("btn_pokemon");
let lista = document.getElementById("lista");
function getPokemon() {
  console.log(1);
  let url = "https://pokeapi.co/api/v2/pokemon/ditto";
  fetch(url, {
    method: "GET",
    headers: {
      contentType: "application/json",
    },
  })
    .then((pokemones) => {
      return pokemones.text();
    })
    .then((lista_poke) => {
      lista.textContent = lista_poke;
    });
  console.log(4);
}
btn_pokemon.addEventListener("click", getPokemon);