// const axios = require("axios");

// const options = {
//   method: 'GET',
//   url: 'https://hotels4.p.rapidapi.com/v2/get-meta-data',
//   headers: {
//     'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
//     'X-RapidAPI-Host': 'hotels4.p.rapidapi.com'
//   }
// };

// axios.request(options).then(function (response) {
// 	console.log(response.data);
// }).catch(function (error) {
// 	console.error(error);
// });
document.querySelector('#hotel').addEventListener('click', function(){
  obtenerDatos(valor);
});
function obtenerDatos(valor) {
  let url = 'https://hotels4.p.rapidapi.com/v2/get-meta-data';
  const api=new XMLHttpRequest();
  api.open('GET', url, true);
  api.send();

  api.onreadystatechange = function(){

    if(this.status === 200 && this.readyState === 4){
      let datos = JSON.parse(this.responseText);
      console.log(datos.serie);
      let resultado = document.querySelector('#resultado');
      resultado.innerHTML = '';

      // for(let item of datos.serie){
      //   console.log(item);
      //   resultado.ineerHTML += <li>${item.}</li>
      // }
    }
  }
}


