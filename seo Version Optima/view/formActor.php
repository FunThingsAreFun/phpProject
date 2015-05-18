<html>
<body>	
	<link rel="stylesheet" title="css14" type="text/css" href="css.css">
	<script type="text/javascript" src="js/validaciones.js"></script>
	<?php
	include('MenuSuperior.php');
	?>
	<div id='form'>
		<form id="form-validate" name="form" method="post" action="../controller/controller_actor.php"/>
		Agregar Actor
	</br>
</br>
NIF
<input type="text" name="aNif" id="aNif"/>
<span class='errorJS' id='aNif_error'>&nbsp;Campo obligatorio</span></td>		
<br>
Nom
<input type="text" name="aNom" id="aNom">
<span class='errorJS' id='aNom_error'>&nbsp;Campo obligatorio</span></td>	
</br>
Cognom
<input type="text" name="aCognom" id="aCognom">
<span class='errorJS' id='aCognom_error'>&nbsp;Campo obligatorio</span></td>	
</br>
Sexe
<br>
<input type="radio" name="sex" value="home" checked>Male
<br>
<input type="radio" name="sex" value="dona">Female
<br>
Foto
<input type="text" name="aFoto" id="aFoto">
<span class='errorJS' id='aFoto_error'>&nbsp;Campo obligatorio</span></td>	
</br>
<input type="button" name="GuardarA" value="Guardar" onclick='formValidator()'/>
</br>
<button type="reset">Buidar</button>
</form>
</div>
</body>
</hmtl>