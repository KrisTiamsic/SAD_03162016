<?php

require("fpdf/fpdf.php");
$pdf = new FPDF();
$day = date("d");
$month=date("M");
$year=date("Y");
$address= ($_POST['address']);
$guardian_= ($_POST['guardian']);
$name=($_POST['name']);
$purpose= ($_POST['purpose']);
$paragraph1 = "                    This is to certify that ".$guardian_." ,is the Guardian of ";
$paragraph11= "".$name." of legal age, is bona-fide resident of this barangay with postal address at ";
$paragraph111 = "".$address." St. Old Sta.Mesa, Manila.";
$paragraph2="                    This further certifies that ".$guardian_." has no fix source of income and belongings to an indigent family.";
$paragraph3 = "                    This certification is being issued upon the request of ".$guardian_." for ";
$paragraph33="".$purpose." purpose only.";
$paragraph4 = "                    Issued this ".$day." of ";
$paragraph44="".$month.", year ";
$paragraph444="".$year." at Barangay 599 Zone 59, District VI, City of Manila.";
$pdf->SetAuthor('Mark Porcalla');
$pdf->SetTitle ('CertificateOfIndigency');
$pdf->SetFont('Helvetica','B',20);
$pdf->SetTextColor(50,60,100);
$pdf->AddPage('P');
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'CERTIFICATE OF INDIGENCY',1,0,'C',0);
$pdf->SetXY(10,50);
$pdf->SetFontSize(10);
$pdf->Write(5,'To whom it may concern:');
$pdf->Ln(10);
$pdf->Write(10,$paragraph1);
$pdf->Write(10,$paragraph11);
$pdf->Write(10,$paragraph111);
$pdf->Ln(10);
$pdf->Write(10,$paragraph2);
$pdf->Ln(10);
$pdf->Write(10,$paragraph3);
$pdf->Write(10,$paragraph33);
$pdf->Ln(10);
$pdf->Write(10,$paragraph4);
$pdf->Write(10,$paragraph44);
$pdf->Write(10,$paragraph444);
$pdf->Ln(20);
$pdf->Write(10,'                                                                                                                                                       certified by:');
$pdf->Ln(20);
$pdf->Write(10,'                                                                                                                                             SALVADOR C. ONANAD');
$pdf->Ln(10);
$pdf->Write(5,'                                                                                                                                                  Barangay Captain');
$pdf->Ln(30);
$pdf->Write(10,'Kagawad on Duty');
$pdf->Ln(20);
$pdf->Write(10,'Prepared by:');
$pdf->Ln(20);
$pdf->Write(10,'MARIVIC M. VILLAREAL');
$pdf->Ln(10);
$pdf->Write(5,'Barangay Secretary');
$pdf->Output('Certificate-Of-Indigency.pdf','I');
?>