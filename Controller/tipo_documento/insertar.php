<?php
    require '../../Model/tipo_docuemento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Tipo_documento::Insertar($name);
        }else echo "error_2";
    }
?>