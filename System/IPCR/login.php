<?php

if(isset($_SESSION['login_user'])){

header("location: index.php");
}
?>

<?php    


session_start();


          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'capas_db');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



error_reporting(0); 

        if (isset($_REQUEST['login'])) //here give the name of your button on which you would like    //to perform action.
        {

        // here check the submitted text box for null value by giving there name.
  

        if($_REQUEST['username']=="" || $_REQUEST['password']=="")
           {
  


        $error1= " Field must be filled";
  }
  else
  {
     $sql1= "select * from instructor_evaluator where ins_id= '".$_REQUEST['username']."' &&  ins_pass ='".$_REQUEST['password']."'";
    $result=mysql_query($sql1)
      
      or exit("Sql Error".mysql_error());

      $num_rows=mysql_num_rows($result);
    
     if($num_rows>0)
     {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
       
      $_SESSION['login_user']=$_REQUEST['username']; 
 
          header("location:index.php");
         Echo "You have logged in successfully";  
        }
      else
    {
       $error2= "Instructor Number or Password is Incorrect";
    }
  }
} 

//session

 




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CAPAS-IPCR</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="login.php">
		        <h2 class="form-login-heading">IPCR Login Credentials</h2>
		        <div class="login-wrap">
               
		            <input type="text" class="form-control" placeholder="ID Number" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
                <?php if (isset($error1)) {echo "<div class=\"alert alert-danger\"><strong>Note: </strong>" .$error1. "</div>"; }?>
                                <?php if (isset($error2)) {echo "<div class=\"alert alert-danger\"><strong>Note: </strong>" .$error2. "</div>"; }?>
		            <label class="checkbox">
		            	<span class="pull-right">
		                    <a data-toggle="modal" href="/CAPAS-MIS/index.html"> Back to Main Menu</a>
		
		                </span>
		                
		            </label>
		            <button class="btn btn-theme btn-block" type="submit" name="login"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		           
		
		        </div>
		
		          
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
