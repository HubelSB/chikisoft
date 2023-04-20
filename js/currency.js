let crcFrom = document.getElementById("crcFrom");
let crcTo = document.getElementById("crcTo");
let cantidadCRC = document.getElementById("cantidadCRC");
let calcularCRC = document.getElementById("calcularCRC");
let resultCRC = document.getElementById("resultCRC");
let containerLoading = document.getElementById("containerLoading");
let loading = (isLoading) => {
  if (!isLoading) {
    containerLoading.innerHTML = "";
    return;
  }
  containerLoading.innerHTML = `<img class="loading" src="http://localhost/chikisoft/assets/loading.gif" alt="">`;
};
let updateCRC = () => {
  const options = {
    method: "GET",
    headers: {
      "X-RapidAPI-Key": "18bba1de8amsh94e61f9b585faa3p1f8887jsn61966f757444",
      "X-RapidAPI-Host": "currency-exchange.p.rapidapi.com",
    },
  };
  fetch("https://currency-exchange.p.rapidapi.com/listquotes", options)
    .then((response) => response.json())
    .then((response) => {
      for (let index = 0; index < response.length; index++) {
        const element = response[index];
        crcFrom.innerHTML += `<option value=${element}>${element}</option>`;
        crcTo.innerHTML += `<option value=${element}>${element}</option>`;
      }
    })
    .catch((err) => console.error(err));
};
let calculate = () => {
  let cantfrom = crcFrom.value;
  let cantto = crcTo.value;
  let cantidad = parseFloat(cantidadCRC.value);
  const options = {
    method: "GET",
    headers: {
      "X-RapidAPI-Key": "18bba1de8amsh94e61f9b585faa3p1f8887jsn61966f757444",
      "X-RapidAPI-Host": "currency-exchange.p.rapidapi.com",
    },
  };
  loading(true);
  fetch(
    `https://currency-exchange.p.rapidapi.com/exchange?from=${cantfrom}&to=${cantto}`,
    options
  )
    .then((response) => response.json())
    .then((response) => {
      resultCRC.textContent = (parseFloat(response) * cantidad).toFixed(3);
      loading(false);
    })
    .catch((err) => console.error(err));
};
calcularCRC.addEventListener("click", calculate);
updateCRC();
