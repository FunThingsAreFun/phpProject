<!DOCTYPE html>
<html>
	<link rel="stylesheet" title="css14" type="text/css" href="css.css">
	<body>
		<?php
		include('MenuSuperior.php');
		$num = rand(1,3);
		if(isset($_GET["execucio"])) {
			?>
			<script>
			alert("dades introduides correctament");
			</script>
			<?php
		}
		?>
		<div id='form'>
			<table>
				<tr>
					<td>
						<a href="MostrarActors.php">
							<img id ='img' src=<?php echo('../img/act'.$num.'.jpg');?> alt="Llista de actors">
						</a>
					</td>
					<td>
						<a href="MostrarDirectors.php">
							<img id ='img' src=<?php echo('../img/dir'.$num.'.jpg');?> alt="Llista de dierctors">
						</a>
					</td>
					<td>
						<a href="MostrarObres.php">
							<img id ='img' src=<?php echo('../img/obr'.$num.'.jpg');?> alt="Llista de obres">
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="MostrarActors.php">
						<button> Mostrar Actors </button>
					</a>
					</td>
					<td>
						<a href="MostrarDirectors.php">
						<button> Mostrar Directors</button>
					</a>
					</td>
					<td>
						<a href="MostrarObres.php">
						<button> Mostrar Obres </button>
					</a>
					</td>
				</tr>
			</table>
		<div>
	</body>
</hmtl>