<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<?php
include('MenuSuperior.php');

$agen = unserialize($_SESSION['Agen']);
$totes=$agen->getDirectors();
$nif=$_GET['nif'];
if($agen->cercardirector($nif)){
	$director=$agen->getDirector($nif);
}
?>
<h3>Dades del director</h3>
*******************************<br>
<div id ='lista'>
	<table>
		<tr>
			<td>Nif</td>
			<td>
				<?php
				echo($director->getNif());
				?>
			</td>
		</tr>
		<tr>
			<td>Nom</td>
			<td>
				<?php
				echo($director->getNom());
				?>
			</td>
		</tr>
		<tr>
			<td>Cognom</td>
			<td>
				<?php
				echo($director->getCognom());
				?>
			</td>	
		</tr>		
	</table>
</div>
<button type="button" onclick="location.href='../view/MenuInicial.php'">TORNAR</button>