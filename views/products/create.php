
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar Producto</h2>
        </div>
        <form action="routes/producto.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Codigo del Producto</label>
                        <input type="text" class="form-control" name="COD_PRODUCTO" required autofocus>
                    </div>
                    <select class="form-select" multiple aria-label="multiple select example" name="COD_CATEGORIA">
                        <option selected>Selecciona la categoria</option>
                        <option value="1">Dulces</option>
                        <option value="2">Pan</option>
                        <option value="3">Bebestibles</option>
                        <option value="4">Tortas</option>
                    </select>
                    <div class="form-group col-md-12">
                        <label>Nombre del Producto</label>
                        <input type="text" class="form-control" name="NOMBRE_PRODUCTO" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" name="CANTIDAD_DISPONIBLE" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Valor</label>
                        <input type="text" class="form-control" name="VALOR_PRODUCTO" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Imagen</label>
                        <input type="file" class="form-control" name="IMAGEN_PRODUCTO" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=products_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>