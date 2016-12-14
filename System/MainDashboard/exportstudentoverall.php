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
	$pdf->Cell(0,5,"LIST OF INSTRUCTORS STUDENT OVERALL EVALUATION",0,1,'C');

	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,"$college",0,1,'C');
	$pdf->Cell(0,5,"$department",0,1,'C');

	$pdf->SetFont('Arial','B',10);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(55,7,"Instructor Name");
	$pdf->Cell(55,7,"Subject Teaches");
	$pdf->Cell(55,7,"Overall Average");
	$pdf->Cell(55,7,"Overall Rating");

	$pdf->Ln();
	$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
	$pdf->Ln();

        include ('db/db.php');
        $sql = "SELECT * FROM answer WHERE instructor_college = '".$college."' AND instructor_dept = '".$department."'";
        $result = mysql_query($sql);

        while($rows=mysql_fetch_array($result))
        {
            $instructorname = $rows[2];
            $subject = $rows[5];
           

             $query = "SELECT AVG(average) FROM answer WHERE instructor_college = '".$college."' AND instructor_dept = '".$department."' AND type='Student Evaluation'";      
		     $result = mysql_query ($query); // Run the query.
		     $row= mysql_fetch_array($result);
		     $tabs=$row[0];
		     $calculated=$tabs;

		     if($tabs>="1.0000" && $tabs <="1.9999"){

		    $RATING= "Poor";
		    }
		     else if($tabs>="2.0000"&& $tabs <="2.9999"){

		      $RATING= "Fair";


		  }
		  else if($tabs>="3.0000" && $tabs<="3.9999"){

		     $RATING= "Satisfactory";


		  }

		   else if($tabs>="4.0000"&& $tabs<="4.9999"){

		     $RATING= "Very Satisfactory";


		  }

		  else if($tabs=="5.0000"){

		     $RATING= "Outstanding";


		  }

		  else{

		    $RATING= "";
		  }


            $pdf->Cell(55,7,$instructorname,1);
            $pdf->Cell(55,7,$subject,1);
            $pdf->Cell(55,7,$tabs,1);
            $pdf->Cell(30,7,$RATING,1);
            $pdf->Ln(); 
        }
$pdf->Output();
?>