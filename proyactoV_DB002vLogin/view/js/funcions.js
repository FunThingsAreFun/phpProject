var x;
x=$(document);
x.ready(inicialitzarEvents);

function inicialitzarEvents()
{
  Rec();

  var x;
  x=$("#nuevo");
  x.click(Submit);
  l=$("#re");
  l.click(Rec);
}

function Submit(){
  var v=$("#hadouken").val(); 
  var s=$("#pseu").val();


  $.getJSON("../controller/devolverChat.php",
  {
  	"hadouken" : v,
    "pseu" : s
  },
  function(aux,errormsg){
    Rec();
  }); 
  return false;
}
function Rec(){
  $.getJSON("../controller/recargaChat.php",  
  function(aux){
    tornada(aux);
  }); 
  return false;
}



function tornada(dades)
{
 //var obj = $.parseJSON(dades);
 //for (var i = 0 ; i < dades.length; i++) {
  $("#info").html("<h5>NOM:</h5> "+dades.Pseudonimo+"<h5>Fecha:</h5> "+dades.Fecha+"<h3>MSG </h3>"+dades.Texto);

 //};
}