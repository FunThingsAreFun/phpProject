<?php
//Esta clase podria heredar de director?
Class Usuario {
	private $id;
	private $permisos;
	private $nombre;
	private $password;
	private $email;

	/*function __construct($permisos, $nombre, $password, $email) {
		$this->permisos = $permisos;
		$this->nombre = $nombre;
		$this->password = $password;
		$this->email = $email;
	}*/


	function __construct() {
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}
	public function comprovarU($Lnombre,$Lpassword){
		$usuariodb = new Usuariodb();
		$pass = $usuariodb->buscarUsuario($Lnombre);
		var_dump(md5($Lpassword));
		var_dump($pass);
		if(md5($Lpassword)==$pass){
			return true;
		}else{
			return false;
		}
	}

	public function datosUsuario(){
		$usuariodb = new Usuariodb();
		$datosU = $usuariodb->buscarUsuario();
		return $datosU;
	}
	
} 
?>