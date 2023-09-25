<?php
require_once("controller/buy.php");
$buy = new Buy();
$data = $buy->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de ventas</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <a class="btn btn-success" href="index.php?modulo=products_index">Ir a productos</a>
                    <hr>
                </div>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Codigo de la venta</th>
                                <th>Codigo del producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_DETALLE"]."</td>";
                                echo "<td>".$row["COD_BUY"]."</td>";
                                echo "<td>".$row["COD_PRODUCTO"]."</td>";
                                echo "<td>".$row["PRECIO"]."</td>";
                                echo "<td>".$row["CANTIDAD"]."</td>";
                                echo "<td>".$row["SUBTOTAL"]."</td>";
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/buy.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_BUY" value="'.$row["COD_BUY"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=buy_edit&id='.$row["COD_BUY"].'">Editar</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                ';
                                } 
                                echo "</tr>";    
                            }              
                                    
                            ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>