<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<?php
include('MenuSuperior.php');

$agen = unserialize($_SESSION['Agen']);
$totes=$agen->getActors();
$nif=$_GET['nif'];
if($agen->cercarActor($nif)){
	$actor=$agen->getActor($nif);
}
?>
<br>Dades del Actor<br>
*******************************<br>
<div id ='lista'>
	<table>
		<tr>
			<td>Nif</td>
			<td>
				<?php
				echo($actor->getNif());
				?>
			</td>
		</tr>
		<tr>
			<td>Nom</td>
			<td>
				<?php
				echo("<a href='DadesActors.php?nif=".$actor->getNif()."'>".$actor->getNom()."</a>");
				?>
			</td>
		</tr>
		<tr>
			<td>Cognom</td>
			<td>
				<?php
				echo($actor->getCognom());
				?>
			</td>
		</tr>
		<tr>
			<td>Sexe</td>
			<td>
				<?php
				echo($actor->getSexe());
				?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<?php
				if(file_exists ("../img/".$actor->getFoto())){
					echo("<img id ='img' src='../img/".$actor->getFoto()."'>");
				}else{
					echo("<img id ='img' src='../img/notfound.jpg'>");
				}
				
				?>
			</td>			
		</tr>			
	</table>
</div>
<button type="button" onclick="location.href='../view/MenuInicial.php'">TORNAR</button>