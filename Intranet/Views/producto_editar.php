<?php
$id = $_GET['id'];
require_once("../Model/_db.php");
$consulta = "SELECT * FROM productos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

if (isset($_POST['guardar'])) {
    // Procesar el formulario y guardar los datos en la base de datos

    // Redireccionar al usuario a la misma página
    header("Location: ../Model/_header.php?id=".$_POST['id']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require '../Model/_db.php'; ?>
    <?php require '../Model/_header.php'; ?>
</head>
<body>
    <div class="container">
        <div class="col-sm-6 offset-3 mt-5">
            <form action="../Model/_functions.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $productos['nombre']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion *</label>
                            <input type="text" id="descripcion" name="descripcion" value="<?php echo $productos['descripcion']; ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio *</label>
                            <input type="number" id="precio" name="precio" value="<?php echo $productos['precio']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad *</label>
                            <input type="number" id="cantidad" name="cantidad" value="<?php echo $productos['cantidad']; ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="cantidadmin" class="form-label">Cantidad mínima *</label>
                            <input type="number" id="cantidadmin" name="cantidadmin" value="<?php echo $productos['cantidad']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="categorias" class="form-label">Categorías *</label>
                            <select name="categorias" id="categorias" class="form-control" required>
                                <option value="cocina" <?php if ($productos['categoria'] === 'cocina') echo 'selected'; ?>>Cocina</option>
                                <option value="limpieza" <?php if ($productos['categoria'] === 'limpieza') echo 'selected'; ?>>Limpieza</option>
                                <option value="embalaje" <?php if ($productos['categoria'] === 'embalaje') echo 'selected'; ?>>Embalaje</option>
                                <option value="otros" <?php if ($productos['categoria'] === 'otros') echo 'selected'; ?>>Otros</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="foto" id="foto" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="accion" value="editar_producto">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>