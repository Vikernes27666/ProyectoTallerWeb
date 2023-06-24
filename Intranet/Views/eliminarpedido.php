<?php
require '../Model/_db.php';

// Verificar si se ha proporcionado un ID válido
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el pedido de la base de datos
    $sql = "DELETE FROM pago WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "El pedido se ha eliminado correctamente.";
    } else {
        echo "Error al eliminar el pedido: " . mysqli_error($conexion);
    }
} else {
    echo "ID de pedido no válido.";
}

mysqli_close($conexion);
?>