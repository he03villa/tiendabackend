<?php
    require '../../Model/pais.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['values'])){
            $valor = $_GET['values'];
            $respuesta = Pais::getPaisNo($valor);
            if($respuesta) echo json_encode($respuesta);
            else echo json_encode(array('respuesta'=>'No se encuentra el pais'));
        } 
    }
?>