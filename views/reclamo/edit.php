<?php
require_once("controller/reclamo.php");
$reclamo = new Reclamo();
$row = $reclamo->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar reclamos</h2>
        </div>
        <form action="routes/reclamos.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo reclamo</label>
                        <input type="text" class="form-control" name="COD_RECLAMO" value="<?php echo $row['COD_RECLAMO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Reclamo</label>
                        <input type="text" class="form-control" name="DETALLE_RECLAMO" value="<?php echo $row['DETALLE_RECLAMO'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=reclamo_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>