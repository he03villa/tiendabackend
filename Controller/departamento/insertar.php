<?php
    require '../../Model/departamento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name']) || isset($_GET['pais'])){
            $name = $_GET['name'];
            $pais = $_GET['pais'];
            echo Departamento::Insertar($name,$pais);
        }else echo "error_2";
    }
?>