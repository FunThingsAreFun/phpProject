<?php

require_once("classe.db.php");
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");

class Directordb {
    public function inserir($director) {
    	try {
    	$query = "insert into director values('". $director->getNif() . "', '" . $director->getNom() ."','".$director->getCognom()."');";
        $con = new class_db();
        
        $con->insert($query, $GLOBALS['bd']);
        $con->close();
    	} catch (Exception $e) {
    		echo "ERROR DE INSERCION";
    	}
    }
}
?>