<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/categoria.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $categoria = new categoria();
                $categoria->Insert($_POST['COD_CATEGORIA'],$_POST['NOMBRE_CATEGORIA']);
            break;
            case 'update':
                $categoria = new categoria();
                $categoria->Update($_POST['COD_CATEGORIA'],$_POST['NOMBRE_CATEGORIA']);
            break;
            case 'delete':
                $categoria = new categoria();
                $categoria->Delete($_POST['COD_CATEGORIA']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=categoria_index");

?>