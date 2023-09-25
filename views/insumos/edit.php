<?php
require_once("controller/insumo.php");
$insumo = new Insumo();
$row = $insumo->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar insumo</h2>
        </div>
        <form action="routes/insumo.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo insumo</label>
                        <input type="text" class="form-control" name="COD_INSUMO" value="<?php echo $row['COD_INSUMO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre insumo</label>
                        <input type="text" class="form-control" name="NOMBRE_INSUMO" value="<?php echo $row['NOMBRE_INSUMO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>CANTIDAD</label>
                        <input type="text" class="form-control" name="CANTIDAD_INSUMO" value="<?php echo $row['CANTIDAD_INSUMO'] ?>">
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=insumos_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>