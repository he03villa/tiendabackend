<?php
    require '../../Model/inventario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Inventario::Eliminar($name);
        }else echo "error_2";
    }
?>