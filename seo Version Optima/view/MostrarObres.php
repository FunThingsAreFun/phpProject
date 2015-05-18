<meta charset="UTF-8">
<html>
<head>
	<title>Mostrar Obres</title>
</head>
<body>


<link rel="stylesheet" title="css14" type="text/css" href="css.css">
<?php
include('MenuSuperior.php');

$agen = unserialize($_SESSION['Agen']);
$totes=$agen->getObres();
?>
<br>Llistat de totes les Obres<br>
*******************************<br>
<div id ='lista'>
	<table>
		<tr>	
		<td>Id</td>		
			<td>Nom</td>			
			<td>descripció</td>	
			<td>Director</td>	
			<td>Actor Principal</td>
			<td>Actoriz Principal</td>
			<td>Actor Secundario</td>
			<td>Actriz Secundaria</td>	
		</tr>
		<tr>
		<?php		
		for ($i=0; $i<count($totes);$i++){
			echo ("<tr class='fila".($i%2)."'>");
			?>
			<td>
				<?php
				echo("<a>".$totes[$i]->getId()."</a>");
				?>
			</td>			
			<td>
				<?php
				echo("<a href='DadesObra.php?nom=".$totes[$i]->getNom()."'>".$totes[$i]->getNom()."</a>");
				?>
			</td>
			<td>
				<?php
				echo("<a>".$totes[$i]->getDescripcio()."</a>");
				?>
			</td>
			<td>
				<?php
				echo("<a>".$totes[$i]->getDirector()."</a>");
				?>
			</td>
			<td>
				<?php
				echo("<a>".$totes[$i]->getActorPrincipal()."</a>");
				?>
			</td>
			<td>
				<?php
				echo("<a>".$totes[$i]->getActrizPrincipal()."</a>");
				?>
			</td>
			<td>
				<?php
				echo("<a>".$totes[$i]->getActorSecundario()."</a>");
				?>
			</td>
			<td>
				<?php
				echo("<a>".$totes[$i]->getActrizSecundaria()."</a>");
				?>
			</td>
			<td>
				<?php				
				echo("<img id ='img' src='../img/pdf.png' onclick='PdfFunc(".$totes[$i]->getId().")'>");
				?>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</div>
<button type="button" onclick="location.href='../view/MenuInicial.php'">TORNAR</button>
<script>
function PdfFunc(id) {
	var strin = "../controller/peticionari_imprimir.php?id="+id+"";
    window.open(strin);
}
</script>
</body>
</html>