<?php
    require '../../Model/tienda.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['values'])){
            $values = $_GET['values'];
            $respuesta = Tienda::gettiendaNo($values);
            if($respuesta){
                $contenedor["respuesta"] = "CC";
                $contenedor["dato"] = $respuesta;
                echo json_encode($contenedor);
            }
            else echo json_encode(array('respuesta'=>'No se encuentra el pais'));
        }else echo json_encode(array('respuesta'=>'No se permite datos en blanco'));
    }
?>