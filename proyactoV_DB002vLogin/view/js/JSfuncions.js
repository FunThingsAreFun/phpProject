/*<!--------------------------------------------------------------->
<!-- Càlcul de l'edat Fitxer: JSfuncions.js                    -->
<!-- Autor: Olga Schlüter   Data: Novembre 2012                -->
<!--------------------------------------------------------------->*/
	//<!--Validació d'una data segons el format dd/mm/aaaa-->
	function ComprovarData(data) {
		//<!--Comprovo si el camp segueix el patró-->
		var patro = /^(\d{1,2})(\/|-)(\d{1,2})\2(\d{4})$/;

		//<!--Comprovo si el camp segueix el patró-->
		var matchArray = data.match(patro);
		if (matchArray == null) {
			alert("La data ha de seguir el format dd/mm/aaaa.")
			return false;
		}

		//<!--Comprovo si la data existeix-->
		dia = matchArray[1];
		mes = matchArray[3];
		any = matchArray[4];
		if (dia < 1 || dia > 31) {
			alert("El dia no és correcte.");
			return false;
		}

		//<!--Comprovo el mes-->
		if (mes < 1 || mes > 12) {
			alert("El mes no és correcte.");
			return false;
		}

		//<!--Comprovo els mesos que tenen 31 dies-->
		if ((mes==4 || mes==6 || mes==9 || mes==11) && dia==31) {
			alert("Aquest mes no té 31 dies!");
			return false;
		}

		//<!--Comprovo si l'any és de traspàs]-->
		if (mes == 2) {
			var esdetraspas = (any % 4 == 0 && (any % 100 != 0 || any % 400 == 0));
			if (dia>29 || (dia==29 && !esdetraspas)) {
				alert("Aquest mes no té " + dia + " dies!");
				return false;
			}
		}
 
	return true;
	}

	function valida() {
    
		var error = false;		
		var dataActual =<?php echo date("Ymd"); ?>;		
		
		var nom = document.form1.nom.value;		
		if (nom == "") {
				alert("Informi el nom");
				error = true;
		}
		
		var cognom = document.form1.cognom.value;		
		if (cognom == "") {
				alert("Informi el cognom");
				error = true;
		}		
				
		if(!error){
			var data = document.form1.data.value;
			if (data == "") {
				alert("Informi la data");
				error = true;
			}
		}

		if(!error){
			if(ComprovarData(data)) {
				var dia =data.substr(0,2);
				var mes =data.substr(3,2);
				var any =data.substr(6,4);
				var g_data = any+mes+dia;				
				if(g_data>dataActual){
					alert("La data de naixement no pot ser posterior a la d'avui");
					error = true;
				}
			}
			else{
				alert("Data de naixement incorrecta");
				error = true;
			}
		}    
		
		if(error) {
			if(window.event)window.event.returnValue=false;
			return false;
    } else
        return true;
	}