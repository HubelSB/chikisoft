var contenido= document.querySelector('#contenido');
function traer(){
    //contenido.innerHTML = `<p>fdscftdf</p>`; asi se puede poner codigo html
    fetch('https://randomuser.me/api/')
    .then(res =>res.json())
    .then(data=>{console.log(data)
        console.log(data.results['0'])
        //console.log(data.results['0'].email)   esto saca emails randoms
        contenido.innerHTML = `
        <tr>
            <th scope="row"><img src="${data.results[0].picture.large}" width="100px"></th>
            <td>${data.results[0].name.first+' '+data.results[0].name.last}</td>
            <td>${data.results[0].email}</td>
            <td>${data.results[0].location.country}</td>
        </tr>
        `
    })
    
}
