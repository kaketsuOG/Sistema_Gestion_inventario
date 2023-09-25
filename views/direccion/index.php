<?php
require_once("controller/direccion.php");
$nro = new Nro();
$data = $nro->Index();
?>

<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de numero de direccion</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success btn-sm" href="index.php?modulo=direccion_create">Crear</a>
                        <hr>
                    </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo de direccion</th>
                                <th>Nombre y numero de la direccion</th>
                                
                                
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["NRO_DIR"]."</td>";
                                echo "<td>".$row["NRO_DIRECCION"]."</td>";
                                
                                
                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/direccion.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="NRO_DIR" value="'.$row["NRO_DIR"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=direccion_edit&id='.$row["NRO_DIR"].'">Editar</a>
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