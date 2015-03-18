<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<script language="JavaScript" type="text/JavaScript" src = "js/JSfuncions.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="js/jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
	<link rel="stylesheet" title="css14" type="text/css" href="css.css" />
	<script type="text/javascript" src="js/jscalendar/calendar.js"></script>
	<script type="text/javascript" src="js/jscalendar/lang/calendar-en.js"></script>
	<script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script> 
</head>
<body class="container">
	<?php
	include('MenuSuperior.php');
	/*function __autoload($class_name) {
		require_once "../model/BussinesLayer/classe.".$class_name.".php";
	}*/
	$agen = unserialize($_SESSION['Agen']);
	include('../model/Generes.php');
	?>
	<div id='form'>
		<form name="form" method="post" action="../controller/controller_Obra.php" onsubmit="JavaScript:valida();">
			Agregar Obra
			<br/>
			<br/>
			Nom
			<input type="text" name="nomObra">
			<br/>
			Descripció
			<input type="text" name="descripcioObra">
			<br/>
			Tipus
			<select name="tipus">
				<?php
				for ($i=0; $i < count($totsTipus); $i++) { 
					?>
					<option value="<?php echo $totsTipus[$i]; ?>"><?php echo $totsTipus[$i]; ?></option>
					<?php
				}
				?>
			</select>
			<br/>
			Data Inici
			<input type="text" name="dataInici" id="data1">
			<button type="reset" id="boto1">...</button>
			<br/>
			Data Final
			<input type="text" name="dataFi" id="data2">
			<button type="reset" id="boto2">...</button>
			<br/>
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
			<br/>
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
			<br/>
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
			<br/>
			<input type="submit" name="GuardarO" value="Guardar"/>
			<br/>
			<button type="reset">Buidar</button>
		</form>
	</div>
	<script type="text/javascript">
		Calendar.setup({
	        inputField     :    "data1",      // id of the input field
	        ifFormat       :    "%d-%m-%Y",   // format of the input field
	        showsTime      :    false,         // will display a time selector
	        button         :    "boto1",      // trigger for the calendar (button ID)
	        singleClick    :    false,        // double-click mode
	        step           :    1             // show all years in drop-down boxes (instead of every other year as default)
	    });
		Calendar.setup({
	        inputField     :    "data2",      // id of the input field
	        ifFormat       :    "%d-%m-%Y",   // format of the input field
	        showsTime      :    false,         // will display a time selector
	        button         :    "boto2",      // trigger for the calendar (button ID)
	        singleClick    :    false,        // double-click mode
	        step           :    1             // show all years in drop-down boxes (instead of every other year as default)
	    });
	</script> 
</body>
</html>