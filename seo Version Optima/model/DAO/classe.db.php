<?php
require_once("/../../config/config.inc.php");
require_once("interface_db.php");

class class_db implements interface_db{

	private $server;
	private $username;
	private $password;
	private $dbname;
	private $link;
	
	
	public function __construct(){
		$this->setServer($GLOBALS['server']);
		$this->setUsername($GLOBALS['USER']);
		$this->setPassword($GLOBALS['PASS']);		
	}
		
	public function getServer(){
		return $this->server;
	}

	public function setServer($value){
		$this->server = $value;
	}
	
	public function getUsername(){
		return $this->username;
	}

	public function setUsername($value){
		$this->username = $value;
	}
	
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
	}
	
	public function getDbname(){
		return $this->dbname;
	}

	public function setDbname($value){
		$this->dbname = $value;
	}
	
	public function connect()	{
	
		$this->link=@mysql_connect($this->getServer(),$this->getUsername(),$this->getPassword());			
		if (!$this->link) {
			die('Error, could not connect: ' . mysql_error());
		}				
		return $this->link;
	}
	
	public function bd($database){
		$this->dbname = mysql_select_db($database, $this->link);
		if (!$this->dbname) {
			die ('Error, can\'t use database: ' . mysql_error());
		}
	}
	
	public function close()	{
		return mysql_close($this->link);
	}

	public function error()	{
		return mysql_error($this->link);
	}

	public function consulta($query, $pBD){		
		$con= $this->connect();
		$this->bd($pBD);
		$resultado = mysql_query($query, $con) or die('Error, query failed: '.$this->error());
		while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
		    $dades[] = $fila;
		}
		return @$dades;
	}

	public function insert($query, $pBD){		
		$con= $this->connect();
		$this->bd($pBD);
		$resultado = mysql_query($query, $con) or die('Error, query failed: '.$this->error());
		return $resultado;
	}
	public function tornarMax($tabla,$param, $pBD){		
		$con= $this->connect();
		$this->bd($pBD);
		$query="SELECT MAX(".$param.") FROM ".$tabla.";";
		$resultado = mysql_query($query, $con) or die('Error, query failed: '.$this->error());
		if($fila = mysql_fetch_array($resultado)) {
	    return $fila[0];
		} else {
			return null;
		}
	}
}
?>