<?php

/*require_once("classe.db.php");
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");
*/
class Usuariodb {
    public function buscarUsuario($user) {
        $query = "select password from usuario where nombre = '".$user."'";
        $con = new class_db();
        try {
            $temp = $con->consulta($query, $GLOBALS['bd']);
            $con->close();
            return $temp[0]["password"];
        } catch (Exception $e) {
            return false;
        }
              
        
    }
    public function datosUsuario($user) {
        $query = "select id,permisos,nombre,password,email from usuario where nombre = '".$user."'";
        $con = new class_db();
        try {
            $temp = $con->consulta($query, $GLOBALS['bd']);
            $con->close();
            return $temp;
        } catch (Exception $e) {
            return $temp;
        }
        
    }

    public function queryArray($temp) {
    	return @mysql_fetch_row($temp);
    }
}
?>