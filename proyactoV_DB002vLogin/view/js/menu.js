function avisar(fitx){

	//var fitx = '<?php echo $accio; ?>';

	if(fitx=='formActor.php'||fitx=='formDirector.php'||fitx=='formObra.php'){
		return confirm ("Sortir sense desar les modificacions?");
	}
}