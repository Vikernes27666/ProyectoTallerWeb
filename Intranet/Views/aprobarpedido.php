<?php
require '../Model/_db.php';

// Verificar si se ha proporcionado un ID válido
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el código de actualización del estado del pedido

    echo "El pedido se ha aprobado correctamente.";
} else {
    echo "ID de pedido no válido.";
}

mysqli_close($conexion);
?>