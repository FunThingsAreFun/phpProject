<?PHP
if(!isset($_SESSION['Agen'])){
	$Agen = New Agencia("agencia","posoSergio");
	$Agen->populateAgencia();
	$Agen->populateObras();
	$_SESSION['Agen']=serialize($Agen);
}
?>