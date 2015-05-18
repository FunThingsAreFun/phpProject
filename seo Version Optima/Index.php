<html>
<title>
Agencia Nicolau
</title>
<meta name="Description" content="Pagina Web de la Agencia de Actores, Directores y Obras. Nicolau" >
<meta name="Keywords" content="Actor,Agencia,Directores,Obras" >


<?php
//include('controller/ValidarSessio.php');
//$entra=ValidarSessio();
session_start();
function __autoload($class_name) {
	if(file_exists("./model/BussinesLayer/classe.".$class_name.".php")){

		require_once "./model/BussinesLayer/classe.".$class_name.".php";

	} else if(file_exists("./model/DAO/classe.".$class_name.".php")){

		require_once "./model/DAO/classe.".$class_name.".php";
	}
}

require_once "./model/DAO/classe.db.php";
require_once "./model/DAO/interface_db.php";
require_once "/controller/crearSessioAgencia.php";

?>
	<body>
		<a href="view/Login.php"><img id ='img' src='../img/login.jpg'></br> Login</a>
	</body>
</html>