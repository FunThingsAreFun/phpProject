<?php

class Agencia{
	private $nom = null;
	private $direccio = null;
	private $actors = null;
	private $directors = null;
	private $obres = null;	
	
	public function __construct($nom,$direccio){
		$this->nom = $nom;
		$this->direccio = $direccio;
		$this->actors = array();
		$this->directors = array();
		$this->obres = array();
	}
	public function getActors(){
		return $this->actors;
	}

	public function setActors($actors){
		$this->actors = $actors;
	}

	public function getDirectors(){
		return $this->directors;
	}

	public function setDirectors($directors){
		$this->directors = $directors;
	}

	public function getObres(){
		return $this->obres;
	}
	public function setObres($obres){
		$this->obres = $obres;
	}
/*public function getObres(){//CON BASE DATOS
	$agenciadb = new llibreriaDb();
	$result = $llibreriaDb->query();
	return $result;
	public function setObres($obres){
		$this->obres = $obres;
	}
}*/
public function populateAgencia(){
	$this->inserirActor(1,"nicolas","actor-cine","home","nicolas.jpg");
	$this->inserirActor(2,"manolo","yolo","dona","manolo.jpg");
	$this->inserirActor(3,"Oscar","Dever","home","manol.jpg");	

	$this->inserirDirector("20", "Jhon", "muy majo");
	$this->inserirDirector("21", "Nicolson", "Es americano");
	$this->inserirDirector("22", "El Tercero", "Esta de relleno");
}
public function inserirDirector($nif, $nom, $descripcio){
	$director = new Director($nif, $nom, $descripcio);
	array_push($this->directors, $director);
}
public function inserirActor($nif, $nom, $descripcio, $sexe, $foto){
	$actor = new Actor($nif, $nom, $descripcio, $sexe, $foto);
	array_push($this->actors, $actor);
}

public function cercarActor($nif){
	$aparicions=0;
	for ($i = 0; $i<count($this->actors); $i++){
		if ($this->actors[$i]->getNif()==$nif){
			$aparicions=1;
		}
	}
	return $aparicions;			
}
public function cercarDirector($nif){
	$aparicions=0;
	for ($i = 0; $i<count($this->directors); $i++){
		if ($this->directors[$i]->getNif()==$nif){
			$aparicions=1;
		}
	}
	return $aparicions;			
}
public function cercarObra($nom){
	$aparicions=0;
	for ($i = 0; $i<count($this->obres); $i++){
		if ($this->obres[$i]->getNom()==$nom){
			$aparicions=1;
		}
	}
	return $aparicions;			
}
public function getActor($nif){
	$actor=null;
	for ($i = 0; $i<count($this->actors); $i++){
		if ($this->actors[$i]->getNif()==$nif){
			$actor=$this->actors[$i];
		}
	}
	return $actor;			
}
public function getDirector($nif){
	$director=null;
	for ($i = 0; $i<count($this->directors); $i++){
		if ($this->directors[$i]->getNif()==$nif){
			$director=$this->directors[$i];
		}
	}
	return $director;			
}
public function getObra($nom){
	$obra=null;
	for ($i = 0; $i<count($this->obres); $i++){
		if ($this->obres[$i]->getNom()==$nom){
			$obra=$this->obres[$i];
		}
	}
	return $obra;			
}

function populateObras() {	
	$agenciadb = new Agenciadb();
	$resultatConsultaObres = $agenciadb->query();
	$obres = $agenciadb->queryArray($resultatConsultaObres);
	foreach($resultatConsultaObres as $obra) {		
		$ObraS = new Obra($obra['nom'],$obra['descripcio'],$obra['tipus'],$obra['dataInici'],$obra['dataFinal'],$obra['genere'],$obra['director'],$obra['actorPrincipal']);
		$ObraS->setId($obra['id']);
		array_push($this->obres, $ObraS);
	}
	//$this->setObres();
	//print_r($this->getObres());
}
public function inserirtObra($nombre, $descripcion, $tipo, $fechaInicio, $fechaFinal, $genere, $director, $actorPrincipal){
	if($this->cercarObra($nombra)==0){
		try {
			$obra = new Obra($nombre, $descripcion, $tipo, $fechaInicio, $fechaFinal, $genere, $director, $actorPrincipal);
			$id = $obra ->afegirObra();
			//$this->populateObras();
			$obra ->setId($id);
			array_push($this->obres, $obra);
			return 1;
		} catch (Exception $e) {
			echo "ERROR EN LA INSERSIO";
		}
	} else {
		return null;
	}
}
}
?>