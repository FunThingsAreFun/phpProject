<?php
/*function __autoload($class_name) {
	if(file_exists("../model/BussinesLayer/classe.".$class_name.".php")){
		require_once "../model/BussinesLayer/classe.".$class_name.".php";
	}
	else if(file_exists("../model/DAO/classe.".$class_name.".php"))
	{
		require_once "../model/DAO/classe.".$class_name.".php";
	}
	
}*/
require_once "../model/BussinesLayer/classe.Usuario.php";
require_once "../model/DAO/classe.db.php";
require_once "../model/DAO/interface_db.php";
require_once "../model/DAO/classe.Usuariodb.php";
require_once "../config/config.inc.php";
require_once "../config/db.inc.php";

session_start();
var_dump($_POST);
$user = new Usuario ();
if((isset($_POST['psw']))&&($_POST['user'])&&($_POST['g-recaptcha-response']==true)){
	//declaro auxiliares por si acaso para no liarnos
	$apsw=$_POST['psw'];
	$auser=$_POST['user'];

	$deverdad = $user->comprovarU($auser,$apsw);
	//	

	//	

	if($deverdad){
		/*Esto deveria setear los atributos del user y serilizarlo
		 pero como el resto nose si petaria lo dejo asi de omento...
		Plantearse que el usuario tambien flote en la agencia
		 */


		$_SESSION['user'] = $_POST['user'];
		$_SESSION['psw'] = $_POST['psw'];

		//si quiere guardar cookie se guarda sino se borran
		if ( isset($_POST['cuser'])) {    
			setcookie("user", $_POST['user'], time()+3600,"/");
		}else{
			setcookie("user", $_REQUEST['user'], time(),"/");
		}

		//si quiere guardar cookie se guarda sino se borran
		if ( isset($_POST['cpsw'])) {    
			setcookie("psw", $_POST['psw'], time()+3600,"/");
		}else{
			setcookie("psw", $_REQUEST['psw'], time(),"/");
		}
		header('Location: ../view/MenuInicial.php');
	}else {
		header('Location: ../view/Error.php');
		//hacer ke mande al login y al login si le pasan un error lo muestre
	}
} else{
	header('Location: ../view/Error.php');
}
?>