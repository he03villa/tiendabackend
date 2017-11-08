<?php
    require 'Database.php';
    
    class Tipo_usuario{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT id,nombre FROM tipo_usuario";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function getTipo_usuarioNo($values){
            try {
                $consulta = "SELECT id,nombre FROM tipo_usuario WHERE nombre=?";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute(array($values));
                $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
                return $tabla;   
            } catch (Exception $ex) {
                return FALSE;
            }
        }
        
        public static function getTipo_usuarioId($values){
            try {
                $consulta = "SELECT id,nombre FROM tipo_usuario WHERE id=?";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute(array($values));
                $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
                return $tabla;   
            } catch (Exception $ex) {
                return FALSE;
            } 
        }
        
        public static function Insertar($name){
            try {
                $consulta = "INSERT INTO tipo_usuario(nombre) VALUES('".$name."')";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El tipo de usuario se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$name){
            try {
                $consulta = "UPDATE tipo_usuario SET nombre='".$name."' WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El tipo de usuario se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Eliminar($name){
            try {
                $consulta = "DELETE FROM tipo_usuario where nombre='".$name."'";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El tipo de usuario se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>