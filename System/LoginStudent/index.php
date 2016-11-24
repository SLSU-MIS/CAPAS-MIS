<?php
    
error_reporting(E_ALL & ~E_NOTICE);
session_start();
include_once ("db/connect.php");

    
 
if(@$_POST['login']){
    $username = @$_POST['username'];
    $password = @$_POST['password'];


    $sql = "SELECT student_id, student_pass, student_name,student_college, student_dept, student_year 
    from student_evaluator WHERE student_id='$username' AND activate='0' LIMIT 1";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_array($query, MYSQLI_NUM);
        $user = $row[0];
        $pwd =  $row[1];
        $fname = $row[2];
        $lname = $row[3];
        $college = $row[4];
        $course = $row[5];
        $year = $row[6];
        /*echo $user;
        echo $pwd;
        echo $fname;
        echo $lname;
        echo $college;
        echo $course;
        echo $year;*/
    }
    $sql = "SELECT activate from student_evaluator WHERE student_id='$username'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_array($query, MYSQLI_NUM);
        $active = $row[0];

            if($active == '1'){
                $note= "You already took the Evaluation for this semester";
            }
    }

    if($username == $user && $password == $pwd){
        $_SESSION['student_id'] = $user;
        $_SESSION['student_name'] = $fname;
        $_SESSION['student_college'] = $college;
        $_SESSION['student_dept'] = $course;
        $_SESSION['student_year'] = $year;

        /**$sql= "UPDATE student SET activate='1' WHERE stud_id='$user'";
        $query=mysqli_query($conn, $sql);**/
        

       
        header('Location: EvaluationPage/student.php');

    }

        else{
             $note2 = "WRONG USERNAME OR PASSWORD,TRY AGAIN!";

        }
}







    
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SLSU-CAPAS</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>CAPAS-</strong>&nbsp;IES</h1>
                            <div class="description">
                            	<p>
	                            	<strong>Instructors Evaluation System</strong><br>
                                   
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <?php if (isset($note)) {echo "<div class=\"alert alert-danger\"><strong>Note: </strong>" .$note. "</div>"; }?>
                            <?php if (isset($note2)) {echo "<div class=\"alert alert-danger\"><strong>Note: </strong>" .$note2. "</div>"; }?>
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Student Credentials:</h3>
                            		<p>Enter Your Student Id No. and Password</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Instructor Number:</label>
			                        	<input type="text" placeholder="Student Number:" class="form-username form-control" 
                                        name="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" placeholder="Password:" class="form-password form-control" 
                                        name="password">
			                        </div>
			                        <input type="submit" name="login" class="btn btn-success btn-block btn-lg" value="Log-In" />
                                   
			                    </form>
                                <div class="row">
                                    <a href="/CAPAS-MIS/System/index2.html"><--Back</a>
                                   
                                </div>
		                    </div>


                        </div>
                    </div>

                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>