<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<?php
include('MenuSuperior.php');

$agen = unserialize($_SESSION['Agen']);
$totes=$agen->getActors();
?>


<br>Llistat de tots els Actors<br>
*******************************<br>
<div id ='lista'>

	<table>
		<tr>			
			<td>Nom</td>			
			<td>Foto</td>			
		</tr>
		<tr>
		<?php
		for ($i=0; $i<count($totes);$i++){
			echo ("<tr class='fila".($i%2)."'>");
			?>			
			<td>
				<?php
				echo("<a href='DadesActor.php?nif=".$totes[$i]->getNif()."'>".$totes[$i]->getNom()."</a>");
				?>
			</td>			
			<td>
				<?php
				if(file_exists ("../img/".$totes[$i]->getFoto())){
					echo("<a href='DadesActor.php?nif=".$totes[$i]->getNif()."'><img id ='img' src='../img/".$totes[$i]->getFoto().".jpg'alt='".$totes[$i]->getNom()."'></a>");
				}else{
					echo("<a href='DadesActor.php?nif=".$totes[$i]->getNif()."'><img id ='img' src='../img/notfound.jpg' alt='".$totes[$i]->getNom()."'></a>");
				}
				
				?>
			</td>
		</tr>
			<?php
		}
		?>
	</table>
	
</div>
<button type="button" onclick="location.href='../view/MenuInicial.php'">TORNAR</button>