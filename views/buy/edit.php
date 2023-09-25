<?php
require_once("controller/buy.php");
$buy = new Buy();
$row = $buy->Show($_REQUEST['id']);
?>
<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Modificar compra</h2>
        </div>
        <form action="routes/buy.php" method="post">
            <input type="hidden" name="operation" value="update">
            <div class="card-body">
                <div class="row">
                <div class="form-group col-md-12">
                        <label>Codigo de la compra</label>
                        <input type="text" class="form-control" name="COD_BUY" value="<?php echo $row['COD_BUY'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Codigo del producto</label>
                        <input type="text" class="form-control" name="COD_PRODUCTO" value="<?php echo $row['COD_PRODUCTO'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Cantidad comprada</label>
                        <input type="text" class="form-control" name="CANTIDAD_COMPRADA" value="<?php echo $row['CANTIDAD_COMPRADA'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Modificar</button>
                <a href="index.php?modulo=buy_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>