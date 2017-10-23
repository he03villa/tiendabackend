<?php
    require '../../Model/pais.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Pais::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
        
    }
?>

