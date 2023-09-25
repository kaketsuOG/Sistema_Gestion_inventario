<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/sucursal.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $sucursal = new Sucursal();
                $sucursal->Insert($_POST['COD_SUCURSAL'],$_POST['NOMBRE_SUCURSAL'],$_POST['COD_CIUDAD_SUCURSAL'],$_POST['CALLE_SUCURSAL'],$_POST['NRO_DIRECCION_SUCURSAL']);
            break;
            case 'update':
                $sucursal = new Sucursal();
                $sucursal->Update($_POST['COD_SUCURSAL'],$_POST['NOMBRE_SUCURSAL'],$_POST['COD_CIUDAD_SUCURSAL'],$_POST['CALLE_SUCURSAL'],$_POST['NRO_DIRECCION_SUCURSAL']);
            break;
            case 'delete':
                $sucursal = new Sucursal();
                $sucursal->Delete($_POST['COD_SUCURSAL']);
            break;
        }
        
    }


header("Location: ../index.php?modulo=sucursal_index");

?>