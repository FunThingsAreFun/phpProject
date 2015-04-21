 <?php


 $link = mysql_connect('localhost', 'root', '123465') or die('No se pudo conectar: ' . mysql_error());
 mysql_select_db('agencia') or die('No se pudo seleccionar la base de datos');

 $query = 'SELECT Pseudonimo,Fecha,Texto FROM chat';

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		/*while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {
		    //$dades[] = $fila;
		  //var_dump($fila);
		  echo $fila['Pseudonimo']." ";
		  echo $fila['Fecha']." ";
		  echo $fila['Texto']." ";
		}*/
//echo $dades;
		echo json_encode(mysql_fetch_assoc($result));

?>

