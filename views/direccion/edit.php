<?php
require_once("controller/direccion.php");
$nro = new Nro();
$row = $nro->Show($_REQUEST['id']);

?>

<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Direccion</h2>
        </div>
        <form action="routes/direccion.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo de Direccion</label>
                        <input type="text" class="form-control" name="NRO_DIR" value="<?php echo $row['NRO_DIR'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre de la direccion</label>
                        <input type="text" class="form-control" name="NRO_DIRECCION" value="<?php echo $row['NRO_DIRECCION'] ?>">
                    </div>
                    
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=direccion_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>