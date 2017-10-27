<?php
    require 'Database.php';
    
    class Departamento{
        function __construct() {}
        
        public static function lista(){
            $consulta = "SELECT d.id,d.nombre,p.nombre AS pais FROM departamento d INNER JOIN pais p on p.id=d.id";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute();
            $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getDepartamentoNo($name){
            $consulta = "SELECT d.id,d.nombre,p.nombre AS pais FROM departamento d INNER JOIN pais p on p.id=d.id WHERE d.nombre=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($name));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function getDepartamentoId($id){
            $consulta = "SELECT d.id,d.nombre,p.nombre AS pais FROM departamento d INNER JOIN pais p on p.id=d.id WHERE d.id=?";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute(array($id));
            $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
            return $tabla;   
        }
        
        public static function Insertar($name,$pais){
            try {
                $consulta = "INSERT INTO departamento(nombre,pais) VALUES('".$name."','".$pais."')";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
        
        public static function Actualizar($id,$name,$pais){
            try {
                $consulta = "UPDATE departamento SET nombre='".$name."',pais=".$pais." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
        
        public static function Eliminar($name){
            try {
                $consulta = "DELETE FROM departamento where nombre='".$name."'";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex;
            }
        }
    }
?>