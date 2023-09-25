<div class="container p-4 col-4">
    <div class="card">
        <div class="card-header">
            <h2>Ingresar Compra</h2>
        </div>
        <form action="routes/buy.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="insert">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Codigo del producto</label>
                        <input type="text" class="form-control" name="COD_PRODUCTO" value="<?php echo $_GET['codigo'] ?>" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" name="CANTIDAD_COMPRADA" required autofocus>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Comprar</button>
                <a href="index.php?modulo=products_index" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>
</div>