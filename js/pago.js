//const totalBtn = document.querySelector('.total');

//totalBtn.addEventListener('click', function() {
  // Abrir ventana emergente de pago
  //window.open('https://mi-sitio-web.com/pago', '_blank');
//});
// script.js

// Mostrar u ocultar la dirección de entrega según la opción seleccionada
const deliveryOption = document.getElementById('deliveryOption');
const deliveryAddress = document.getElementById('deliveryAddress');
const pickupAddress = document.getElementById('pickupAddress');
const findRestaurantButton = document.getElementById('findRestaurantButton');

deliveryOption.addEventListener('change', function() {
  if (deliveryOption.value === 'delivery') {
    deliveryAddress.style.display = 'block';
    pickupAddress.style.display = 'none';
  } else if (deliveryOption.value === 'pickup') {
    deliveryAddress.style.display = 'none';
    pickupAddress.style.display = 'block';
  }
});