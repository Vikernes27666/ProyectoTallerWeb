<?php
require '../Model/_db.php';
// Verificar si se recibieron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Realizar la inserción en la base de datos
    $sql = "INSERT INTO user (nombre, telefono, correo, password) VALUES ('$nombre', '$telefono', '$correo', '$contrasena')";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error al crear el usuario: " . mysqli_error($conexion);
    }
}
?>