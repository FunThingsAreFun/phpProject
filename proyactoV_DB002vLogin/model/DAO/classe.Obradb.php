<?php

require_once("classe.db.php");
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");

class Obradb {
    public function inserir($obra) {
    	try {
    	$query = "insert into obra values('','" . $obra->getNom() . "', '" . $obra->getDescripcio() . "', '" . $obra->getTipus() ."','".$obra->getDataInici()."','".$obra->getDataFinal()."','".$obra->getGenere()."','".$obra->getDirector()."','".$obra->getActorPrincipal()."');";
        $con = new class_db();
        $con->insert($query, $GLOBALS['bd']);
        $con->close();
    	} catch (Exception $e) {
    		echo "ERROR DE INSERCION";
    	}
        $apoyo = $con->tornarMax("obra","id", $GLOBALS['bd']);
       return  $apoyo;
    }
}
?>