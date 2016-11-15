<?php
	
	require ("db/connect2.php");

	session_start();
	$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php

		$sql="SELECT * FROM basic_information WHERE name='$prof'";
		$query=mysqli_query($conn, $sql); 

				if($query){
					$row=mysqli_fetch_array($query, MYSQLI_NUM); 
						$name=$row[0];
						$rank=$row[1];
						$address=$row[2];
						$appointment=$row[3];
						$yearservice=$row[4];

			}

	?>

	<?php


		require ("db/connect2.php");

		
		$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php


		$sql2="SELECT * FROM school_info WHERE name='$prof'";
		$query2=mysqli_query($conn, $sql2); 

				if($query2){
					$row=mysqli_fetch_array($query2, MYSQLI_NUM); 
						$college=$row[2];
						$sy=$row[3];
						$location=$row[4];
						$sem=$row[5];
						

							}
						

	?>

	<?php


		require ("db/connect2.php");

		
		$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php


		$sql2="SELECT * FROM employee_info WHERE name='$prof'";
		$query2=mysqli_query($conn, $sql2); 

				if($query2){
					$row=mysqli_fetch_array($query2, MYSQLI_NUM); 
						$status=$row[2];
						$civil_status=$row[3];
						$birth=$row[4];
					
						

							}
						

	?>

	<?php


		require ("db/connect2.php");

		
		$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php


		$sql2="SELECT * FROM teaching_load2 WHERE name='$prof'";
		$query2=mysqli_query($conn, $sql2); 

				if($query2){
					$row=mysqli_fetch_array($query2, MYSQLI_NUM); 
						$contact_hours=$row[2];
						$preparations=$row[3];
						$unit=$row[4];
						$excess_load=$row[5];
					
						

							}
						

	?>


	<?php


		require ("db/connect2.php");

		
		$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php


		$sql2="SELECT * FROM assignment WHERE name='$prof'";
		$query2=mysqli_query($conn, $sql2); 

				if($query2){
					$row=mysqli_fetch_array($query2, MYSQLI_NUM); 
						$designation=$row[2];
						$designation_hours=$row[3];
						$committee=$row[4];
						$committee_hours=$row[5];
						$research=$row[6];
						$research_hours=$row[7];
						$extension=$row[8];
						$extension_hours=$row[9];
						$consultation=$row[10];
						$consultation_hours=$row[11];

						

							}
						

	?>

	<?php

					
				
				




	//$profs=$_SESSION['prof'];  //In order to get the value of the selected professor in rating.php


	require ("fpdf/fpdf.php");//path of fpdf file from pdf directory 
	$pdf=new FPDF();//Object for FPDF class wherein you can use the object $pdf to create pdfs,images etc.
	//There are available functions on the fpdf library downloaded type localhost/pdf/ on the browser
	//Functions used in creating pdf
	$pdf->AddPage('p','LEGAL');
	$pdf->SetTitle("Faculty Teaching Load");

	// Page footer



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
	$pdf->Ln(10);

	$pdf->SetFont('Times','UB',15);
	$pdf->Cell(0,5,"INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW(IPCR)",0,1,'C');
	
	$pdf->SetFont('Times','',15);
	$pdf->Ln(15);

	
	
	
	


	

	
	

	$pdf->Output();//Outputs pdf file to browser


?>