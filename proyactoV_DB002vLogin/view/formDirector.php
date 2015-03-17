<html>
<body>
	<link rel="stylesheet" title="css14" type="text/css" href="css.css">
	<?php
	include('MenuSuperior.php');
	?>
	<div id='form'>
	<form name="form" method="post" action="../controller/controller_director.php"/>		

		Agregar Director
	</br>
</br>
NIF
<input type="text" name="nifDirector"/>		
<br>
Nom
<input type="text" name="nomDirector">
</br>
Cognom
<input type="text" name="cDirector">
</br>
<input type="submit" name="GuardarD" value="Guardar"/>
</br>
<button type="reset">Buidar</button>
</form>
</div>
</body>
</html>