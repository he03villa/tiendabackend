<?php
    require '../../Model/tipo_docuemento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if((isset($_GET['id'])) || isset($_GET['name'])){
            $id = $_GET['id'];
            $name = $_GET['name'];
            echo Tipo_documento::Actualizar($id, $name);
        }else echo "error_2";
    }
?>