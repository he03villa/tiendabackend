<?php
    require '../../Model/ciudad.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id']) || isset($_GET['name']) || isset($_GET['departamento'])){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $departamento = $_GET['departamento'];
            echo Ciudad::Actualizar($id,$name,$departamento);
        }else echo "error_2";
    }
?>