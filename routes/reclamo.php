<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/reclamo.php");

if(isset($_POST['operation'])) {

    switch ($_POST['operation']) {
        case 'insert':
            $reclamo = new RECLAMO();
            $reclamo->Insert($_POST['COD_RECLAMO'],$_POST['DETALLE_RECLAMO']);
        break;
        case 'update':
            $reclamo = new RECLAMO();
            $reclamo->Update($_POST['COD_RECLAMO'],$_POST['DETALLE_RECLAMO']);
        break;
        case 'delete':
            $reclamo = new RECLAMO();
            $reclamo->Delete($_POST['COD_RECLAMO']);
        break;
    }
    
}

header("Location: ../index.php?modulo=reclamo_index");

?>