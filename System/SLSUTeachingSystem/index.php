
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SLSU-Instruction Admin System</title>
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
                            <h1><strong>SLSU-Instruction</strong>&nbsp;System </h1>
                            <div class="description">
                            	<p>
	                            	<strong> Instruction Log </strong><br>
                                   
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                                
               
                        		<div class="form-top-left">
                               <?php 

                                    $errors = array(
                                        1=>"No Instructors Details Recorded",
                                        2=>"Please login to access this area"
                                      );

                                    $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                    if ($error_id == 1) {
                                            echo "<div class=\"alert alert-danger\"><i class=\"fa fa-user-times fa-2x\" aria-hidden=\"true\"></i><strong>".$errors[$error_id]."</strong></div>";
                                        }elseif ($error_id == 2) {
                                            echo "<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-triangle fa-3x\" aria-hidden=\"true\"></i><strong>".$errors[$error_id]."</strong></div>";
                                        }
                               ?> 
                        			<h3>Instructor Credentials:</h3>
                            		<p>Enter Your Instructor No. and Password</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="login.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Instructor Number:</label>
			                        	<input type="text" placeholder="Instructor Number:" class="form-username form-control" id="form-username"
                                        name="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" placeholder="Password:" class="form-password form-control" id="form-password"
                                        name="password">
			                        </div>
			                        <button type="submit" class="btn" name="login">Log-In</button>
			                    </form>
                                <div class="row">
                                    <a href="/CAPAS-MIS/index.html"><--Return To Main Menu</a>
                                   
                                </div>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                       
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


