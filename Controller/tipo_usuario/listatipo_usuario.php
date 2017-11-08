<?php
    require '../../Model/tipo_usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Tipo_usuario::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
        
    }
?>