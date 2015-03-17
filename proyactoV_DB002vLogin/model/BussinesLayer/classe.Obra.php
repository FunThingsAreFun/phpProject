<?php

Class Obra {
	private $id;
	private $nom;
	private $descripcio;
	private $tipus;
	private $dataInici;
	private $dataFinal;
	private $genere;
	private $director;
	private $actorPrincipal;

	function __construct($nom, $descripcio, $tipus, $dataInici, $dataFinal, $genere, $director, $actorPrincipal) {
		$this->nom = $nom;
		$this->descripcio = $descripcio;
		$this->tipus = $tipus;
		$this->dataInici = $dataInici;
		$this->dataFinal = $dataFinal;
		$this->genere = $genere;
		$this->director = $director;
		$this->actorPrincipal = $actorPrincipal;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDescripcio(){
		return $this->descripcio;
	}

	public function setDescripcio($descripcio){
		$this->descripcio = $descripcio;
	}

	public function getTipus(){
		return $this->tipus;
	}

	public function setTipus($tipus){
		$this->tipus = $tipus;
	}

	public function getDataInici(){
		return $this->dataInici;
	}

	public function setDataInici($dataInici){
		$this->dataInici = $dataInici;
	}

	public function getDataFinal(){
		return $this->dataFinal;
	}

	public function setDataFinal($dataFinal){
		$this->dataFinal = $dataFinal;
	}

	public function getGenere(){
		return $this->genere;
	}

	public function setGenere($genere){
		$this->genere = $genere;
	}

	public function getDirector(){
		return $this->director;
	}

	public function setDirector($director){
		$this->director = $director;
	}

	public function getActorPrincipal(){
		return $this->actorPrincipal;
	}

	public function setActorPrincipal($actorPrincipal){
		$this->actorPrincipal = $actorPrincipal;
	}
     public function afegirObra() {
        $obraDb = new Obradb();
        $ayudame =$obraDb->inserir($this);
        return $ayudame;
    }

} 
?>