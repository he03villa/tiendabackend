<?php
    require '../../Model/inventario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Inventario::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
    }
?>