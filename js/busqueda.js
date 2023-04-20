function esId(n) { //Comprueba si el string es un ID valido (número entero mayor que 0)
    return /^\d+$/.test(n);
};
function mayus(string){ //Devuelve el string con su primer caracter en mayuscula
    return string.charAt(0).toUpperCase()+string.slice(1);
}
function traducir(names){ //Busca y devuelve el texto en español de la api o usa el texto en ingles
    return names.find(obj=>obj.language.name=="es") || names.find(obj=>obj.language.name=="en");
}
function procesar(respuesta){ //Convierte la promesa en JSON
    if (respuesta.ok) return respuesta.json()
    else console.error("POKEerror en POKErespuesta = "+respuesta.status+" "+respuesta.statusText);
}

async function buscar(){
    document.getElementById('poketabla').classList.add("oculto");
    let consulta = document.getElementById("texto").value
    let id = esId(consulta)
    if (!id && !isNaN(+consulta)){
        console.error("ID no valida")
        return
    }
    document.getElementById('texto').disabled = true;
    document.getElementById('boton').disabled = true;
    document.getElementById('estado').innerHTML = 'Buscando Pokemon con '+(id?'Id':'Nombre')+': <span class="resaltar">'+consulta+'</span>'
    const pokemon = await fetch("https://pokeapi.co/api/v2/pokemon/"+consulta.toLowerCase()).then(procesar).catch(console.error);
    document.getElementById("sprite1").src = pokemon.sprites.front_default;
    document.getElementById("sprite2").src = pokemon.sprites.back_default;
    document.getElementById('estado').innerHTML = 'Pokemon con '+(id?'Id':'Nombre')+': <span class="resaltar">'+consulta+'</span> encontrado!'
    document.getElementById("poketitulo").innerHTML = mayus(pokemon.name)+" #"+pokemon.id;
    document.getElementById('poketabla').classList.remove("oculto");
    fetch(pokemon.species.url)
    .then(procesar)
    .then(especie => { //El objeto "species" contiene caracteristicas principales del pokemon
        for (let e of document.getElementsByTagName("th"))
            e.style.backgroundColor = especie.color.name;
        return Promise.all(pokemon.types.map(k=>fetch(k.type.url)));
    })
    .then(respuestas => Promise.all(respuestas.map(procesar)))
    .then(tipos => { //Un pokemon no tendrá más de 5 tipos asi que no creo que haya problema en llamarlos simultaneamente
        for (let i in tipos){
            document.getElementById("poketipo").innerHTML = (i==0?"":document.getElementById("poketipo").innerHTML+", ")+traducir(tipos[i].names).name;            
        }
        return
    })
    .then(async () => {
        for (let i in pokemon.moves){ //Para evitar tener que llamar a la API más de 200 veces simultaneamente
            let pokemov = '<span class="error">ERROR</span>';
            await fetch(pokemon.moves[i].move.url).then(procesar).then(movimiento => { //Esperar a que termine el fetch antes de hacer otro
                pokemov = traducir(movimiento.names).name
            }).catch(console.error);
            document.getElementById("pokemov").innerHTML = (i==0?"":document.getElementById("pokemov").innerHTML+", ")+pokemov;
        }
        document.getElementById('texto').disabled = false;
        document.getElementById('boton').disabled = false;
    })
    .catch(err => {
        console.error("POKError = "+err)
    });
};

document.getElementById("boton").addEventListener("click", buscar)
document.getElementById("formulario").addEventListener("submit", buscar)