<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/horario.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $horario = new horario();
                $horario->Insert($_POST['COD_HORARIO'],$_POST['NOMBRE_HORARIO'],$_POST['COD_USUARIO'],$_POST['FECHA']);
            break;
            case 'update':
                $horario = new horario();
                $horario->Update($_POST['COD_HORARIO'],$_POST['NOMBRE_HORARIO'],$_POST['COD_USUARIO'],$_POST['FECHA']);
            break;
            case 'delete':
                $horario = new horario();
                $horario->Delete($_POST['COD_HORARIO']);
            break;
        }
        
    }


header("Location: ../index.php?modulo=horario_index");

?>