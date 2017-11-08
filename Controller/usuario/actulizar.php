<?php
    require '../../Model/usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id']) || isset($_GET['nombre']) || isset($_GET['primer_apellido']) || isset($_GET['segundo_apellido']) || isset($_GET['direccion'])|| isset($_GET['fecha_nacimiento'])|| isset($_GET['identificacion'])|| isset($_GET['usuario'])|| isset($_GET['contrasena'])|| isset($_GET['tipo_documento'])|| isset($_GET['ciudad'])|| isset($_GET['tipo_usuario'])){
            $id = $_GET['id'];
            $nombre = $_GET['nombre'];
            $primer_apellido = $_GET['primer_apellido'];
            $segundo_apellido = $_GET['segundo_apellido'];
            $direccion = $_GET['direccion'];
            $fecha_nacimiento = $_GET['fecha_nacimiento'];
            $identificacion = $_GET['identificacion'];
            $usuario = $_GET['usuario'];
            $contrasena = $_GET['contrasena'];
            $tipo_documento = $_GET['tipo_documento'];
            $ciudad = $_GET['ciudad'];
            $tipo_usuario = $_GET['tipo_usuario'];
            echo Usuario::Actualizar($id, $nombre, $primer_apellido, $segundo_apellido, $direccion, $fecha_nacimiento, $identificacion, $usuario, $contrasena, $tipo_documento, $ciudad, $tipo_usuario);
        }else echo "error_2";
    }
?>