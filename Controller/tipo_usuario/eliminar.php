<?php
    require '../../Model/tipo_usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Tipo_usuario::Eliminar($name);
        }else echo "error_2";
    }
?>