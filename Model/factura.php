<?php
    require 'Database.php';
    
    class Factura{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT f.id,f.fecha,u.nombre AS usuario FROM factura f INNER JOIN usuario u on f.id=u.id";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function getfacturaNo($name){
            $consulta = "SELECT f.id,f.fecha,u.nombre AS usuario FROM factura f INNER JOIN usuario u on f.id=u.id WHERE u.usuario=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($name));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getfacturaId($id){
            $consulta = "SELECT f.id,f.fecha,u.nombre AS usuario FROM factura f INNER JOIN usuario u on f.id=u.id WHERE f.id=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($id));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function Insertar($fecha,$usuario){
            try {
                $consulta = "INSERT INTO factura(fecha,usuario) VALUES('".$fecha."','".$usuario."')";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
        
        public static function Actualizar($id,$fecha,$usuario){
            try {
                $consulta = "UPDATE factura SET fecha='".$fecha."',usuario=".$usuario." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
    }
?>