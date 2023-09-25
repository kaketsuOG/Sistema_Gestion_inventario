<?php
require_once("controller/horario.php");
$horario = new Horario();
$row = $horario->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar horario</h2>
        </div>
        <form action="routes/horario.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo Horario</label>
                        <input type="text" class="form-control" name="COD_HORARIO" value="<?php echo $row['COD_HORARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre horario</label>
                        <input type="text" class="form-control" name="NOMBRE_HORARIO" value="<?php echo $row['NOMBRE_HORARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>CANTIDAD</label>
                        <input type="text" class="form-control" name="COD_USUARIO" value="<?php echo $row['COD_USUARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>CANTIDAD</label>
                        <input type="text" class="form-control" name="FECHA" value="<?php echo $row['FECHA'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=horario_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>