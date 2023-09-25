<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar el reclamo</h2>
        </div>
        <form action="routes/reclamo.php" method="post">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Reclamo</label>
                        <textarea class="form-control" name="DETALLE_RECLAMO" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=reclamo_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>