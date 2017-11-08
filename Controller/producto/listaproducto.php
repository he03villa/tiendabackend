<?php
    require '../../Model/producto.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Producto::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
        
    }
?>