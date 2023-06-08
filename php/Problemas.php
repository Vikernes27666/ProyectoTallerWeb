<?php

// Obtén los valores enviados desde el formulario usando $_POST
$category = $_POST['Category'];
$problem_description = $_POST['ProblemDescription'];

// Validación básica: verifica si hay campos vacíos
if (empty($category) || empty($problem_description)) {
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