<?php
require_once("controller/proveedor.php");
$proveedor = new Proveedor();
$row = $proveedor->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Proveedor</h2>
        </div>
        <form action="routes/proveedor.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo Proveedor</label>
                        <input type="text" class="form-control" name="COD_PROVEEDOR" value="<?php echo $row['COD_PROVEEDOR'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre Proveedor</label>
                        <input type="text" class="form-control" name="NOMBRE_PROVEEDOR" value="<?php echo $row['NOMBRE_PROVEEDOR'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Apellido Proveedor</label>
                        <input type="text" class="form-control" name="APELLIDO_PROVEEDOR" value="<?php echo $row['APELLIDO_PROVEEDOR'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo Insumo</label>
                        <input type="text" class="form-control" name="COD_INSUMO" value="<?php echo $row['COD_INSUMO'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=proveedor_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>