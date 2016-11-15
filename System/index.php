<?php
//include('MainDashboard/login.php'); // Includes Login Script

if(isset($_SESSION['login_admin'])){

header("location: MainDashboard/index.php");
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CAPAS Login</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>

    <style>
      body{

        background-image: url("image/1.jpg");
      }

    </style>


<div class="container">

  <div class="info">
    <h1>CAPAS-IES</h1>
    <br>
    <p>Instructors Evaluation System</p>
    
  </div>
</div>

<div class="form">

  <div class="thumbnail"><img src="image/slsulogo.png"/></div>

  
<!--EVALUATORS LOG-->
  <div>

  <form class="register-form" action="LoginStudent/index.php">
    <br>
    <div><h1>CHOOSE EVALUATION TYPE:</h1></div>
    <br>
    <button>STUDENT</button>
  </form>

  <br>

  <form class="register-form" action="LoginSelf/index.php">
    <button>SELF</button>
  </form>

  <br>

  <form class="register-form" action="LoginPeer/index.php">
    <button>PEER</button>
  </form>

  <br>

  <form class="register-form" action="LoginDean/index.php">
    <button>DEAN</button>
    <p class="message">Log as ADMIN? <a href="#">Sign In</a></p>
  </form>


<!--ADMIN LOGIN-->

  <form class="login-form" action="MainDashboard/login.php">
    <div><h1>ADMINISTRATION LOG-IN</h1></div>
    <br>
    <input type="text" placeholder="Admin ID" name="admin"/>
    <input type="password" placeholder="Admin Password" name="password"/>
    <button name="login">LOGIN</button>

    <br>
     <p class="message">EVALUATOR? <a href="#">Log-In</a></p>
     <p class="message">Return to <a href="/CAPAS-MIS/index.html">Main Menu</a></p>

    
  </form>



</div>


    <script src='jquery/jquery.min.js'></script>
    <script src="js/index.js"></script>

    
  </body>
</html>
