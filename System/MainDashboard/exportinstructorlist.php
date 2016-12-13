<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }
?>

 <?php
		require('fpdf/fpdf.php');
		$pdf=new FPDF();
		$pdf->AddPage('p','LEGAL');
		$pdf->SetTitle("Instructors Evaluators List");

	// Page footer

	$pdf->Image('img/slsu.png',90,20,30,30); // 1#: x axis 2#: y axis 3#: width 4#: height of image
	$pdf->Cell(0,15,'',0,1); 	
	
	//FOR A CELL 
	//$pdf->Cell(width, height, text, border, position-next-cell, alignment);
	
	$pdf->Ln(30);

	$pdf->SetFont('Arial','UB',15);
	$pdf->Cell(0,5,"LIST OF INSTRUCTORS EVALUATORS",0,1,'C');
	
	$pdf->SetFont('Arial','',8);

	$pdf->SetFont('Arial','B',10);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(40,7,"Instructor Id");
	$pdf->Cell(40,7,"Instructor Name");
	$pdf->Cell(40,7,"Instructor College");
	$pdf->Cell(40,7,"Instructor Department");
	$pdf->Cell(40,7,"Instructor Password");
	$pdf->Ln();
	$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
	$pdf->Ln();

        include ('db/db.php');
        $sql = "SELECT ins_id,ins_name,ins_college,ins_dept,ins_pass FROM instructor_evaluator";
        $result = mysql_query($sql);

        while($rows=mysql_fetch_array($result))
        {
            $insid = $rows[0];
            $insname = $rows[1];
            $inscollege = $rows[2];
            $insdept = $rows[3];
            $inspass = $rows[4];
            $pdf->Cell(40,7,$insid,1);
            $pdf->Cell(40,7,$insname,1);
            $pdf->Cell(40,7,$inscollege,1);
            $pdf->Cell(40,7,$insdept,1);
            $pdf->Cell(40,7,$inspass,1); 
            $pdf->Ln(); 
        }
$pdf->Output();
?>