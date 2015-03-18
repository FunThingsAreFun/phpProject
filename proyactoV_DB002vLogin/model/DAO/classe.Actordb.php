<?php

require_once("classe.db.php");
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");

class Actordb {
    public function inserir($actor) {
    	try { 
    	$query = "insert into actor values('". $actor->getNif() . "', '" . $actor->getNom() ."','".$actor->getCognom(). "', '" . $actor->getSexe() ."','".$actor->getFoto()."');";
        $con = new class_db();
        
        $con->insert($query, $GLOBALS['bd']);
        $con->close();
    	} catch (Exception $e) {
    		echo "ERROR DE INSERCION";
    	}
    }
}
?>