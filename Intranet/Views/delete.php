

<?php
require '../Model/_db.php';
// Verificar si se recibió el ID del registro a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el registro de la base de datos
    $sql = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro.";
    }
} else {
    echo "ID de usuario no especificado.";
}
?>