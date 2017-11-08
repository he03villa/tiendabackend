<?php
    include './Database.php';
    
    class Usuario{
        function __construct() {}
        
        public static function lista(){
           $consulta = "SELECT u.id,u.nombre,u.primer_apellido,u.segundo_apellido,u.direcion,u.fecha_nacimiento,u.identificacion,u.usuario,u.contraseña,td.nombre AS tipo_documento,c.nombre AS ciudad,tu.nombre AS tipo_usuario FROM usuario u INNER JOIN tipo_documento td ON td.id=u.tipo_documento INNER JOIN ciudad c ON c.id=u.ciudad INNER JOIN tipo_usuario ts ON ts.id=u.tipo_usuario";
           $resultado = Database::getInstance()->getDb()->prepare($consulta);
           $resultado->execute();
           $tabla=$resultado->fetchAll(PDO::FETCH_ASSOC);
           return $tabla;   
        }
        
        public static function getUsuarioNo($values){
            try {
                $consulta = "SELECT u.id,u.nombre,u.primer_apellido,u.segundo_apellido,u.direccion,u.fecha_nacimiento,u.identificacion,u.usuario,u.contraseña,td.nombre AS tipo_documento,c.nombre AS ciudad,tu.nombre AS tipo_usuario FROM usuario u INNER JOIN tipo_documento td ON td.id=u.tipo_documento INNER JOIN ciudad c ON c.id=u.ciudad INNER JOIN tipo_usuario ts ON ts.id=u.tipo_usuario WHERE u.identificador=?";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute(array($values));
                $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
                return $tabla;   
            } catch (Exception $ex) {
                return FALSE;
            }
        }
        
        public static function getUsuarioId($values){
            try {
                $consulta = "SELECT u.id,u.nombre,u.primer_apellido,u.segundo_apellido,u.direccion,u.fecha_nacimiento,u.identificacion,u.usuario,u.contraseña,td.nombre AS tipo_documento,c.nombre AS ciudad,tu.nombre AS tipo_usuario FROM usuario u INNER JOIN tipo_documento td ON td.id=u.tipo_documento INNER JOIN ciudad c ON c.id=u.ciudad INNER JOIN tipo_usuario ts ON ts.id=u.tipo_usuario WHERE u.id=?";
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                $resultado->execute(array($values));
                $tabla=$resultado->fetch(PDO::FETCH_ASSOC);
                return $tabla;   
            } catch (Exception $ex) {
                return FALSE;
            }
        }
        
        public static function Insertar($nombre,$primer_apellido,$segundo_apellido,$direccion,$fecha_nacimiento,$identificacion,$usuario,$contrasena,$tipo_documento,$ciudad,$tipo_usuario){
            try {
                $consulta = "INSERT INTO usuario(nombre,primer_apellido,segundo_apellido,direccion,fecha_nacimiento,identificacion,usuario,contraseña,tipo_documento,ciudad,tipo_usuario) VALUES('".$nombre."','".$primer_apellido."','".$segundo_apellido."','".$direccion."','".$fecha_nacimiento."','".$identificacion."','".$usuario."','".$contrasena."',".$tipo_documento.",".$ciudad.",".$tipo_usuario.")";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El usuario se guardo exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Actualizar($id,$nombre,$primer_apellido,$segundo_apellido,$direccion,$fecha_nacimiento,$identificacion,$usuario,$contrasena,$tipo_documento,$ciudad,$tipo_usuario){
            try {
                $consulta = "UPDATE usuario SET nombre='".$nombre."',primer_apellido='".$primer_apellido."',segundo_apellido='".$segundo_apellido."',direccion='".$direccion."',fecha_nacimiento='".$fecha_nacimiento."',identificacion='".$identificacion."',usuario='".$usuario."',contraseña='".$contrasena."',tipo_documento=".$tipo_documento.",ciudad=".$ciudad.",tipo_usuario=".$tipo_usuario." WHERE id=".$id;
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El usuario se actualizado exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
        
        public static function Eliminar($identificacion){
            try {
                $consulta = "DELETE FROM usuario where identificacion='".$identificacion."'";
                $ressultado = Database::getInstance()->getDb()->prepare($consulta);
                $ressultado->execute();
                return "El pais se elimino exitosamente";
            } catch (Exception $ex) {
                return "error_1".$ex->getMessage();
            }
        }
    }
?>