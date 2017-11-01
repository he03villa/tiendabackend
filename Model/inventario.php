<?php
    require 'Database.php';
    
    class Inventario{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT i.id,p.nombre AS producto,t.nombre AS tienda,i.cantida,i.presio FROM inventario i INNER JOIN tienda t ON i.tienda=t.id INNER JOIN producto p ON i.producto=p.id";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function getinventarioId($producto,$tienda){
           $consulta = "SELECT i.id,p.nombre AS producto,t.nombre AS tienda,i.cantida,i.presio FROM inventario i INNER JOIN tienda t ON i.tienda=t.id INNER JOIN producto p ON i.producto=p.id WHERE p.nombre=? AND t.nombre=?";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute(array($producto,$tienda));
           $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
           return $tabla;
        }
        
        public static function Insertar($producto,$tienda,$cantidad,$presio){
            try {
                $consulta = "INSERT INTO inventario(producto,tienda,cantidad,presio) VALUES(".$producto.",".$tienda.",".$cantidad.",".$presio.")";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$producto,$tienda,$cantidad,$presio){
            try {
                $consulta = "UPDATE detalle SET producto=".$producto.",tienda=".$tienda.",cantidad=".$cantidad.",presio=".$presio." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Eliminar($name){
            try {
                $consulta = "DELETE FROM inventario where id=".$name;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pagis se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>