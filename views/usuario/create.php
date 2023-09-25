<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar un usuario</h2>
        </div>
        <form action="routes/usuario.php" method="post">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Nombre del usuario</label>
                        <input type="text" class="form-control" name="NOMBRE_USUARIO" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo del rol</label>
                        <input type="text" class="form-control" name="COD_ROL" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Apellido del usuario</label>
                        <input type="text" class="form-control" name="APELLIDO_USUARIO" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Rut Del usuario</label>
                        <input type="text" class="form-control" name="RUT_USUARIO" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Correo</label>
                        <input type="text" class="form-control" name="CORREO" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=usuario_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>