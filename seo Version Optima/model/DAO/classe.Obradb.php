<?php

require_once("classe.db.php");
require_once("/../../config/config.inc.php");
require_once("/../../config/db.inc.php");

class Obradb {
    public function inserir($obra) {
    	try {
       /*   $dataF = date_create($obra->getDataFinal());
          $dataI = date_create($obra->getDataInici());
          $dataInici = date_format($dataI,"Y-m-d");
          $dataFinal = date_format($dataF,"Y-m-d");
          */
         
    	$query = "insert into obra values('','" . $obra->getNom() . "', '" . $obra->getDescripcio() . "', '" . $obra->getTipus() ."','".$obra->getDataInici()."','".$obra->getDataFinal()."','".$obra->getGenere()."','".$obra->getDirector()."','".$obra->getActorPrincipal()."','".$obra->getActrizPrincipal()."','".$obra->getActorSecundario()."','".$obra->getActrizSecundaria()."');";
      
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