<?php
require_once("controller/sucursal.php");
$sucursal = new Sucursal();
$row = $sucursal->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Sucursal</h2>
        </div>
        <form action="routes/sucursal.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo Sucursal</label>
                        <input type="text" class="form-control" name="COD_SUCURSAL" value="<?php echo $row['COD_SUCURSAL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre Sucursal</label>
                        <input type="text" class="form-control" name="NOMBRE_SUCURSAL" value="<?php echo $row['NOMBRE_SUCURSAL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo Ciudad Sucursal</label>
                        <input type="text" class="form-control" name="COD_CIUDAD_SUCURSAL" value="<?php echo $row['COD_CIUDAD_SUCURSAL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Calle de la Sucursal</label>
                        <input type="text" class="form-control" name="CALLE_SUCURSAL" value="<?php echo $row['CALLE_SUCURSAL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Numero de direccion de la Sucursal</label>
                        <input type="text" class="form-control" name="NRO_DIRECCION_SUCURSAL" value="<?php echo $row['NRO_DIRECCION_SUCURSAL'] ?>">
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







