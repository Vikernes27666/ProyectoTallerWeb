<?php
require '../Model/_db.php';

// Verificar si se ha proporcionado un ID válido
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Actualizar el estado del pedido a "Aprobado" en la base de datos
    $sql = "UPDATE pago SET estado = 'Aprobado' WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "El pedido se ha aprobado correctamente.";
    } else {
        echo "Error al aprobar el pedido: " . mysqli_error($conexion);
    }
} else {
    echo "ID de pedido no válido.";
}

mysqli_close($conexion);
?>