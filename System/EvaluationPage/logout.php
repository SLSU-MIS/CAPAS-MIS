<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /CAPAS-MIS/LoginStudent/index.php"); // Redirecting To Home Page
}
?>