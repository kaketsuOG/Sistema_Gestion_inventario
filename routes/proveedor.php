<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/proveedor.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $proveedor = new proveedor();
                $proveedor->Insert($_POST['COD_PROVEEDOR'],$_POST['NOMBRE_PROVEEDOR'],$_POST['APELLIDO_PROVEEDOR'],$_POST['COD_INSUMO']);
            break;
            case 'update':
                $proveedor = new proveedor();
                $proveedor->Update($_POST['COD_PROVEEDOR'],$_POST['NOMBRE_PROVEEDOR'],$_POST['APELLIDO_PROVEEDOR'],$_POST['COD_INSUMO']);
            break;
            case 'delete':
                $proveedor = new proveedor();
                $proveedor->Delete($_POST['COD_PROVEEDOR']);
            break;
        }
        
    }


header("Location: ../index.php?modulo=proveedor_index");

?>