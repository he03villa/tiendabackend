<?php
    require 'Database.php';
    
    class Pais{
        function __construct() {
            
        }
        
        public static function lista(){
            $consulta = "SELEC id,nombre FROM pais";
            $resultado = Database::getInstance()->getDb()->prepare($consulta);
            $resultado->execute();
            $resultado->fecthAll(PDO::FETCH_ASSOC);
            echo json_decode($resultado);
        }
    }
?>