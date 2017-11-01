<?php
    require '../../Model/tienda.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Tienda::Eliminar($name);
        }else echo "error_2";
    }
?>