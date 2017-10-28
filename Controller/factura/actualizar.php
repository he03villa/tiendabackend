<?php
    require '../../Model/factura.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id']) || isset($_GET['fecha']) || isset($_GET['usuario'])){
            $id = $_GET['id'];
            $fecha = $_GET['fecha'];
            $usuario = $_GET['usuario'];
            echo Factura::Actualizar($id,$fecha,$usuario);
        }else echo "error_2";
    }
?>