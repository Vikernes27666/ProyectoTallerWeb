const mensaje = "Vive la experiencia de la auténtica comida peruana en nuestra pollería";
let i = 0;

function escribirMensaje() {
    if (i < mensaje.length) {
        document.querySelector('.mensaje').innerHTML += mensaje.charAt(i);
        i++;
        setTimeout(escribirMensaje, 100); // Esperar 100 milisegundos antes de agregar la siguiente letra
    }
}

escribirMensaje();