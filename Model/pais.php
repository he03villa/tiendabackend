<?php
    require 'Database.php';
    
    class Pais{
        function __construct() {
            
        }
        
        public static function lista(){
            $consulta = "SELECT id,nombre FROM pais";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute();
            $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getPaisNo($values){
            try {
                $consulta = "SELECT id,nombre FROM pais WHERE nombre=?";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute(array($values));
                $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
                return $tabla;   
            } catch (Exception $ex) {
                return FALSE;
            }
        }
        
        public static function getPaisId($values){
            try {
                $consulta = "SELECT id,nombre FROM pais WHERE id=?";
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
                $consulta = "INSERT INTO pais(nombre) VALUES('".$name."')";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pais se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$name){
            try {
                $consulta = "UPDATE pais SET nombre='".$name."' WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pais se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Eliminar($name){
            try {
                $consulta = "DELETE FROM pais where nombre='".$name."'";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pais se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>