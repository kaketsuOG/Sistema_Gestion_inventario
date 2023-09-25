<?php
require_once("controller/ciudad.php");
$ciudad = new Ciudad();
$row = $ciudad->Show($_REQUEST['id']);
?>

<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Ciudad</h2>
        </div>
        <form action="routes/sucursal.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo ciudad</label>
                        <input type="text" class="form-control" name="COD_CIUDAD_SUCURSAL" value="<?php echo $row['COD_CIUDAD_SUCURSAL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre de la ciudad</label>
                        <input type="text" class="form-control" name="NOMBRE_CIUDAD" value="<?php echo $row['NOMBRE_CIUDAD'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo de la calle</label>
                        <input type="text" class="form-control" name="COD_CALLE_SUCURSAL" value="<?php echo $row['COD_CALLE_SUCURSAL'] ?>">
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=sucursal_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>