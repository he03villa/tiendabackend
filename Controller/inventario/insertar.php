<?php
    require '../../Model/inventario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['producto']) || isset($_GET['tienda']) || isset($_GET['cantidad']) || isset($_GET['presio'])){
            $producto = $_GET['producto'];
            $tienda = $_GET['tienda'];
            $cantidad = $_GET['cantidad'];
            $presio = $_GET['presio'];
            echo Inventario::Insertar($producto,$tienda,$cantidad,$presio);
        }else echo "error_2";
    }
?>