<?php
require_once("controller/calle.php");
$calle = new Calle();
$row = $calle->Show($_REQUEST['id']);

?>

<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Calle</h2>
        </div>
        <form action="routes/calle.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo calle</label>
                        <input type="text" class="form-control" name="COD_CALLE_SUCURSAL" value="<?php echo $row['COD_CALLE_SUCURSAL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre de la calle</label>
                        <input type="text" class="form-control" name="NOMBRE_CALLE" value="<?php echo $row['NOMBRE_CALLE'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo de direccion</label>
                        <input type="text" class="form-control" name="NRO_DIR" value="<?php echo $row['NRO_DIR'] ?>">
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=calle_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>