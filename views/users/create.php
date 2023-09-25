<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Crear Usuario</h2>
        </div>
        <form action="routes/user.php" method="post">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="correo" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=users_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>