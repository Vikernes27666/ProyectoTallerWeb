<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Productos</title>
</head>
<body>
  <?php require '../Model/_db.php'; ?>
  <?php require '../Model/_header.php'; ?>
  <div class="container">
    <div>
      <form action="../Model/_functions.php" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre *</label>
              <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción *</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="precio" class="form-label">Precio *</label>
              <input type="number" id="precio" name="precio" class="form-control" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad *</label>
              <input type="number" id="cantidad" name="cantidad" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="cantidad_min" class="form-label">Cantidad mínima *</label>
              <input type="number" id="cantidad_min" name="cantidad_min" class="form-control" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="categorias" class="form-label">Categorías *</label>
              <select name="categorias" id="categorias" class="form-control" required>
                <option value="cocina">Cocina</option>
                <option value="limpieza">Limpieza</option>
                <option value="embalaje">Embalaje</option>
                <option value="otros">Otros</option>
              </select>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="foto" class="form-label">Foto *</label>
                <input type="file" class="form-control-file" name="foto" id="foto" required>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <input type="hidden" name="accion" value="insertar_productos">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>