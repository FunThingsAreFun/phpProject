<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<?php
include('MenuSuperior.php');
function __autoload($class_name) {
	require_once "../model/BussinesLayer/classe.".$class_name.".php";
}
$agen = unserialize($_SESSION['Agen']);
$totes=$agen->getDirectors();
?>
<br>Llistat de tots els Directors<br>
*******************************<br>
<div id ='lista'>
	<table>
		<tr>			
			<td>Nom</td>		
		</tr>
		<tr>
		<?php
		for ($i=0; $i<count($totes);$i++){
			echo ("<tr class='fila".($i%2)."'>");
			?>			
			<td>
				<?php
				echo("<a href='DadesDirector.php?nif=".$totes[$i]->getNif()."'>".$totes[$i]->getNom()."</a>");
				?>
			</td>
		</tr>
			<?php
		}
		?>
	</table>
</div>
<button type="button" onclick="location.href='../view/MenuInicial.php'">TORNAR</button>