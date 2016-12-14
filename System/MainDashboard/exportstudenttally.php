<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }


    $college=$_REQUEST['student_college'];
    $department=$_REQUEST['student_department'];
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
	$pdf->Cell(0,5,"LIST OF INSTRUCTORS STUDENT TALLY EVALUATION",0,1,'C');

	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,"$college",0,1,'C');
	$pdf->Cell(0,5,"$department",0,1,'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(25,7,"Instructor Name");
	$pdf->Cell(25,7,"Subject Teaches");
	$pdf->Cell(6,7,"A1");
	$pdf->Cell(6,7,"A2");
	$pdf->Cell(6,7,"A3");
	$pdf->Cell(6,7,"A4");
	$pdf->Cell(6,7,"A5");
	$pdf->Cell(6,7,"B1");
	$pdf->Cell(6,7,"B2");
	$pdf->Cell(6,7,"B3");
	$pdf->Cell(6,7,"B4");
	$pdf->Cell(6,7,"B5");
	$pdf->Cell(6,7,"C1");
	$pdf->Cell(6,7,"C2");
	$pdf->Cell(6,7,"C3");
	$pdf->Cell(6,7,"C4");
	$pdf->Cell(6,7,"C5");
	$pdf->Cell(6,7,"D1");
	$pdf->Cell(6,7,"D2");
	$pdf->Cell(6,7,"D3");
	$pdf->Cell(6,7,"D4");
	$pdf->Cell(6,7,"D5");
	$pdf->Cell(13,7,"Average");
	$pdf->Cell(25,7,"Rating");

	$pdf->Ln();
	$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
	$pdf->Ln();

        include ('db/db.php');
        $sql = "SELECT * FROM answer WHERE instructor_college = '".$college."' AND instructor_dept = '".$department."' AND type='Student Evaluation'";
        $result = mysql_query($sql);

        while($rows=mysql_fetch_array($result))
        {
            $instructorname = $rows[2];
            $subject = $rows[5];
            $A1=$rows[6];
            $A2=$rows[7];
            $A3=$rows[8];
            $A4=$rows[9];
            $A5=$rows[10];

            $B1=$rows[11];
            $B2=$rows[12];
            $B3=$rows[13];
            $B4=$rows[14];
            $B5=$rows[15];

            $C1=$rows[16];
            $C2=$rows[17];
            $C3=$rows[18];
            $C4=$rows[19];
            $C5=$rows[20];

            $D1=$rows[21];
            $D2=$rows[22];
            $D3=$rows[23];
            $D4=$rows[24];
            $D5=$rows[25];

            $average=$rows[26];
            $rating=$rows[27];


           $pdf->Cell(25,7,$instructorname,1);
			$pdf->Cell(25,7,$subject,1);
			$pdf->Cell(6,7,$A1,1);
			$pdf->Cell(6,7,$A2,1);
			$pdf->Cell(6,7,$A3,1);
			$pdf->Cell(6,7,$A4,1);
			$pdf->Cell(6,7,$A5,1);
			$pdf->Cell(6,7,$B1,1);
			$pdf->Cell(6,7,$B2,1);
			$pdf->Cell(6,7,$B3,1);
			$pdf->Cell(6,7,$B4,1);
			$pdf->Cell(6,7,$B5,1);
			$pdf->Cell(6,7,$C1,1);
			$pdf->Cell(6,7,$C2,1);
			$pdf->Cell(6,7,$C3,1);
			$pdf->Cell(6,7,$C4,1);
			$pdf->Cell(6,7,$C5,1);
			$pdf->Cell(6,7,$D1,1);
			$pdf->Cell(6,7,$D2,1);
			$pdf->Cell(6,7,$D3,1);
			$pdf->Cell(6,7,$D4,1);
			$pdf->Cell(6,7,$D5,1);
			$pdf->Cell(13,7,$average,1);
			$pdf->Cell(20,7,$rating,1);
            $pdf->Ln(); 
        }
$pdf->Output();
?>