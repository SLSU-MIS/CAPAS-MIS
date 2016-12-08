<?php
session_start();
@ $db = mysqli_connect('127.0.0.1', 'root', '', 'capas_db');

if (mysqli_connect_errno()) {
  echo "failed to connect to database";
  exit;
}

$studentid = $_SESSION['user'];
$professor = $_REQUEST['professor'];
$subject =$_REQUEST['subject'];

$a1 = $_REQUEST['a1'];
$a2 = $_REQUEST['a2'];
$a3 = $_REQUEST['a3'];
$a4 = $_REQUEST['a4'];
$a5 = $_REQUEST['a5'];



$activate = "1";

$query = "INSERT INTO answer(student_name,instructor_name,subject,A1,A2,A3,A4,A5) values ('".$studentid."', '".$professor."','".$subject."', '".$a1."','".$a2."','".$a3."','".$a4."','".$a5."')";

$result = $db->query($query);

$queryup = "UPDATE student_evaluate SET evaluated='".$activate."' WHERE student_id = '".$studentid."' AND instructor_name = '".$professor."'";

$resultup = $db->query($queryup);

$db->close();

if ($result && $resultup) {
	header("Location: done.php");
}
else
	echo "ERRROR";

?>