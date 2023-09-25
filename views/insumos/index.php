<?php
require_once("controller/insumo.php");
$insumo = new Insumo();
$data = $insumo->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de Insumos</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success btn-sm" href="index.php?modulo=insumos_create">Crear</a>
                        <hr>
                    </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_INSUMO"]."</td>";
                                echo "<td>".$row["NOMBRE_INSUMO"]."</td>";
                                echo "<td>".$row["CANTIDAD_INSUMO"]."</td>";
                                
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/insumo.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_INSUMO" value="'.$row["COD_INSUMO"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=insumos_edit&id='.$row["COD_INSUMO"].'">Editar</a>
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