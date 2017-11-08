<?php
    require '../../Model/tipo_usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Tipo_usuario::Insertar($name);
        }else echo "error_2";
    }
?>