<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar calle</h2>
        </div>
        <form action="routes/calle.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Codigo de calle</label>
                        <input type="text" class="form-control" name="COD_CALLE_SUCURSAL" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre de la calle</label>
                        <input type="text" class="form-control" name="NOMBRE_CALLE"required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo de la direccion</label>
                        <input type="text" class="form-control" name="NRO_DIR" required>
                    </div>
                    
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=calle_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>