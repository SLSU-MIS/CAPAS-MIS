<?php
	
	//$profs=$_SESSION['prof'];  //In order to get the value of the selected professor in rating.php


	require ("fpdf/fpdf.php");//path of fpdf file from pdf directory 
	$pdf=new FPDF();//Object for FPDF class wherein you can use the object $pdf to create pdfs,images etc.
	//There are available functions on the fpdf library downloaded type localhost/pdf/ on the browser
	//Functions used in creating pdf
	$pdf->AddPage('p','LEGAL');
	$pdf->SetTitle("SLSU-CAPAS Evaluation Result (Student)");

	$pdf->Image('img/slsu.png',20,20,30,30); // 1#: x axis 2#: y axis 3#: width 4#: height of image
	$pdf->Image('img/cen.png',165,20,30,30);
	$pdf->Cell(0,15,'',0,1); 	
	
	//FOR A CELL 
	//$pdf->Cell(width, height, text, border, position-next-cell, alignment);
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,5,'Republic of the Philippines',0,1,'C'); //
	$pdf->SetFont('Times','B',12);	
	$pdf->Cell(0,5,'SOUTHERN LUZON STATE UNIVERSITY',0,1,'C');
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,5,'College of Engineering',0,1,'C');
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,5,'Lucban, Quezon',0,1,'C');
	$pdf->Ln(15);

	$pdf->SetFont('Times','UB',20);
	$pdf->Cell(0,5,"SLSU-CAPAS Evaluation Result (Student)",0,1,'C');
	
	$pdf->SetFont('Times','',15);
	$pdf->Ln(15);

	$pdf->Cell(55);	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'INSTRUCTOR',1,0,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,10,'SAMPLE',1,1,'C');
	
	$pdf->Cell(55);	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'TOTAL AVERAGE',1,0,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,10,'SAMPLE',1,1,'C');

	$pdf->Cell(55);	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'REMARK',1,0,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,10,'SAMPLE',1,1,'C');

	$pdf->Cell(55);	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'SEMESTER',1,0,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,10,'SAMPLE',1,1,'C');

	$pdf->Cell(55);	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'SCHOOL YEAR',1,0,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,10,'SAMPLE',1,1,'C');

	$pdf->Cell(55);	
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'RATING PERIOD',1,0,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,10 ,'SAMPLE',1,1,'C');

	$pdf->Output();//Outputs pdf file to browser
?>