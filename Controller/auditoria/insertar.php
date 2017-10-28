<?php
    require '../../Model/auditoria.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['fecha']) || isset($_GET['name']) || isset($_GET['usuario'])){
            $fecha = $_GET['fecha'];
            $name = $_GET['name'];
            $usuario = $_GET['usuario'];
            echo Auditoria::Insertar($fecha,$name,$usuario);
        }else echo "error_2";
    }
?>