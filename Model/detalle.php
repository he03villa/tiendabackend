<?php
    require 'Database.php';
    
    class Detalle{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT d.id,p.nombre AS producto,f.id AS factura,d.cantida FROM detalle d INNER JOIN inventario i ON d.inventario=i.id INNER JOIN producto p ON i.producto=p.id INNER JOIN factura f ON d.factura=f.id";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function getdetalleId($id){
           $consulta = "SELECT d.id,p.nombre AS producto,f.id AS factura,d.cantida FROM detalle d INNER JOIN inventario i ON d.inventario=i.id INNER JOIN producto p ON i.producto=p.id INNER JOIN factura f ON d.factura=f.id WHERE f.id=".$id;
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function Insertar($inventario,$factura,$cantidad){
            try {
                $consulta = "INSERT INTO detalle(inventario,factura,cantidad) VALUES('".$inventario."','".$factura."',".$cantidad.")";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$inventario,$factura,$cantidad){
            try {
                $consulta = "UPDATE detalle SET inventario='".$inventario."',factura=".$factura.",cantidad=".$cantidad." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>