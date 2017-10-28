<?php
    require '../../Model/auditoria.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id']) || isset($_GET['fecha']) || isset($_GET['name']) || isset($_GET['usuario'])){
            $id = $_GET['id'];
            $fecha = $_GET['fecha'];
            $name = $_GET['name'];
            $usuario = $_GET['usuario'];
            echo Auditoria::Actualizar($id,$fecha,$name,$usuario);
        }else echo "error_2";
    }
?>