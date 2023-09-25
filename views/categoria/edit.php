<?php
require_once("controller/categoria.php");
$categoria = new categoria();
$row = $categoria->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar categoria</h2>
        </div>
        <form action="routes/categoria.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo de la categoria</label>
                        <input type="text" class="form-control" name="COD_CATEGORIA" value="<?php echo $row['COD_CATEGORIA'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nombre de la categoria</label>
                        <input type="text" class="form-control" name="NOMBRE_CATEGORIA" value="<?php echo $row['NOMBRE_CATEGORIA'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=categoria_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>