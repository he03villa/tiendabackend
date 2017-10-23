<?php
    require 'Database.php';
    Pais::lista();
    class Pais{
        function __construct() {
            
        }
        
        public static function lista(){
            try {
                $consulta = "SELEC id,nombre FROM pais";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute();
                $tabla=$resultado->fecthAll(PDO::FETCH_ASSOC);
                echo json_decode($tabla);   
            } catch (Exception $ex) {
                echo 'error';
            }
        }
    }
?>