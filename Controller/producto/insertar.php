<?php
    require '../../Model/producto.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Producto::Insertar($name);
        }else echo "error_2";
    }
?>