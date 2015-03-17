<html>
<body>	
	<link rel="stylesheet" title="css14" type="text/css" href="css.css">
	<?php
	include('MenuSuperior.php');
	?>
	<div id='form'>
		<form name="form" method="post" action="../controller/controller_actor.php"/>
		Agregar Actor
	</br>
</br>
NIF
<input type="text" name="aNif"/>		
<br>
Nom
<input type="text" name="aNom">
</br>
Cognom
<input type="text" name="aCognom">
</br>
Sexe
<br>
<input type="radio" name="sex" value="home" checked>Male
<br>
<input type="radio" name="sex" value="dona">Female
<br>
<input type="radio" name="sex" value="shemale">Shemale
<br>
Foto
<input type="text" name="aFoto">
</br>
<input type="submit" name="GuardarA" value="Guardar"/>
</br>
<button type="reset">Buidar</button>
</form>
</div>
</body>
</hmtl>