<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/inventario.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $inventario = new Inventario();
                $inventario->Insert($_POST['COD_INVENTARIO'],$_POST['CANTIDAD_INVENTARIO'],$_POST['COD_INSUMO']);
            break;
            case 'update':
                $inventario = new Inventario();
                $inventario->Update($_POST['COD_INVENTARIO'],$_POST['CANTIDAD_INVENTARIO'],$_POST['COD_INSUMO']);
            break;
            case 'delete':
                $inventario = new Inventario();
                $inventario->Delete($_POST['COD_INVENTARIO']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=inventario_index");
?>