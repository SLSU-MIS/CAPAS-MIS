<?php
session_start();
@ $db = mysqli_connect('127.0.0.1', 'root', '', 'capas_db');

if (mysqli_connect_errno()) {
  echo "failed to connect to database";
  exit;
}

$userId = $_SESSION['user'];
$professor = $_REQUEST['professor'];
$college =$_REQUEST['ins_college'];
$department =$_REQUEST['ins_dept'];



$a1 = $_REQUEST['a1'];
$a2 = $_REQUEST['a2'];
$a3 = $_REQUEST['a3'];
$a4 = $_REQUEST['a4'];
$a5 = $_REQUEST['a5'];

$b1 = $_REQUEST['b1'];
$b2 = $_REQUEST['b2'];
$b3 = $_REQUEST['b3'];
$b4 = $_REQUEST['b4'];
$b5 = $_REQUEST['b5'];

$c1 = $_REQUEST['c1'];
$c2 = $_REQUEST['c2'];
$c3 = $_REQUEST['c3'];
$c4 = $_REQUEST['c4'];
$c5 = $_REQUEST['c5'];

$d1 = $_REQUEST['d1'];
$d2 = $_REQUEST['d2'];
$d3 = $_REQUEST['d3'];
$d4 = $_REQUEST['d4'];
$d5 = $_REQUEST['d5'];




$SUM=$a1+$a2+$a3+$a4+$a5+$b1+$b2+$b3+$b4+$b5+$c1+$c2+$c3+$c4+$c5+$d1+$d2+$d3+$d4+$d5;
$AVERAGE=$SUM/20;




  if($AVERAGE>="1.0000" && $AVERAGE <="1.9999"){

    $RATING= "Poor";
  }
  else if($AVERAGE>="2.0000"&& $AVERAGE <="2.9999"){

    $RATING= "Fair";


  }
  else if($AVERAGE>="3.0000" && $AVERAGE<="3.9999"){

     @$RATING= "Satisfactory";


  }

   else if($AVERAGE>="4.0000"&&  $AVERAGE<="4.9999"){

     $RATING= "Very Satisfactory";


  }

  else{

    $RATING= "Outstanding";
  }



$activate = "1";
$type="Peer Evaluation";

$query = "INSERT INTO answer2(instructor_name,instructor_evaluatee,instructor_college,instructor_dept,A1,A2,A3,A4,A5,B1,B2,B3,B4,B5,C1,C2,C3,C4,C5,D1,D2,D3,D4,D5,average,rating,type) values 
('".$professor."','".$professor."','".$college."','".$department."','".$a1."','".$a2."','".$a3."','".$a4."','".$a5."', '".$b1."','".$b2."','".$b3."','".$b4."','".$b5."'
	, '".$c1."','".$c2."','".$c3."','".$c4."','".$c5."', '".$d1."','".$d2."','".$d3."','".$d4."','".$d5."','".$AVERAGE."','".$RATING."','".$type."')";

$result = $db->query($query);

$queryup = "UPDATE instructor_evaluate SET evaluated='".$activate."' WHERE instructor_id = '".$userId."' AND instructor_name = '".$professor."'";

$resultup = $db->query($queryup);

$db->close();

if ($result && $resultup) {
	header("Location: done2.php");
}
else
	echo "ERRROR";

?>