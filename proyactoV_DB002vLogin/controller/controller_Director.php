<html>
<body><link rel="stylesheet" title="css14" type="text/css" href="../view/css.css">
		<div id='login'>
<?php
session_start();
function __autoload($class_name) {
	require_once "../model/BussinesLayer/classe.".$class_name.".php";
}
$buit=false;
if(trim($_POST['nifDirector']) == ''){
	echo("buit : NIF obligatori </br>");
	$buit=true;
}
if(trim($_POST['nomDirector']) == ''){
	echo("buit : Nom obligatori </br>");
	$buit=true;
}
if(trim($_POST['cDirector']) == ''){
	echo("buit : Cognom obligatori </br>");
	$buit=true;
}
if($buit){      
  ?>
  <button type="button" onclick="location.href='../view/formActor.php'">tornar</button>
  <?php
}else{
	$agen = unserialize($_SESSION['Agen']);
	if($agen->cercarDirector($_POST['nifDirector'])==0){  
		$agen->inserirDirector($_POST['nifDirector'], $_POST['nomDirector'], $_POST['cDirector']);
		$_SESSION['Agen']=serialize($agen);
		header("Location: ../view/MenuInicial.php?execucio=1");
	}else{
		header("Location: ../view/MenuInicial.php");
	}
}
?>
</div>
</body>