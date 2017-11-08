<?php
    require '../../Model/tipo_usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['values'])){
            $valor = $_GET['values'];
            $respuesta = Tipo_usuario::getTipo_usuarioNo($valor);
            $contenedor = array();
            if($respuesta){
                $contenedor["respuesta"] = "CC";
                $contenedor["dato"] = $respuesta;
                echo json_encode($contenedor);
            }
            else echo json_encode(array('respuesta'=>'No se encuentra el pais'));
        }else echo json_encode(array('respuesta'=>'No se permite datos en blanco'));
    }
?>