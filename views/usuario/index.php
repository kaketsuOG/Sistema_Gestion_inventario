<?php
require_once("controller/usuario.php");
$usuario = new Usuario();
$data = $usuario->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de Empleados</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                <div class="form-group col-md-12">
                    <a class="btn btn-success btn-sm" href="index.php?modulo=usuario_create">Crear</a>
                    <hr>
                </div>
                <?php  } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Rut</th>
                                <th>Codigo de rol</th>
                                <th>Correo</th>
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["COD_USUARIO"]."</td>";
                                echo "<td>".$row["NOMBRE_USUARIO"]."</td>";
                                echo "<td>".$row["APELLIDO_USUARIO"]."</td>";
                                echo "<td>".$row["RUT_USUARIO"]."</td>";
                                echo "<td>".$row["COD_ROL"]."</td>";
                                echo "<td>".$row["CORREO"]."</td>";

                                if ($_SESSION['CORREO'] == "admin@admin.com") {
                                echo '
                                    <td>
                                        <form action="routes/usuario.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="COD_USUARIO" value="'.$row["COD_USUARIO"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=usuario_edit&id='.$row["COD_USUARIO"].'">Editar</a>
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