<?php
require_once("controller/user.php");
$user = new User();
$data = $user->Index();
?>
<div class="container p-4 col-12">
    <div class="card">
        <div class="card-header">
            <h2>Listado de Usuarios</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                <div class="form-group col-md-12">
                    <a class="btn btn-success btn-sm" href="index.php?modulo=users_create">Crear</a>
                    <hr>
                </div>
                <?php  } ?>
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <?php if ($_SESSION['CORREO'] == "admin@admin.com") { ?>
                                <th width="15%">Acciones</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) {
                                echo "<tr>";
                                echo "<td>".$row["CORREO"]."</td>";
                                echo "<td>".$row["CONTRASEÑA"]."</td>";
                                echo '
                                    <td>
                                        <form action="routes/user.php" method="post">
                                            <input type="hidden" name="operation" value="delete">
                                            <input type="hidden" name="correo" value="'.$row["CORREO"].'">
                                            <a class="btn btn-warning btn-sm" href="index.php?modulo=users_edit&id='.$row["CORREO"].'">Editar</a>
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