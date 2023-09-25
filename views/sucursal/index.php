<?php
require_once("controller/sucursal.php");
$sucursal = new Sucursal();
$data = $sucursal->Index();

?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de sucursal</h2>
        </div>
        <div class="card-body">
            <div class="row">
            <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                <div class="form-group col-md-12">
                    <a class="btn btn-success btn-sm" href="index.php?modulo=sucursal_create">Ingresar Sucursal</a>
                    <hr>
                </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Codigo ciudad</th>
                                <th>calle</th>
                                <th>direccion</th>
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_SUCURSAL"]."</td>";
                                echo "<td>".$row["NOMBRE_SUCURSAL"]."</td>";
                                echo "<td>".$row["COD_CIUDAD_SUCURSAL"]."</td>";
                                echo "<td>".$row["CALLE_SUCURSAL"]."</td>";
                                echo "<td>".$row["NRO_DIRECCION_SUCURSAL"]."</td>";
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/sucursal.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_SUCURSAL" value="'.$row["COD_SUCURSAL"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=sucursal_edit&id='.$row["COD_SUCURSAL"].'">Editar</a>
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







