<!DOCTYPE html>
<html lang="en">
    <?php require '../Model/_db.php'; ?>
    <?php require '../Model/_header.php'; ?>
    <body>
        <h1 style="text-align: center;">Categorías de inventario</h1>
        
        <div class="row">
            <div class="col-sm-4">
                <a class="catcocina" href="productosCategoria.php?categoria=cocina">
                    Suministros de cocina
                </a>
            </div>

            <div class="col-sm-4">
                <a class="catlimpieza" href="productosCategoria.php?categoria=limpieza">
                    Insumos de limpieza
                </a>
            </div>

            <div class="col-sm-4">
                <a class="catenbalaje" href="productosCategoria.php?categoria=enbalaje">
                    Embalaje y envío
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <a class="catotros" href="productosCategoria.php?categoria=otros">
                    Otros
                </a>
            </div>
        </div>

        <!-- Aquí puedes agregar el CRUD de categorías 
    
        <div class="row">
            <div class="col-sm-12">
                <input class="soon" type="button" value="Más categorías próximamente">
            </div>
        </div>
-->

    </body>
</html>