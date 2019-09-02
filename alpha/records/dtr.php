<?php
require('fpdf/fpdf.php');
include '../security/database.php';
$db = new Database();
class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('bugcTransparentLogo.png',95,6,20);
        $this->Ln(15);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Bicol University Gubat Campus',0,0,'C');
        // Line break
        $this->Ln(7);
        $this->Cell(80);
        $this->Cell(30,10,'SCHOOL LIBRARY',0,0,'C');
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
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,5,'Name',0,0,'C');
    $pdf->Cell(15,5,'Year',0,0,'C');
    $pdf->Cell(40,5,'Course',0,0,'C');
    $pdf->Cell(25,5,'Time In',0,0,'C');
    $pdf->Cell(25,5,'Time Out',0,0,'C');
    $pdf->Cell(30,5,'Date',0,0,'C');
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $result = $db->connect()->query('SELECT * FROM library_log JOIN students ON library_log.student = students.id');
    //var_dump($result);
    while($record = $result->fetch_object()){
        $course = "";
        if($record->course == 1){
            $course = 'BEED';
        }
        if($record->course == 2){
            $course = 'BSED';
        }
        if($record->course == 3){
            $course = 'BAT';
        }
        if($record->course == 4){
            $course = 'BSE';
        }
        if($record->course == 5){
            $course = '----';
        }
        $pdf->Cell(50,5, $record->firstName.' '.$record->lastName ,0,0,'L');
        $pdf->Cell(15,5,$record->year ,0,0,'C');
        $pdf->Cell(40,5,$course ,0,0,'C');
        $pdf->Cell(25,5,$record->time_in ,0,0,'C');
        $pdf->Cell(25,5,$record->time_out ,0,0,'C');
        $pdf->Cell(30,5,$record->date ,0,0,'C');
        $pdf->Ln();
    }
    $pdf->Output();