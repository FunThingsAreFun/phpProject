<html>
<body><link rel="stylesheet" title="css14" type="text/css" href="../view/css.css">
		<div id='login'>
<?php
session_start();
 function __autoload($class_name) {
	require_once "../model/BussinesLayer/classe.".$class_name.".php";
 }
 $buit=false;
if(trim($_POST['aNif']) == ''){
	echo("buit : NIF obligatori </br>");
	$buit=true;
}
if(trim($_POST['aNom']) == ''){
	echo("buit : Nom obligatori </br>");
	$buit=true;
}
if(trim($_POST['aCognom']) == ''){
	echo("buit : Cognom obligatori </br>");
	$buit=true;
}if(trim($_POST['aFoto']) == ''){
	echo("buit : Foto obligatoria </br>");
	$buit=true;
}
if($buit){      
  ?>
  <button type="button" onclick="location.href='../view/formActor.php'">tornar</button>
  <?php
}else{
	$agen = unserialize($_SESSION['Agen']);
	if($agen->cercarActor($_POST['aNif'])==0){  
		$agen->inserirActor($_POST['aNif'], $_POST['aNom'], $_POST['aCognom'], $_POST['sex'], $_POST['aFoto']);
		$_SESSION['Agen']=serialize($agen);
		header("Location: ../view/MenuInicial.php?execucio=1");
	}else{
		header("Location: ../view/MenuInicial.php");
	}
}
?>
</div>
</body>