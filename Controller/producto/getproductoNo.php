<?php
    require '../../Model/producto.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['values'])){
            $valor = $_GET['values'];
            $respuesta = Producto::getProoductoNo($valor);
            $contenedor = array();
            if($respuesta){
                $contenedor["respuesta"] = "CC";
                $contenedor["dato"] = $respuesta;
                echo json_encode($contenedor);
            }
            else echo json_encode(array('respuesta'=>'No se encuentra el pais'));
        }else echo json_encode(array('respuesta'=>'No se permite datos en blanco'));
    }
?>