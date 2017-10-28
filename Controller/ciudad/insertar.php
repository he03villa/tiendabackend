<?php
    require '../../Model/ciudad.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name']) || isset($_GET['departamento'])){
            $name = $_GET['name'];
            $departamento = $_GET['departamento'];
            echo Ciudad::Insertar($name,$departamento);
        }else echo "error_2";
    }
?>