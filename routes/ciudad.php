<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/ciudad.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $ciudad = new Ciudad();
                $ciudad->Insert($_POST['COD_CIUDAD_SUCURSAL'],$_POST['NOMBRE_CIUDAD'],$_POST['COD_CALLE_SUCURSAL']);
            break;
            case 'update':
                $ciudad = new Ciudad();
                $ciudad->Update($_POST['COD_CIUDAD_SUCURSAL'],$_POST['NOMBRE_CIUDAD'],$_POST['COD_CALLE_SUCURSAL']);
            break;
            case 'delete':
                $ciudad = new Ciudad();
                $ciudad->Delete($_POST['COD_CIUDAD_SUCURSAL']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=ciudad_index");

?>