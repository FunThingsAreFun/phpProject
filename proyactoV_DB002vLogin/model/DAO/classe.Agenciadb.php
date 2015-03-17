<?php

require_once("classe.db.php");//aqui va un autoload
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");

class Agenciadb {
    public function query() {
        $query = "select * from obra";
        $con = new class_db();
        $temp = $con->consulta($query, $GLOBALS['bd']);
        $con->close();
        return $temp;
    }

    public function queryArray($temp) {
    	return @mysql_fetch_row($temp);
    }
   /* public function insertObra($nombre, $descripcion, $tipo, $fechaInicio, $fechaFinal, $genere, $director, $actorPrincipal){
        try {
            $query = "INSERT INTO obra VALUES ('','".$nombre."','".$descripcion."','".$tipo."','".$fechaInicio."','".$fechaFinal."','".$genere."','".$director."','".$actorPrincipal."')";
            $con = new class_db();
            $temp = $con->insert($query, $GLOBALS['bd']);
            $con->close();

        } catch (Exception $e) {
            echo "ERROR EN LA INSERCIO";
        }
        
    }*/
}
?>