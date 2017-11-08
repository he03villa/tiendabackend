<?php
    require '../../Model/usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            echo Usuario::Eliminar($name);
        }else echo "error_2";
    }
?>