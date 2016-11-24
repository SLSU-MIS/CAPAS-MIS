<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /CAPAS-MIS/index.html"); // Redirecting To Home Page
}
?>