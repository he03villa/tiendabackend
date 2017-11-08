<?php
    require '../../Model/tipo_docuemento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Tipo_documento::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
        
    }
?>