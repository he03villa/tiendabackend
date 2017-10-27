<?php
    require 'Database.php';
    
    class Ciudad{
        function __construct() {}
        
        public static function lista(){
            $consulta = "SELECT c.id,c.nombre,d.nombre AS departamento FROM ciudad c INNER JOIN departamento d on c.id=d.id";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute();
            $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getCiudadNo($name){
            $consulta = "SELECT c.id,c.nombre,d.nombre AS departamento FROM ciudad c INNER JOIN departamento d on c.id=d.id WHERE c.nombre=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($name));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getCiudadId($id){
            $consulta = "SELECT c.id,c.nombre,d.nombre AS departamento FROM ciudad c INNER JOIN departamento d on c.id=d.id WHERE c.id=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($id));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function Insertar($name,$departamento){
            try {
                $consulta = "INSERT INTO ciudad(nombre,departamento) VALUES('".$name."','".$departamento."')";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
        
        public static function Actualizar($id,$name,$departamento){
            try {
                $consulta = "UPDATE ciudad SET nombre='".$name."',departamento=".$departamento." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
        
        public static function Eliminar($name){
            try {
                $consulta = "DELETE FROM ciudad where nombre='".$name."'";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
    }
?>