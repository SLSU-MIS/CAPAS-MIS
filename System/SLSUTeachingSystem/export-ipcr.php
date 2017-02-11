<?php
	
	require ("db/connect3.php");

	session_start();
	$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php

		$sql="SELECT * FROM statement WHERE name='$prof'";
		$query=mysqli_query($conn, $sql); 

				if($query){
					$row=mysqli_fetch_array($query, MYSQLI_NUM); 
						$name=$row[0];
						$unit=$row[1];
						$period1=$row[2];
						$period2=$row[3];
			}

	?>


	<?php
	
	require ("db/connect3.php");

	$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php

		$sql="SELECT * FROM review WHERE name='$prof'";
		$query=mysqli_query($conn, $sql); 

				if($query){
					$row=mysqli_fetch_array($query, MYSQLI_NUM); 
						$reviewby=$row[2];
						$reviewdate=$row[3];
						$approveby=$row[4];
						$approvedate=$row[5];
			}

	?>

	<?php
	
	require ("db/connect3.php");

	$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php

		$sql="SELECT * FROM functions WHERE name='$prof'";
		$query=mysqli_query($conn, $sql); 

				if($query){
					$row=mysqli_fetch_array($query, MYSQLI_NUM); 
						$strategicno=$row[0];
						
			}

	?>

	<?php
	
	require ("db/connect3.php");

	$prof=$_SESSION['sess_name'];  //In order to get the value of the selected professor in rating.php

		$sql="SELECT * FROM approval WHERE name='$prof'";
		$query=mysqli_query($conn, $sql); 

				if($query){
					$row=mysqli_fetch_array($query, MYSQLI_NUM); 
						$name=$row[1];
						$discussed=$row[2];
						$discusseddate=$row[3];
						$assesed=$row[4];
						$asseseddate=$row[5];
						$final=$row[6];
						$finaldate=$row[7];
						
			}

	?>



	
	<?php

					
				
				




	//$profs=$_SESSION['prof'];  //In order to get the value of the selected professor in rating.php


	require ("fpdf/fpdf.php");//path of fpdf file from pdf directory 
	$pdf=new FPDF();//Object for FPDF class wherein you can use the object $pdf to create pdfs,images etc.
	//There are available functions on the fpdf library downloaded type localhost/pdf/ on the browser
	//Functions used in creating pdf
	$pdf->addPage('L');
	$pdf->SetTitle("IPCR");

	// Page footer



	$pdf->Image('img/slsu.png',20,20,30,30); // 1#: x axis 2#: y axis 3#: width 4#: height of image
		
	if($unit=="College of Arts and Sciences"){
	$pdf->Image('img/cas.png',165,20,30,30);
	}

	if($unit=="College of Agriculture"){
	$pdf->Image('img/cag.png',165,20,30,30);
	}

	if($unit=="College of Allied Medicine"){
	$pdf->Image('img/cam.png',165,20,30,30);
	}

	if($unit=="College of Engineering"){
	$pdf->Image('img/cen.png',250,20,30,30);
	}

	if($unit=="College of Industrial Technology"){
	$pdf->Image('img/cit.png',165,20,30,30);
	}

	if($unit=="College of Business Administration"){
	$pdf->Image('img/cba.png',165,20,30,30);
	}

	if($unit=="College of Teacher Education"){
	$pdf->Image('img/cte.png',165,20,30,30);
	}
	$pdf->Cell(0,15,'',0,1); 	
	
	//FOR A CELL 
	//$pdf->Cell(width, height, text, border, position-next-cell, alignment);
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,5,'Republic of the Philippines',0,1,'C'); //
	$pdf->SetFont('Times','B',12);	
	$pdf->Cell(0,5,'SOUTHERN LUZON STATE UNIVERSITY',0,1,'C');
	$pdf->SetFont('Times','',12);
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,5,'Lucban, Quezon',0,1,'C');
	$pdf->Ln(10);

	$pdf->SetFont('Times','UB',15);
	$pdf->Cell(0,5,"INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW(IPCR)",0,1,'C');
	
	$pdf->SetFont('Times','',15);
	$pdf->Ln(15);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(0,5,"I $name, of the $unit, commit to deliver and agree to be rated on the attainment
	of the following targets in accordance with the indicated measures",0,1,'C'); //
	$pdf->Cell(0,5,"for the period $period1 to $period2",0,1,'C'); //
	$pdf->Ln(15);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'Reviewed By:',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'Date:',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'Approved By:',1,0,'C');	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'Date:',1,1,'C');

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,"$reviewby",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,"$reviewdate",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,"$approveby",1,0,'C');	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,"$approvedate",1,1,'C');	

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'Immediate Supervisor',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'University President',1,0,'C');	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(65,5,'',1,1,'C');

	$pdf->Ln(5);

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Output',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Success Indicator(Target+Measure)',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Actual Accomplishments',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"Rating",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,"Remarks",1,1);


	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'Subject',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,'',1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"Q      -      E      -      T      -      A      ",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,'',1,1);

	$pdf->Cell(10);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(70,5,'STRATEGIC NO:',0,1);

	$pdf->Ln(5);

	

	$prof=$_SESSION['sess_name'];
	mysql_connect("localhost","root");
	mysql_select_db("capas_ipcrdb");
	$res=mysql_query("SELECT * FROM functions WHERE name='$prof'");
	while($row=mysql_fetch_array($res))
	{


   

   $strategicno= $row['strategic_no'];
   $name= $row['name'];
   $subject= $row['subject'];
   $success= $row['success_indicator'];
   $actual= $row['actual'];
   $Q= $row['Q'];
   $E= $row['E'];
   $T= $row['T'];
   $A= $row['A'];
   $remarks= $row['remarks'];



	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$subject",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$success",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$actual",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(55,5,"$Q      |      $E      |      $T      |      $A      ",1,0);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(40,5,"$remarks",1,1);

    }

	$pdf->Ln(15);
    $pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Discussed with:',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Date:',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Assessed By:',1,0,'C');	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Date:',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(45,5,'Final Rating By:',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Date:',1,1,'C');

    $pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,"$discussed",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,"$discusseddate",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,"$assesed",1,0,'C');	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,"$asseseddate",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(45,5,"$final",1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,"$finaldate",1,1,'C');

	$pdf->Cell(10);	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Employee',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'Immediate Supervisor',1,0,'C');	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(45,5,'Head Office',1,0,'C');
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(43,5,'',1,1,'C');

	

	$pdf->Ln(5);
			

	
	
	
	


	

	
	

	$pdf->Output();//Outputs pdf file to browser


?>