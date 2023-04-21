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
    pokenombre.textContent=data.name;
    pokeorder.textContent=data.order;
    pokeimg.innerHTML=`<img src="${data.sprites.other.dream_world.front_default}"`
    pokehp.textContent=data.stats[0].base_stat;
    pokexp.textContent=data.base_experience;
}

getPokemon(25);