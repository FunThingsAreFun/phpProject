<html>
<body>
	<link rel="stylesheet" title="css14" type="text/css" href="css.css">
	<?php
	include('MenuSuperior.php');
	function __autoload($class_name) {
		require_once "../model/BussinesLayer/classe.".$class_name.".php";
	}
	$agen = unserialize($_SESSION['Agen']);
	include('../model/Generes.php');
	?>
	<div id='form'>
		<form name="form" method="post" action="../controller/controller_Obra.php"/>
			Agregar Obra
			</br>
			</br>
			Nom
			<input type="text" name="nomObra">
			</br>
			Descripció
			<input type="text" name="descripcioObra">
			</br>
			Tipus
			<select name="tipus">
				<?php
				for ($i=0; $i < count($totsTipus); $i++) { 
					?>
					<option value=<?php echo $totsTipus[$i]; ?>><?php echo $totsTipus[$i]; ?></option>
					<?php
				}
				?>
			</select>
			</br>
			Data Inici
			<input type="text" name="diaIniciObra" size="2" placeholder="dd">
			-
			<input type="text" name="mesIniciObra" size="2" placeholder="mm">
			-
			<input type="text" name="anyIniciObra" size="4" placeholder="yyyy">
			</br>
			Data Final
			<input type="text" name="diaFinalObra" size="2" placeholder="dd">
			-
			<input type="text" name="mesFinalObra" size="2" placeholder="mm">
			-
			<input type="text" name="anyFinalObra" size="4" placeholder="yyyy">
			</br>
			Genere
			<select name="generes">
				<?php
				for ($i=0; $i < count($totsGeneres); $i++) { 
					?>
					<option value=<?php echo $totsGeneres[$i]; ?>><?php echo $totsGeneres[$i]; ?></option>
					<?php
				}
				?>
			</select>
			</br>
			Director
			<select name="director">
				<?php
				for ($i=0; $i < count($agen->getDirectors()); $i++) { 
					?>
					<option value=<?php echo $agen->getDirectors()[$i]->getNif(); ?>><?php echo $agen->getDirectors()[$i]->getNom(); ?></option>
					<?php
				}
				?>
			</select>
			</br>
			Actor Principal <!--que se veea chulo con las fotos-->
			<select name="actor">
				<?php
				for ($i=0; $i < count($agen->getActors()); $i++) { 
					?>
					<option value=<?php echo $agen->getActors()[$i]->getNif(); ?>><?php echo $agen->getActors()[$i]->getNom(); ?></option>
					<?php
				}
				?>
			</select>
			</br>
			<input type="submit" name="GuardarO" value="Guardar"/>
			</br>
			<button type="reset">Buidar</button>
		</form>
	</div>
</body>
</html>