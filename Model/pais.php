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
                $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
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
                $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
                return $tabla;   
            } catch (Exception $ex) {
                return FALSE;
            }
            
        }
    }
?>