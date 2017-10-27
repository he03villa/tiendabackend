<?php
    require '../../Model/departamento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try {
            $respuesta = Departamento::lista();
            echo json_encode($respuesta);
        } catch (Exception $ex) {
            echo 'error';
        }
    }
?>
