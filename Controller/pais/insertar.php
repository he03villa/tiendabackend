<?php
    require '../../Model/pais.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Pais::Insertar($name);
        }else echo "error_2";
    }
?>