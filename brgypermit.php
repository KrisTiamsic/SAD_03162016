<?php

require("fpdf/fpdf.php");
$pdf = new FPDF();
$day = date("d");
$month=date("M");
$year=date("Y");
$name = ($_POST['name']);
$address= ($_POST['address']);
$paragraph1 = "                    This office interposes no objection and hereby authorize ".$name." ,to undertake repair work for their house renovation and other necessary activities along ";
$paragraph11= "".$address.". The said location is within the jurisdiction of this barangay.";
$paragraph2="                    Any damages by reason or incident to the performance of abouve -mentioned work will be suffered by ".$name." to any person or property owner";
$paragraph3 = "                    Issued this ".$day." of ";
$paragraph33="".$month.", year ";
$paragraph333="".$year." at Barangay 599 Zone 59, District VI, City of Manila.";

$pdf->SetAuthor('Mark Porcalla');
$pdf->SetTitle ('brgyPermit');
$pdf->SetFont('Helvetica','B',20);
$pdf->SetTextColor(50,60,100);
$pdf->AddPage('P');
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'BARANGAY PERMIT',1,0,'C',0);
$pdf->SetXY(10,50);
$pdf->SetFontSize(10);
$pdf->Write(5,'To whom it may concern:');
$pdf->Ln(10);
$pdf->Write(10,$paragraph1);
$pdf->Write(10,$paragraph11);
$pdf->Ln(10);
$pdf->Write(10,$paragraph2);
$pdf->Ln(10);
$pdf->Write(10,$paragraph3);
$pdf->Write(10,$paragraph33);
$pdf->Write(10,$paragraph333);
$pdf->Ln(20);
$pdf->Write(10,'                                                                                                                                                       certified by:');
$pdf->Ln(20);
$pdf->Write(10,'                                                                                                                                             SALVADOR C. ONANAD');
$pdf->Ln(10);
$pdf->Write(5,'                                                                                                                                                  Barangay Captain');
$pdf->Ln(40);
$pdf->Write(10,'Kagawad on Duty');
$pdf->Ln(20);
$pdf->Write(10,'Prepared by:');
$pdf->Ln(20);
$pdf->Write(10,'MARIVIC M. VILLAREAL');
$pdf->Ln(10);
$pdf->Write(5,'Barangay Secretary');
$pdf->Output('Barangay-Permit.pdf','I');
?>