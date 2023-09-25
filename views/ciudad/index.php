<?php 
require_once("controller/ciudad.php");

$ciudad = new Ciudad();
$data = $ciudad->Index();
?>

<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de ciudad</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success btn-sm" href="index.php?modulo=ciudad_create">Crear</a>
                        <hr>
                    </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre ciudad</th>
                                <th>Codigo calle</th>
                                
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_CIUDAD_SUCURSAL"]."</td>";
                                echo "<td>".$row["NOMBRE_CIUDAD"]."</td>";
                                echo "<td>".$row["COD_CALLE_SUCURSAL"]."</td>";
                                
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/ciudad.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_CIUDAD_SUCURSAL" value="'.$row["COD_CIUDAD_SUCURSAL"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=ciudad_edit&id='.$row["COD_CIUDAD_SUCURSAL"].'">Editar</a>
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
