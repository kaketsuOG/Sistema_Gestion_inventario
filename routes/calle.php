<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/calle.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $calle = new Calle();
                $calle->Insert($_POST['COD_CALLE_SUCURSAL'],$_POST['NOMBRE_CALLE'],$_POST['NRO_DIR']);
            break;
            case 'update':
                $calle = new Calle();
                $calle->Update($_POST['COD_CALLE_SUCURSAL'],$_POST['NOMBRE_CALLE'],$_POST['NRO_DIR']);
            break;
            case 'delete':
                $calle = new Calle();
                $calle->Delete($_POST['COD_CALLE_SUCURSAL']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=calle_index");

?>