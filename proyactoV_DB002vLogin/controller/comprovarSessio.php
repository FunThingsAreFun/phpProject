<?php
session_start();
if((isset($_SESSION['psw']))&&($_SESSION['user'])){	
	echo("Nom Usuari: ");
	echo($_SESSION['user']);	
}else{
	header('Location: ../view/error.php');
	?>
	NO HI HA SESSIO
</br>
<a href='../Index.php'>Tornar</a>
<?php
}
?>