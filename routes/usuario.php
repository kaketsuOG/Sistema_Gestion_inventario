<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/usuario.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $usuario = new Usuario();
                $usuario->Insert($_POST['COD_USUARIO'],$_POST['NOMBRE_USUARIO'],$_POST['COD_ROL'],$_POST['APELLIDO_USUARIO'],$_POST['RUT_USUARIO'],$_POST['CORREO']);
            break;
            case 'update':
                $usuario = new Usuario();
                $usuario->Update($_POST['COD_USUARIO'],$_POST['NOMBRE_USUARIO'],$_POST['COD_ROL'],$_POST['APELLIDO_USUARIO'],$_POST['RUT_USUARIO'],$_POST['CORREO']);
            break;
            case 'delete':
                $usuario = new Usuario();
                $usuario->Delete($_POST['COD_USUARIO']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=usuario_index");
?>