<?php
Class Genero {
	private $nom;
	private $descripcio;

	function __construct($nom, $descripcio) {
		$this->nom = $nom;
		$this->descripcio = $descripcio;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nombre = $nom;
	}

	public function getDescripcio(){
		return $this->descripcio;
	}

	public function setDescripcio($descripcio){
		$this->descripcio = $descripcio;
	}
} 
?>