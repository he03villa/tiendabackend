<?php
    require 'Database.php';
    
    class Auditoria{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT a.id,a.fecha,a.nombre,u.usuario AS usuario FROM auditoria a INNER JOIN usuario u on a.id=u.id";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function getauditoriaNo($name){
            $consulta = "SELECT a.id,a.fecha,a.nombre,u.usuario AS usuario FROM auditoria a INNER JOIN usuario u on a.id=u.id WHERE u.usuario=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($name));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getauditoriaId($id){
            $consulta = "SELECT a.id,a.fecha,a.nombre,u.usuario AS usuario FROM auditoria a INNER JOIN usuario u on a.id=u.id WHERE a.id=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($id));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function Insertar($fecha,$name,$usuario){
            try {
                $consulta = "INSERT INTO auditoria(fecha,nombre,usuario) VALUES('".$fecha."','".$name."','".$usuario."')";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$fecha,$name,$usuario){
            try {
                $consulta = "UPDATE auditoria SET fecha='".$fecha."' nombre='".$name."',usuario=".$usuario." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>