<?php
require '../Model/_db.php';
// Verificar si se recibió el ID del registro a editar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del registro de la base de datos
    $sql = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        // Aquí puedes mostrar un formulario con los campos prellenados para que el usuario pueda editar los datos
?>
        <h2>Editar usuario</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $row['correo']; ?>" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
<?php
    } else {
        echo "Error al obtener los datos del usuario.";
    }
} else {
    echo "ID de usuario no especificado.";
}
?>