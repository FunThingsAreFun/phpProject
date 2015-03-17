<?php
Class Director {
	private $nif;
	private $nom;
	private $cognom;

	function __construct($nif, $nom, $cognom) {
		$this->nif = $nif;
		$this->nom = $nom;
		$this->cognom = $cognom;
	}

	public function getNif(){
		return $this->nif;
	}

	public function setNif($nif){
		$this->nif = $nif;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getCognom(){
		return $this->cognom;
	}

	public function setCognom($cognom){
		$this->cognom = $cognom;
	}
} 
?>