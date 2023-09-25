<?php
require_once("controller/calle.php");


$calle = new Calle();
$data = $calle->Index();
?>

<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de Calles</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success btn-sm" href="index.php?modulo=calle_create">Crear</a>
                        <hr>
                    </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo de calle</th>
                                <th>Nombre de la calle</th>
                                <th>Codigo de numero de direccion</th>
                                
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_CALLE_SUCURSAL"]."</td>";
                                echo "<td>".$row["NOMBRE_CALLE"]."</td>";
                                echo "<td>".$row["NRO_DIR"]."</td>";
                                
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/calle.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_CALLE_SUCURSAL" value="'.$row["COD_CALLE_SUCURSAL"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=calle_edit&id='.$row["COD_CALLE_SUCURSAL"].'">Editar</a>
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