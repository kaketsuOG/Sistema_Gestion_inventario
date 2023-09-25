<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/buy.php");

if(isset($_POST['operation'])) {

    switch ($_POST['operation']) {
        case 'insert':
            $buy = new Buy();
            $COD_BUY = $buy->Insert($_POST['total'],date("Y-m-d"));
            foreach ($_POST['detalle'] as $det) {
                $buy->Detail($COD_BUY,$det,$_POST['val-'.$det],$_POST['cant-'.$det],$_POST['subt-'.$det]);
            }
            header("Location: ../index.php?modulo=buy_index");
        break;
    }
}

if(isset($_GET['operation'])) {

    switch ($_GET['operation']) {
        case 'search':
            $buy = new Buy();
            echo json_encode($buy->Search($_GET['codigo']));
        break;
    }
}
?>