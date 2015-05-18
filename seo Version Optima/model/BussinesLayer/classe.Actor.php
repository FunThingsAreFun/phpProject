<?php
//Esta clase podria heredar de director?
Class Actor {
	private $nif;
	private $nom;
	private $cognom;
	private $sexe;
	private $foto;

	function __construct($nif, $nom, $cognom, $sexe, $foto) {
		$this->nif = $nif;
		$this->nom = $nom;
		$this->cognom = $cognom;
		$this->sexe = $sexe;
		$this->foto = $foto;
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

	public function getSexe(){
		return $this->sexe;
	}

	public function setSexe($sexe){
		$this->sexe = $sexe;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}
	public function afegirActor() {
        $ActorDb = new Actordb();
        $ActorDb->inserir($this);
    }
} 
?>