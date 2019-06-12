<?php
require('fpdf/fpdf.php');

class IdGenerator extends FPDF{
    
    //$name1, $name2, $name3, $name4, $add1, $add2, $add3, $add4, $libId1, $libId2, $libId3, $libId4
    function template($name1, $name2, $name3, $name4, $add1, $add2, $add3, $add4, $libId1, $libId2, $libId3, $libId4){
        $this->AddPage('L', 'Letter');
        $this->SetFont('Arial','',10);
        $this->Image('images/id_template.jpg', 33.1, 26.75, 101, 76);
        $this->Image('images/id_template.jpg', 144.7, 26.75, 101, 76);
        $this->Image('images/id_template.jpg', 33.1, 112.95, 101, 76);
        $this->Image('images/id_template.jpg', 144.7, 112.95, 101, 76);

        //First Row Id
        $this->Cell(40,5,'',0);
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Cell(37.5,4,'',0);
        $this->Ln();
        $this->Cell(37.5,5,'',0);
        $this->Cell(39,5,$name1,0, 0,'C');
        $this->Cell(72.7,5,'',0);
        $this->Cell(39,5,$name2,0, 0,'C');
        $this->Ln();
        $this->Ln();
        $this->Cell(27.5,5,'',0);
        $this->Cell(59.3,5,$add1,0, 0,'C');
        $this->Cell(52.3,5,'',0);
        $this->Cell(59.3,5,$add2,0, 0,'C');
        $this->Ln();
        $this->Ln();
        $this->Cell(37.5, 0.5,'',0);
        $this->Ln();
        $this->Cell(82.6,5,'',0);
        $this->Cell(38 ,5,$libId1,0, 0, 'C');
        $this->Cell(73.6 ,5,'',0);
        $this->Cell(38 ,5,$libId2,0, 0, 'C');

        //Second Row Id
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Cell(37.5,2,'',0);
        $this->Ln();
        $this->Cell(37.5,4,'',0);
        $this->Ln();
        $this->Cell(37.5,5,'',0);
        $this->Cell(39,5,$name3,0, 0,'C');
        $this->Cell(72.7,5,'',0);
        $this->Cell(39,5,$name4,0, 0,'C');
        $this->Ln();
        $this->Ln();
        $this->Cell(27.5,5,'',0);
        $this->Cell(59.3,5,$add3,0, 0,'C');
        $this->Cell(52.3,5,'',0);
        $this->Cell(59.3,5,$add4,0, 0,'C');
        $this->Ln();
        $this->Ln();
        $this->Cell(37.5, 0.5,'',0);
        $this->Ln();
        $this->Cell(82.6,5,'',0);
        $this->Cell(38 ,5,$libId3,0, 0, 'C');
        $this->Cell(73.6 ,5,'',0);
        $this->Cell(38 ,5,$libId4,0, 0, 'C');

        
    }


}