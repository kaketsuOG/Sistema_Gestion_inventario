<?php
require_once("controller/inventario.php");
$inventario = new Inventario();
$data = $inventario->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de inventario</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success btn-sm" href="index.php?modulo=inventario_create">Crear</a>
                        <hr>
                    </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo inventario</th>
                                <th>Cantidad</th>
                                <th>Codigo insumo</th>
                                
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_INVENTARIO"]."</td>";
                                echo "<td>".$row["CANTIDAD_INVENTARIO"]."</td>";
                                echo "<td>".$row["COD_INSUMO"]."</td>";
                                
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/inventario.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_INVENTARIO" value="'.$row["COD_INVENTARIO"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=inventario_edit&id='.$row["COD_INVENTARIO"].'">Editar</a>
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