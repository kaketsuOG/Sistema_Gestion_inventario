<?php
require_once("controller/producto.php");
$producto = new Producto();
$row = $producto->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Producto</h2>
        </div>
        <form action="routes/producto.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo Producto</label>
                        <input type="text" class="form-control" name="COD_PRODUCTO" value="<?php echo $row['COD_PRODUCTO'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo Producto</label>
                        <input type="text" class="form-control" name="COD_CATEGORIA" value="<?php echo $row['COD_CATEGORIA'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre Producto</label>
                        <input type="text" class="form-control" name="NOMBRE_PRODUCTO" value="<?php echo $row['NOMBRE_PRODUCTO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>CANTIDAD</label>
                        <input type="text" class="form-control" name="CANTIDAD_DISPONIBLE" value="<?php echo $row['CANTIDAD_DISPONIBLE'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Precio Producto</label>
                        <input type="text" class="form-control" name="VALOR_PRODUCTO" value="<?php echo $row['VALOR_PRODUCTO'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=products_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>