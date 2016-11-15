<?php

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'capas_db'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$id=$_GET['dean_id'];
	$result = $db->prepare("DELETE FROM dean_evaluator WHERE dean_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: evaluatordean.php");
?>