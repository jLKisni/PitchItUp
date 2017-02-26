<?php
require('../fpdf.php');
require('contact-db.php');


class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	// $this->Image('logo.png',10,6,30);
	// Arial bold 15
	$this->SetFont('Arial','BU',24);
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(30,10,'PitchitUp',0,1,'C');
	// Line break
	$this->Ln(20);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'R');
}
}


$ideagen = ideagen($_GET['id']);
$team = getteam($_GET['id']);
$valueprop = valueprop($_GET['id']);
$bmc = bmc($_GET['id']);

$word = $ideagen['problem'];$arr = explode(',',trim($word)); if((sizeof($arr)-1)==1){ $problem = ucfirst($arr[0]); $problem2 = ucfirst($arr[1]); $problem3 = '';}elseif((sizeof($arr)-1)==2) {$problem = ucfirst($arr[0]); $problem2 = ucfirst($arr[1]); $problem3 = '';}else {$problem = $ideagen['problem']; $problem2 = ''; $problem3 = '';}

$word1 = $ideagen['solution'];$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }


// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',18);
$pdf->Cell(0,20,$ideagen['solution'],0,1);


$pdf->SetFont('Times','B',15);

$pdf->Cell(0,10,'What is the problem ?',0,1);

$pdf->SetFont('Times','',12);

$pdf->Cell(30,10,'- '.$problem,0,1);

$pdf->Cell(30,5,'- '.ucfirst($problem2),0,0);
$pdf->Ln(5);
$pdf->Cell(30,5,'- '.ucfirst($problem3),0,0);



$pdf->Ln(10);
$pdf->SetFont('Times','B',15);

$pdf->Cell(0,10,'Our Solution',0,1);
$pdf->Ln(5);
$pdf->SetFont('Times','',12);

$pdf->Cell(30,0,$ideagen['solution'],0,1);

// benefits and features
$pdf->Ln(10);

$pdf->SetFont('Times','B',15);

$pdf->Cell(0,10,'Benefits : ',0,1);
$pdf->Ln(5);
$pdf->SetFont('Times','',12);

$pdf->Cell(30,0,'- '.$valueprop['benefits'],0,1);

$pdf->Ln(10);

$pdf->SetFont('Times','B',15);

$pdf->Cell(0,10,'Features : ',0,1);
$pdf->Ln(5);
$pdf->SetFont('Times','',12);

$pdf->Cell(30,0,'- '.$valueprop['features'],0,1);

$pdf->Ln(10);



$pdf->Output();
?>
