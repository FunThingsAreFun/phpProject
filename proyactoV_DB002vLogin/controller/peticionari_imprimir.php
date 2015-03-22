<?php
/*---------------------------------------------------------------
* Aplicatiu Urgell Control  Fitxer: peticionari_imprimir.php
* Autor: Olga Schlüter   Data: Juliol 2005
* Descripció:
----------------------------------------------------------------*/
//per què no falli la generació del document pdf quan hi ha variables de sessió. Problema que apareix amb el Internet Explorer.
session_cache_limiter('private');

// Iniciem o recuperem la sessió
session_start() ;

include_once("adodb/adodb.inc.php");
include_once("../config/empresa_con.php");

// Fonts
define('FPDF_FONTPATH', '../fpdf/font/');

// Classe pdf
require('../model/BussinesLayer/PDFMCTable.php');

// VENIM DE TRIAR EL PETICIONARI
   //$cod = $_GET["id"]; OLGA
  //$cod = $_GET['id_obra'];

$cod = 1;
   //Consultem les dades del peticionari

    $sqlpeticionari  = "SELECT id, nom, descripcio, tipus, dataInici, dataFinal, genere, director, actorPrincipal, actrizPrincipal, actorSecundario, actrizSecundaria FROM obra WHERE id = $cod ";
	
    $rpeticionari = $ConTut->Execute($sqlpeticionari) or die($ConTut->ErrorMsg());

    if (!$rpeticionari->EOF){
        $nom       =$rpeticionari->Fields('id');
        $cnt       =$rpeticionari->Fields('nom');
        $adr       =$rpeticionari->Fields('descripcio');
        $pob       =$rpeticionari->Fields('tipus');
        $pos       =$rpeticionari->Fields('dataInici');
        $pro       =$rpeticionari->Fields('dataFinal');
        $adrfis    =$rpeticionari->Fields('genere');
        $pobfis    =$rpeticionari->Fields('director');
        $posfis    =$rpeticionari->Fields('actorPrincipal');
        $actp      =$rpeticionari->Fields('actrizPrincipal');
        $actsec    =$rpeticionari->Fields('actorSecundario');
        $actsec2   =$rpeticionari->Fields('actrizSecundaria');
        
         // Recuperem les dades de la moneda
    //    $dades_mon = dades_moneda($nom, $ConTut);
        $GLOBALS['petnom'] = $nom;
        $GLOBALS['petcod'] = $adr;

    
    }


// Estenem les possibilitats de la classe original (fpdf) en una de nova
class PDFTableMC extends PDF_MC_Table
{

function Header(){
	$this->SetTextColor(0,64,0);
	$this->SetLineWidth(0.25);
	$this->Rect(10,10,190, 15);
        $this-> SetY(15);
        $this-> SetX(15);
	$this->SetFont('Arial','B',16);
	$this->Cell(110,5,'NOMBRE OBRA',0,0,'L');
	$this->SetFont('Arial','',10);
	$this->Cell(75,5,'Fecha i hora: '.date("d/m/Y G:i"),0,0,'R');
$this->Ln(15);
$this->SetFont('Arial','B',14);
$this->Cell(0,0,'FITXA DE OBRA');
$this->Ln(10);
            $this->SetFont('Arial','B',13);
            $this->SetWidths(array(15,35,15,115));            
            $this->SetAligns(array('L', 'L', 'L', 'L' ));
        //    $this->Row(array('Desc:', $GLOBALS['petcod'], 'Codi:', $GLOBALS['petnom']  ));	
            $this->Row(array('Codigo:', $GLOBALS['petnom']  ));  
}	

function Footer() {
        //Go to 1.5 cm from bottom
        $this->SetY(-15);
        //Select Arial italic 8
        $this->SetFont('Arial','I',8);
        //Print centered page number
        $this->Cell(0,10,'Pàgina '.$this->PageNo().'/{nb}',0,0,'R');
    }


} // Fi d'extensió de classe    
    
    
////////////////////////////////////////////////////////
// Creació del fitxer pdf
////////////////////////////////////////////////////////
$pdf=new PDFTableMC(); // creem el pdf
$pdf->AliasNbPages();
$pdf->Open();
$pdf->AddPage();
$pdf->SetTitle('FitxaPeticionari_'.$cod);
$pdf->SetMargins(10,5,5);
$pdf->SetDisplayMode(93);
$pdf->SetBorders(2);
$pdf->Ln(5);

// Grup 1
  $text= 'Datos Obra';
  $pdf->SetFont('Arial','',11);
  $pdf->SetTextColor(255,255,255);
  $pdf->SetFillColor(192,192,192);
  $pdf->Cell(190, 5, $text, 0, 1, 'L', '1');
  $pdf->Ln(3);
  $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial','',11);
  $pdf->SetWidths(array(60,120));            
  $pdf->SetAligns(array('L', 'L'));
  $pdf->Row(array('Titulo Obra:', $cnt));
  $pdf->Ln(2);	
  $pdf->Row(array('Descripcion:', $adr));	
  $pdf->Ln(2);
  $pdf->Row(array('Tipo:', $pob));	
  $pdf->Ln(2);
   $pdf->Row(array('Genero:', $adrfis));  
  $pdf->Ln(2);
  $pdf->Row(array('Fecha Inicio:', $pos));	
  $pdf->Ln(2);
  $pdf->Row(array('FEcha Final:', $pro));  
  $pdf->Ln(2);

$pdf->Ln(10);

// Grup 2
  $pdf->SetFont('Arial','',11);
  $pdf->SetTextColor(255,255,255);
  $pdf->SetFillColor(192,192,192);
  $pdf->Cell(190, 5, 'Reparto principal', 0, 1, 'L', '1');
  $pdf->Ln(3);
  $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial','',11);
  $pdf->SetWidths(array(60,120));            
  $pdf->SetAligns(array('L', 'L'));  
  $pdf->Row(array('Director:', $pobfis));	
  $pdf->Ln(2);
  $pdf->Row(array('Actor Principal:', $posfis));	
  $pdf->Ln(2);
  $pdf->Row(array('Actor Principal:', $actp));
  $pdf->Ln(2);
  $pdf->Row(array('Actor Secundario:', $actesc));
  $pdf->Ln(2);
  $pdf->Row(array('Actriz Secundaria:', $actesc2)); 
  $pdf->Ln(10);


 
  
  // Grup3
 /*   $pdf->SetFont('Arial','',11);
  $pdf->SetTextColor(255,255,255);
  $pdf->SetFillColor(192,192,192);
  $pdf->Cell(190, 5, 'Forma de Pagament', 0, 1, 'L', '1');
  $pdf->Ln(3);
  $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial','',11);
  $pdf->SetWidths(array(60,120));            
  $pdf->SetAligns(array('L', 'L'));
  $pdf->Ln(2);
  */
  $pdf->Output();

unset($GLOBALS['petnom']);
unset($GLOBALS['petcod']);
?>

