<?php
    require 'Database.php';
    Pais::lista();
    class Pais{
        function __construct() {
            
        }
        
        public static function lista(){
            try {
                $consulta = "SELECT id,nombre FROM pais";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute();
                $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($tabla);   
            } catch (Exception $ex) {
               echo 'error';
            }
        }
    }
?>