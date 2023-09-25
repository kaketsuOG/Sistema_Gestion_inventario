<?php
require_once("controller/producto.php");
$producto = new Producto();
$data = $producto->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de Productos</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success btn-sm" href="index.php?modulo=products_create">Crear</a>
                        <hr>
                    </div>
                <?php } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Categoria</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th width="15%">Imagen</th>
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="19%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_PRODUCTO"]."</td>";
                                echo "<td>".$row["COD_CATEGORIA"]."</td>";
                                echo "<td>".$row["NOMBRE_PRODUCTO"]."</td>";
                                echo "<td>".$row["CANTIDAD_DISPONIBLE"]."</td>";
                                echo "<td>".$row["VALOR_PRODUCTO"]."</td>";
                                if ($row["IMAGEN_PRODUCTO"] != "") {
                                    echo '
                                    <td>
                                       <img src="img/productos/'.$row["IMAGEN_PRODUCTO"].'" width="144" height="144"/>
                                    </td>';
                                } else {
                                    echo '
                                    <td>Sin Imagen</td>';
                                }
                                echo '
                                    <td>
                                        <form action="routes/producto.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_PRODUCTO" value="'.$row["COD_PRODUCTO"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=products_edit&id='.$row["COD_PRODUCTO"].'">Editar</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                ';
                                }
                                echo "</tr>";                 
                                    
                            ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>