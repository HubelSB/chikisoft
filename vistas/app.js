const pokenombre=document.querySelector("#nombre");
const pokeorder=document.querySelector("#order");
const pokeimg=document.getElementById("img");
const pokehp=document.querySelector("#hp")
const pokexp=document.querySelector("#exp")

const getPokemon=function(id){
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res=>res.json())
    .then(data=>pokemon(data))

}

const pokemon=function(data){
    
    pokenombre.textContent="Nombre : " + data.name;
    pokeorder.textContent="ORDEN : "+data.order;
    pokeimg.innerHTML="Imagen " + `<img src="${data.sprites.other.dream_world.front_default}"` //imagen del pokemon
    pokehp.textContent="HP : "+data.stats[0].base_stat;
    pokexp.textContent="EXP : " + data.base_experience;
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min);
  }

getPokemon(getRandomInt(1,1008));