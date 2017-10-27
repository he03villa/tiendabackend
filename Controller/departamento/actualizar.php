<?php
    require '../../Model/departamento.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id']) || isset($_GET['name']) || isset($_GET['pais'])){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $pais = $_GET['pais'];
            echo Departamento::Actualizar($id,$name,$pais);
        }else echo "error_2";
    }
?>