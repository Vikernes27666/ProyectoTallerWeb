<?php
require '../Model/_db.php';

// Verificar si se recibieron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el ID del registro a actualizar
    $id = $_POST['id'];

    // Obtener los datos actualizados del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Realizar la actualización en la base de datos
    $sql = "UPDATE user SET nombre='$nombre', telefono='$telefono', correo='$correo', password='$contrasena' WHERE id=$id";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($conexion);
    }
}
?>