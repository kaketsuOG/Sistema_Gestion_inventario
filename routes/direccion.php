<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/direccion.php");

    if(isset($_POST['operation'])) {

        switch ($_POST['operation']) {
            case 'insert':
                $nro = new Nro();
                $nro->Insert($_POST['NRO_DIR'],$_POST['NRO_DIRECCION']);
            break;
            case 'update':
                $nro = new Nro();
                $nro->Update($_POST['NRO_DIR'],$_POST['NRO_DIRECCION']);
            break;
            case 'delete':
                $nro = new Nro();
                $nro->Delete($_POST['NRO_DIR']);
            break;
        }
        
    }

header("Location: ../index.php?modulo=direccion_index");

?>