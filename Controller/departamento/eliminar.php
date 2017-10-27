<?php
    require '../../Model/departamento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Departamento::Eliminar($name);
        }else echo "error_2";
    }
?>