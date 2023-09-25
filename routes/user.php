<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/user.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $user = new User();
                $user->Insert($_POST['correo'],$_POST['password']);
            break;
            case 'update':
                $user = new User();
                $user->Update($_POST['correo'],$_POST['password']);
            break;
            case 'delete':
                $user = new User();
                $user->Delete($_POST['correo']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=users_index");

?>