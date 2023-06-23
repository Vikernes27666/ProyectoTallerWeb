<?php

$id = $_GET['id'];
require_once ("../Model/_db.php");
$consulta = "SELECT * FROM productos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<<?php require '../Model/_db.php' ?>
<?php require '../Model/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../Model/_functions.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" value="<?php echo $productos ['descripcion']; ?>" class="form-control" required>
</div>
</div>
</div>


<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Precio *</label>
<input type="number"  id="precio" name="precio"  value="<?php echo $productos ['precio']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="cantidad" name="cantidad"  value="<?php echo $productos ['cantidad']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">

<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad minima *</label>
<input type="number"  id="cantidamin" name="cantidadmin" value="<?php echo $productos ['cantidad']; ?>" class="form-control" required>
</div>


</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="cocina">Cocina</option>
    <option value="limpieza">Limpieza</option>
    <option value="enbalaje">Enbalaje</option>
    <option value="otros">Otros</option>

  </select>
    </div>   
</div>
</div>
<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file"  name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="editar_producto">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>

</html>