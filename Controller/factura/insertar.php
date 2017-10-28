<?php
    require '../../Model/factura.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['fecha']) || isset($_GET['usuario'])){
            $fecha = $_GET['fecha'];
            $usuario = $_GET['usuario'];
            echo Factura::Insertar($fecha,$usuario);
        }else echo "error_2";
    }
?>