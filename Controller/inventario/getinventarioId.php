<?php
    require '../../Model/detalle.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['producto']) || isset($_GET['tienda'])){
            $producto = $_GET['producto'];
            $tienda = $_GET['tienda'];
            $respuesta = Inventario::getinventarioId($producto,$tienda);
            if($respuesta){
                $contenedor["respuesta"] = "CC";
                $contenedor["dato"] = $respuesta;
                echo json_encode($contenedor);
            }
            else echo json_encode(array('respuesta'=>'No se encuentra el pais'));
        }else echo json_encode(array('respuesta'=>'No se permite datos en blanco'));
    }
?>