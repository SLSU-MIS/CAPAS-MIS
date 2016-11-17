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
	
		require ("db/connect2.php");
		$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php
		$sql2="SELECT * FROM teaching_load WHERE name='$prof'";
		$query2=mysqli_query($conn, $sql2); 


          while(mysqli_fetch_array($query2,MYSQLI_NUM));
        {

            $subject = $row[2];
            $time = $row[3];
            $day = $row[4];
            $room = $row[5];
            $course = $row[6];
            $hrs_week = $row[7];
            $units = $row[8];
            $class_size = $row[9];

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
	$pdf->Cell(0,5,"FACULTY TEACHING LOAD",0,1,'C');
	
	$pdf->SetFont('Times','',15);
	$pdf->Ln(15);

	
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"COLLEGE:  $college",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,5,"SCHOOL YEAR:  $sy",0,1);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"LOCATION:  $location",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,5,"SEMESTER:  $sem",0,1);
	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"NAME:  $name",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,5,"RANK:  $rank",0,1);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"HOME ADDRESS:  $address",0,1);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"MONTH/YEAR APPOINTMENT:  $appointment",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,5,"Year of Service in SLSU:  $yearservice",0,1);
	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,'EDUCATIONAL BACKGROUND:',0,1);
	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'Degree/Earned(BS/MA/Ph.D):',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'Year Graduated/Units Earned:',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,'SCHOOL:',1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,'',1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,'',1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,'',1,1);
	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"EMPLOYMENT STATUS:  $status",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"CIVIL STATUS: $civil_status",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"DATE OF BIRTH: $birth",0,1);
	$pdf->Ln(5);


	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'Subject/s',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'Time:',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'Day',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'Room',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'Course',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(30,5,'Contact Hrs/Week',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'Units',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(30,5,'Class Size',1,1);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,"$subject",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,"$time",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(30,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(20,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(30,5,'',1,1);
	$pdf->Ln(5);



      




	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"Contact Hours per Week:  $contact_hours",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,5,"No. Of Preparations:  $preparations",0,1);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,"Unit per Week:  $unit",0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,5,"Excess Load:  $excess_load",0,1);
	$pdf->Ln(5);
	
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(110,5,'LOCAL DESIGNATION/OTHER ASSIGNMENT',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'ETL/HOURS PER WEEK',1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Designation',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$designation",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"$designation_hours",1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Committee Work',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$committee",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"$committee_hours",1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Research Work',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$research",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"$research_hours",1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Extension',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$extension",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"$extension_hours",1,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Consultation Time',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$consultation",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,"$consultation_hours",1,1);
	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(120,5,'Date Accomplished:',0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(50,5,"$prof",0,1,'C');

	$pdf->Cell(132);	
	$pdf->SetFont('Arial','',5);
	$pdf->Cell(0,5,'______________________________________________',0,1);


	$pdf->Cell(132);	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,'Signature Over Printed Name',0,1);
	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(120,5,'Noted By:',0,1);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,'___________________________________',0,1);
	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(120,5,'Dean,College of:',0,1);
	$pdf->Ln(5);

	$pdf->Cell(132);	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,5,'Approved:',0,1);
	$pdf->Ln(2);

	$pdf->Cell(132);	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,5,'______________________',0,1);

	$pdf->Cell(132);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(0,5,'Vice President , Academic Affairs',0,1);
	$pdf->Ln(15);


	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(150,10,'AA-INS-1.02F1,Rev.0',0,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,10,'Page 1 of 3',0,1);
	
	


	

	
	

	$pdf->Output();//Outputs pdf file to browser


?>