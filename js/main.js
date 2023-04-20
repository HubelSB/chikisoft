const searchPokemon = event => {
    event.preventDefault();
    const { value } = event.target.pokemon;
    const url = ` https://pokeapi.co/api/v2/pokemon/${value.toLowerCase()}`

    fetch(url)
        .then(response => response.json())
        .then(data => {
            let element = document.getElementById('elem')
            element.innerHTML = `
            <p>NOMBRE : ${data.name }</p>
            <p>ORDEN: ${data.order}</p>
            <p>ID: ${data.id}</p>
            <img src='${data.sprites.front_default}'/>
            `;
            console.log(data)
        })
        .catch(err => console.log(err))
}