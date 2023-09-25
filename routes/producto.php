<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/controller/producto.php");

if(isset($_POST['operation'])) {

    switch ($_POST['operation']) {
        case 'insert':
            $producto = new Producto();
            $producto->Insert($_POST['COD_PRODUCTO'],$_POST['NOMBRE_PRODUCTO'],$_POST['CANTIDAD_DISPONIBLE'],$_POST['VALOR_PRODUCTO'], $_POST['COD_CATEGORIA']);
        break;
        case 'update':
            $producto = new Producto();
            $producto->Update($_POST['COD_PRODUCTO'],$_POST['NOMBRE_PRODUCTO'],$_POST['CANTIDAD_DISPONIBLE'],$_POST['VALOR_PRODUCTO'], $_POST['COD_CATEGORIA']);
        break;
        case 'delete':
            $producto = new Producto();
            $producto->Delete($_POST['COD_PRODUCTO']);
        break;
    }
    
}
header("Location: ../index.php?modulo=products_index");
?>