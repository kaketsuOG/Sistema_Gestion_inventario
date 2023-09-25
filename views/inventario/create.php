<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar Inventario</h2>
        </div>
        <form action="routes/inventario.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" name="CANTIDAD_INVENTARIO" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo de insumo</label>
                        <input type="text" class="form-control" name="COD_INSUMO" required>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=inventario_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>