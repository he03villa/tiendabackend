<?php
    require 'Database.php';
    
    class Tienda{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT t.id,t.nombre,t.direccion,t.telefono,c.nombre AS ciudad,u.nombre AS propietario FROM tienda t INNER JOIN ciudad c ON t.ciudad_id=c.id INNER JOIN usuario u ON t.propietatio=u.id";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function gettiendaNo($name){
            $consulta = "SELECT t.id,t.nombre,t.direccion,t.telefono,c.nombre AS ciudad,u.nombre AS propietario FROM tienda t INNER JOIN ciudad c ON t.ciudad_id=c.id INNER JOIN usuario u ON t.propietatio=u.id WHERE t.nombre=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($name));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function Insertar($nombre,$direccion,$telefono,$ciudad,$propietario){
            try {
                $consulta = "INSERT INTO tienda(nombre,direccion,telefono,ciudad_id,propietario) VALUES('".$nombre."','".$direccion."','".$telefono."',".$ciudad.",".$propietario.")";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$nombre,$direccion,$telefono,$ciudad,$propietario){
            try {
                $consulta = "UPDATE tienda SET nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',ciudad_id=".$ciudad.",propietario=".$propietario." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Eliminar($name){
            try {
                $consulta = "DELETE FROM tienda where nombre='".$name."'";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>