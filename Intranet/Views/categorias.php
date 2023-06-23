<!DOCTYPE html>
<html lang="en">
<?php require '../Model/_db.php' ?>
<?php require '../Model/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'cocina'?>">
Suministros de cocina
</a>
</div>

<div class="col-sm-4">
<a class="catlimpieza" href="productosCategoria.php?categoria=<?php echo 'limpieza'?>">
Insumos de limpieza 
</a>
</div>  

<div class="col-sm-4">
<a class="catenbalaje" href="productosCategoria.php?categoria=<?php echo 'enbalaje'?>">
Enbalaje y envio 
</a>
</div>  
</div>

<div class="row">
<div class="col-sm-4">
<a class="catotros" href="productosCategoria.php?categoria=<?php echo 'otros'?>">
Otros 
</a>
</div>

<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
</html>