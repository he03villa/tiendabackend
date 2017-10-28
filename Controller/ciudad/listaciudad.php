<?php
    require '../../Model/ciudad.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Ciudad::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
    }
?>
