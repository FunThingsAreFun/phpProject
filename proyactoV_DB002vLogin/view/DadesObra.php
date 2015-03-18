<meta charset="UTF-8">
<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<?php
include('MenuSuperior.php');

$agen = unserialize($_SESSION['Agen']);
$totes=$agen->getObres();
$nom=$_GET['nom'];
?>
<br>Dades de la obra<br>
*******************************<br>
<div id ='lista'>
<?php
if($agen->cercarObra($nom)>0){
	$obra=$agen->getObra($nom);
	?>
	<table>
		<tr>
			<td>Id</td>
			<td>
				<?php
				echo($obra->getId());
				?>
			</td>
		</tr>
		<tr>
			<td>Nom</td>
			<td>
				<?php
				echo($obra->getNom());
				?>
			</td>
		</tr>
		<tr>
			<td>Descripció</td>
			<td>
				<?php
				echo($obra->getDescripcio());
				?>
			</td>
		</tr>
		<tr>
			<td>Tipus</td>
			<td>
				<?php
				echo($obra->getTipus());
				?>
			</td>
		</tr>
		<tr>
			<td>Data inici</td>
			<td>
				<?php
				echo($obra->getDataInici());
				?>
			</td>
		</tr>
		<tr>
			<td>Data fi</td>
			<td>
				<?php
				echo($obra->getDataFinal());
				?>
			</td>
		</tr>
		<tr>
			<td>Gènere</td>
			<td>
				<?php
				echo($obra->getGenere());
				?>
			</td>
		</tr>
		<tr>
			<td>Director</td>
			<td>
				<?php
				echo($obra->getDirector());
				?>
			</td>
		</tr>
		<tr>
			<td>Actor principal</td>
			<td>
				<?php
				echo($agen->getActor($obra->getActorPrincipal())->getNom());
				?>
			</td>
		</tr>
	</table>
	<?php
	} else {
		?>
		<a>error</a>
		<?php
	}
	?>
</div>
<button type="button" onclick="location.href='../view/MenuInicial.php'">TORNAR</button>