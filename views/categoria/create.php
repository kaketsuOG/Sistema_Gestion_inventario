<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar la categoria</h2>
        </div>
        <form action="routes/categoria.php" method="post">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Nombre de la categoria</label>
                        <input type="text" class="form-control" name="NOMBRE_CATEGORIA" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=categoria_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>