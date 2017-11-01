<?php
    require '../../Model/tienda.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['nombre']) || isset($_GET['direccion']) || isset($_GET['telefono']) || isset($_GET['ciudad']) || isset($_GET['propietario'])){
            $nombre = $_GET['nombre'];
            $direccion = $_GET['direccion'];
            $telefono = $_GET['telefono'];
            $ciudad = $_GET['ciudad'];
            $propietario = $_GET['propietario'];
            echo Tienda::Insertar($nombre, $direccion, $telefono, $ciudad, $propietario);
        }else echo "error_2";
    }
?>