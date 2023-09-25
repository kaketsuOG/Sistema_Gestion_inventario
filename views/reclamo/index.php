<?php
require_once("controller/reclamo.php");
$reclamo = new Reclamo();
$data = $reclamo->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de reclamos</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <a class="btn btn-success btn-sm" href="index.php?modulo=reclamo_create">Crear</a>
                    <hr>
                </div>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Reclamo</th>
                                <th width="15%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_RECLAMO"]."</td>";
                                echo "<td>".$row["DETALLE_RECLAMO"]."</td>";
                                echo '
                                    <td>
                                        <form action="routes/reclamo.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_RECLAMO" value="'.$row["COD_RECLAMO"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=reclamo_edit&id='.$row["COD_RECLAMO"].'">Editar</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                ';
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