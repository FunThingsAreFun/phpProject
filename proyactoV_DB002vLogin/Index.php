<?php
//include('controller/ValidarSessio.php');
//$entra=ValidarSessio();
session_start();
function __autoload($class_name) {
	if(file_exists("./model/BussinesLayer/classe.".$class_name.".php")){

		require_once "./model/BussinesLayer/classe.".$class_name.".php";

	}else if(file_exists("./model/DAO/classe.".$class_name.".php")){

		require_once "./model/DAO/classe.".$class_name.".php";
	}
}

require_once "./model/DAO/classe.db.php";
require_once "./model/DAO/interface_db.php";
require_once "/controller/crearSessioAgencia.php";

?> 
<a href="view/Login.php">Login</a>