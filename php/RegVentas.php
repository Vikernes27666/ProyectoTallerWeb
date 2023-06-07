<?php

// Obtén los valores enviados desde el formulario usando $_POST
$date = $_POST['Fecha'];
$product_description = $_POST['Producto'];
$quantity_sold = $_POST['Cantidad_requerida'];
$unit_price = $_POST['Precio'];

// Validación básica: verifica si hay campos vacíos
if (empty($date) || empty($product_description) || empty($quantity_sold) || empty($unit_price)) {
    // Notifica al usuario sobre campos vacíos y redirige a la página anterior.
    echo "<script>alert('Por favor, completa todos los campos.'); window.history.back();</script>";
} else {
    // Conecta con tu base de datos y guarda los detalles del usuario.
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // Redirecciona a una nueva página después de completar el registro.
}
?>