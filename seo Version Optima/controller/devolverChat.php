 <?php


 $link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
 mysql_select_db('agencia') or die('No se pudo seleccionar la base de datos');

var_dump($_GET);

$hadouken = $_GET["hadouken"];
$shoryuken = $_GET["pseu"];
$fecha= date("Y-m-d");
$insert="INSERT INTO chat VALUES('','".$shoryuken."','".$fecha."','".$hadouken."')";
echo($insert);
 //$query = 'SELECT name,info FROM cicle WHERE name="'.$cicleSeleccionat.'"';
mysql_query($insert) or die('Consulta fallida: ' . mysql_error());
?>