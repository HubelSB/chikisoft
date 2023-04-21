const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  const token = grecaptcha.getResponse();
  if (token === '') {
    alert('Por favor, completa el reCAPTCHA');
    return;
  }
  // Aquí puedes enviar la respuesta del usuario al servidor para verificarla
});