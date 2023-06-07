<?php

// Obtén los valores enviados desde el formulario usando $_POST
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$password = $_POST['password'];
$confirm_password = $_POST['confirmapassword'];

// Comprueba si las contraseñas coinciden
if ($password !== $confirm_password) {
    // Notifica al usuario sobre la discrepancia de contraseña y redirige a la página de registro.
    echo "<script>alert('Las contraseñas no coinciden. Por favor intenta nuevamente.'); window.location.href='/path/to/registro.html';</script>";
    
} else {
    // Conecta con tu base de datos y guarda los detalles del usuario.
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // Redirecciona a una nueva página después de completar el registro.
}
?>