<?php 

/*-----------------------------------------------------------------
* Aplicatiu Empresa  Fitxer: empresa_con.php
* Autor: Olga Schlüter   Data: Juliol 2005
* Descripció: Fitxer que estableix la connexió amb la BD
-----------------------------------------------------------------*/

$MM_ConTut_HOSTNAME = "localhost"; // Nom de la màquina o IP servidor
$MM_ConTut_DBTYPE   = "mysql";     // Tipus de base de dades
$MM_ConTut_DATABASE = "agencia";  // Nom de la base de dades
$MM_ConTut_USERNAME = "root";      // Usuari per accedir a la BD
$MM_ConTut_PASSWORD = "123465";          // Contrasenya per accés a la BD
$QUB_Caching = false;

$ConTut = &ADONewConnection($MM_ConTut_DBTYPE);

// Petits ajustos per connectar-nos a Acces o ODBC /IBASE / i altres.
if($MM_ConTut_DBTYPE == "access" || $MM_ConTut_DBTYPE == "odbc"){
        $ConTut->Connect($MM_ConTut_DATABASE, $MM_ConTut_USERNAME,
        $MM_ConTut_PASSWORD);
} else if($MM_ConTut_DBTYPE == "ibase") {
        $ConTut->Connect($MM_ConTut_HOSTNAME.":".$MM_ConTut_DATABASE,
        $MM_ConTut_USERNAME,$MM_ConTut_PASSWORD);
} else {
        $ConTut->Connect($MM_ConTut_HOSTNAME,$MM_ConTut_USERNAME,
        $MM_ConTut_PASSWORD,$MM_ConTut_DATABASE);
}
    
?>
