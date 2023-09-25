
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar horario</h2>
        </div>
        <form action="routes/horario.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Fecha</label>
                        <input type="text" class="form-control" name="FECHA" required>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="NOMBRE_HORARIO" required>
                        <option selected>Selecciona tu horario</option>
                        <option value="08:00 - 14:30">Mañana (08:00 - 14:30)</option>
                        <option value="15:30 - 20:00">Tarde (08:00 - 14:30)</option>
                    </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo del trabajador</label>
                        <input type="text" class="form-control" name="COD_USUARIO" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="index.php?modulo=horario_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>