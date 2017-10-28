<?php
    require '../../Model/factura.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Factura::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
    }
?>
