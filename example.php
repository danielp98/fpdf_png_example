<?php

require('image_alpha.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdf=new PDF_ImageAlpha();
$pdf->AddPage("L");
// $pdf->SetFont('Arial','',16);
// $pdf->MultiCell(0,8, str_repeat('Hello World! ', 180));



// C) same as B), but using Image() method that recognizes the alpha channel
$pdf->Image('1.jpg',0,0,300,220);
// C) same as B), but using Image() method that recognizes the alpha channel
$pdf->Image('2.png',200,160,100);

$pdf->Output();

?>