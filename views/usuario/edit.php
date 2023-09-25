<?php
require_once("controller/usuarios.php");
$usuario = new Usuario();
$row = $usuario->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar usuario</h2>
        </div>
        <form action="routes/usuario.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo Usuario</label>
                        <input type="text" class="form-control" name="COD_USAURIO" value="<?php echo $row['COD_USAURIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre Usuario</label>
                        <input type="text" class="form-control" name="NOMBRE_USUARIO" value="<?php echo $row['NOMBRE_USUARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo Rol</label>
                        <input type="text" class="form-control" name="COD_ROL" value="<?php echo $row['COD_ROL'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Apellido Usuario</label>
                        <input type="text" class="form-control" name="APELLIDO_USUARIO" value="<?php echo $row['APELLIDO_USUARIO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Apellido Usuario</label>
                        <input type="text" class="form-control" name="CORREO" value="<?php echo $row['CORREO'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=usuario_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>