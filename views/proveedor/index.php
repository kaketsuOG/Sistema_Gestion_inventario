<?php
require_once("controller/proveedor.php");
$proveedor = new Proveedor();
$data = $proveedor->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de Proveedor</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <a class="btn btn-success btn-sm" href="index.php?modulo=proveedor_create">Crear</a>
                    <hr>
                </div>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Codigo de insumo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_PROVEEDOR"]."</td>";
                                echo "<td>".$row["NOMBRE_PROVEEDOR"]."</td>";
                                echo "<td>".$row["APELLIDO_PROVEEDOR"]."</td>";
                                echo "<td>".$row["COD_INSUMO"]."</td>";
                                echo '
                                    <td>
                                        <form action="routes/proveedor.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_PROVEEDOR" value="'.$row["COD_PROVEEDOR"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=proveedor_edit&id='.$row["COD_PROVEEDOR"].'">Editar</a>
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