<?php
require_once("controller/rol.php");
$rol = new Rol();
$row = $rol->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Rol</h2>
        </div>
        <form action="routes/rol.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo rol</label>
                        <input type="text" class="form-control" name="COD_ROL" value="<?php echo $row['COD_ROL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre del rol</label>
                        <input type="text" class="form-control" name="NOMBRE_ROL" value="<?php echo $row['NOMBRE_ROL'] ?>">
                    </div>
                    
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=rol_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>