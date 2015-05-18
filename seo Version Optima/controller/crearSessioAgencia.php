<?PHP
//if(!isset($_SESSION['Agen'])){
	$Agen = New Agencia("agencia","posoSergio");
	$Agen->populateAgencia();
	$_SESSION['Agen']=serialize($Agen);
//}
?>