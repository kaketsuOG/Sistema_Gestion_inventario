<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/rol.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $rol = new Rol();
                $rol->Insert($_POST['COD_ROL'],$_POST['NOMBRE_ROL']);
            break;
            case 'update':
                $rol = new Rol();
                $rol->Update($_POST['COD_ROL'],$_POST['NOMBRE_ROL']);
            break;
            case 'delete':
                $rol = new Rol();
                $rol->Delete($_POST['COD_ROL']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=rol_index");
?>