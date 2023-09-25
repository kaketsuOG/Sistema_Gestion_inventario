<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar Ciudad</h2>
        </div>
        <form action="routes/ciudad.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Codigo de ciudad</label>
                        <input type="text" class="form-control" name="COD_CIUDAD_SUCURSAL" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre de la ciudad</label>
                        <input type="text" class="form-control" name="NOMBRE_CIUDAD" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo de la calle</label>
                        <input type="text" class="form-control" name="COD_CALLE_SUCURSAL" required>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=ciudad_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>