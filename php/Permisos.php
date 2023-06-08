<?php

// Obtén los valores enviados desde el formulario usando $_POST
$employee_name = $_POST['Nombre'];
$category = $_POST['Categoria'];
$start_date = $_POST['Fecha_inicio'];
$end_date = $_POST['Fecha_final'];
$reason = $_POST['Razon'];

// Validación básica: verifica si hay campos vacíos
if (empty($employee_name) || empty($category) || empty($start_date) || empty($end_date) || empty($reason)) {
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