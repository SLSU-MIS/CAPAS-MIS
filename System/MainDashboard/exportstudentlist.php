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
		$pdf->SetTitle("Student Evaluators List");

	// Page footer

	$pdf->Image('img/slsu.png',90,20,30,30); // 1#: x axis 2#: y axis 3#: width 4#: height of image
	$pdf->Cell(0,15,'',0,1); 	
	
	//FOR A CELL 
	//$pdf->Cell(width, height, text, border, position-next-cell, alignment);
	
	$pdf->Ln(30);

	$pdf->SetFont('Arial','UB',15);
	$pdf->Cell(0,5,"LIST OF STUDENTS EVALUATORS",0,1,'C');
	
	$pdf->SetFont('Arial','',8);

	$pdf->SetFont('Arial','B',10);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(25,7,"Student Id");
	$pdf->Cell(30,7,"Student Name");
	$pdf->Cell(30,7,"Student College");
	$pdf->Cell(30,7,"Student Department");
	$pdf->Cell(30,7,"Student Year");
	$pdf->Cell(30,7,"Student Section");
	$pdf->Cell(30,7,"Student Password");
	$pdf->Ln();
	$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
	$pdf->Ln();

        include ('db/db.php');
        $sql = "SELECT student_id,student_name,student_college,student_dept,student_year,student_section,student_pass FROM student_evaluator";
        $result = mysql_query($sql);

        while($rows=mysql_fetch_array($result))
        {
            $studentid = $rows[0];
            $studentname = $rows[1];
            $studentcollege = $rows[2];
            $studentdept = $rows[3];
            $studentyear = $rows[4];
            $studentsection = $rows[5];
            $studentpass = $rows[6];
            $pdf->Cell(13,7,$studentid,1);
            $pdf->Cell(35,7,$studentname,1);
            $pdf->Cell(40,7,$studentcollege,1);
            $pdf->Cell(30,7,$studentdept,1);
            $pdf->Cell(30,7,$studentyear,1);
            $pdf->Cell(20,7,$studentsection,1); 
            $pdf->Cell(30,7,$studentpass,1); 
            $pdf->Ln(); 
        }
$pdf->Output();
?>