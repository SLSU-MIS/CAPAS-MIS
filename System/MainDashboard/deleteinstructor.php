<?php

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'capas_db'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$id=$_GET['ins_id'];
	$result = $db->prepare("DELETE FROM instructor_evaluator WHERE ins_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: evaluatorinstructor.php");
?>