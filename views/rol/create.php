<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar Rol</h2>
        </div>
        <form action="routes/rol.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Nombre Rol</label>
                        <input type="text" class="form-control" name="NOMBRE_ROL" required>
                    </div>
                    
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=rol_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>