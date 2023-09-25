<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/insumo.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $producto = new Insumo();
                $producto->Insert($_POST['COD_INSUMO'],$_POST['NOMBRE_INSUMO'],$_POST['CANTIDAD_INSUMO']);
            break;
            case 'update':
                $producto = new Insumo();
                $producto->Update($_POST['COD_INSUMO'],$_POST['NOMBRE_INSUMO'],$_POST['CANTIDAD_INSUMO']);
            break;
            case 'delete':
                $producto = new Insumo();
                $producto->Delete($_POST['COD_INSUMO']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=insumos_index");
?>