<?php

/*require_once("classe.db.php");
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");
*/
class Usuariodb {
    public function buscarUsuario($user) {
        $query = "select password from usuario where nombre = '".$user."'";
        $con = new class_db();
        $temp = $con->consulta($query, $GLOBALS['bd']);
        $con->close();      
        return $temp[0]["password"];
    }
    public function datosUsuario($user) {
        $query = "select id,permisos,nombre,password,email from usuario where nombre = '".$user."'";
        $con = new class_db();
        $temp = $con->consulta($query, $GLOBALS['bd']);
        $con->close();
        return $temp;
    }

    public function queryArray($temp) {
    	return @mysql_fetch_row($temp);
    }
}
?>