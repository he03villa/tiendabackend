<?php
    require '../../Model/tipo_docuemento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['values'])){
            $valor = $_GET['values'];
            $respuesta = Tipo_documento::getTipo_documentoId($valor);
            if($respuesta){
                $contenedor["respuesta"] = "CC";
                $contenedor["dato"] = $respuesta;
                echo json_encode($contenedor);
            }
            else echo json_encode(array('respuesta'=>'No se encuentra el pais'));
        }else echo json_encode(array('respuesta'=>'No se permite datos en blanco'));
    }
?>