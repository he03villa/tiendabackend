<?php
    require '../../Model/ciudad.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Ciudad::Eliminar($name);
        }else echo "error_2";
    }
?>