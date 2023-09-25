<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar Sucursal</h2>
        </div>
        <form action="routes/sucursal.php" method="post">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Codigo De la sucursal</label>
                        <input type="text" class="form-control" name="COD_SUCURSAL" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre De la sucursal</label>
                        <input type="text" class="form-control" name="NOMBRE_SUCURSAL" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo De La ciudad de la Sucursal</label>
                        <input type="text" class="form-control" name="COD_CIUDAD_SUCURSAL" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Calle de sucursal</label>
                        <input type="text" class="form-control" name="CALLE_SUCURSAL" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Numero de la sucursal</label>
                        <input type="text" class="form-control" name="NRO_DIRECCION_SUCURSAL" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=sucursal_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>







