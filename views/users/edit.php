<?php
require_once("controller/user.php");
$user = new User();
$row = $user->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar Usuario</h2>
        </div>
        <form action="routes/user.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="correo" value="<?php echo $row['CORREO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Contraseña</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $row['CONTRASEÑA'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=users_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>