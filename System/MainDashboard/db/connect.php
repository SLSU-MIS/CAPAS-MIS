<?php

$conn = new mysqli('localhost', 'root', '', 'capas_db');


if($conn->connect_errno){
	echo $db->connect_error;
	//die( '<br />Sorry we are having some problems');

}

?>