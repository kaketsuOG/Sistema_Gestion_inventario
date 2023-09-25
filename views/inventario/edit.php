<?php
require_once("controller/inventario.php");
$inventario = new Inventario();
$row = $inventario->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar inventario</h2>
        </div>
        <form action="routes/inventario.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo inventario</label>
                        <input type="text" class="form-control" name="COD_INVENTARIO" value="<?php echo $row['COD_INVENTARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>cantidad</label>
                        <input type="text" class="form-control" name="CANTIDAD_INVENTARIO" value="<?php echo $row['CANTIDAD_INVENTARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo insumo</label>
                        <input type="text" class="form-control" name="COD_INSUMO" value="<?php echo $row['COD_INSUMO'] ?>">
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=inventario_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>