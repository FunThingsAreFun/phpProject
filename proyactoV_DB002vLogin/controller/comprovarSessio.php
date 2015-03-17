<?php
session_start();
if(isset($_SESSION['usuario'])){


$usuario = unserialize($_SESSION['usuario']);

$nombre = $usuario->getNombre();

	echo("Nom Usuari: ");
	echo($nombre);	
}else{
	header('Location: ../view/error.php');
	?>
	NO HI HA SESSIO
</br>
<a href='../Index.php'>Tornar</a>
<?php
}
?>