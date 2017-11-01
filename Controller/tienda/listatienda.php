<?php
    require '../../Model/tienda.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Tienda::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
    }
?>