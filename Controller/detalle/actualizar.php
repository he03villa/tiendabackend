<?php
    require '../../Model/detalle.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id']) || isset($_GET['inventario']) || isset($_GET['factura']) || isset($_GET['cantidad'])){
            $id = $_GET['id'];
            $inventario = $_GET['inventario'];
            $factura = $_GET['factura'];
            $cantidad = $_GET['cantidad'];
            echo Detalle::Actualizar($id,$inventario,$factura,$cantidad);
        }else echo "error_2";
    }
?>