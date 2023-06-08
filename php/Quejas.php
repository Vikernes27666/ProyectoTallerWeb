<?php
// Obtén los valores enviados desde el formulario usando $_POST
$employee_name = $_POST['EmployeeName'];
$category = $_POST['Category'];
$complaint_description = $_POST['ComplaintDescription'];

// Validación básica: verifica si hay campos vacíos
if (empty($employee_name) || empty($category) || empty($complaint_description)) {
    // Notifica al usuario sobre campos vacíos y redirige a la página anterior.
    echo "<script>alert('Por favor, completa todos los campos.'); window.history.back();</script>";
} else {
    // Muestra la información del formulario en lugar de conectarte a una base de datos.
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    // Redirecciona a una nueva página después de completar el registro. Cambia 'nueva_pagina.html' por el nombre real de tu página.
}
?>