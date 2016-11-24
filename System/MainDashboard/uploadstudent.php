<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }
?>
<?php    


          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'capas_db');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<title>Upload page</title>
</head>
<style>

    body{
          background-image: url("/CAPAS-MIS/image/1.jpg");
          background-size: 100%;

        }

    .container{

      margin-top: 150px;
      margin-right: 0px;
      margin-bottom: 25px;
      margin-left: 75px;

    }



</style>
<body>



        <div class="row">
            <div class="col-md-12">

                <div class="container">

                    <div class="alert alert-success" role="alert" align="center">
                            <!--PAGE BODY-->
                                <div class="alert alert-danger" role="alert" align="center">
                                    <h3>Upload DATA LIST</h3>
                                </div>

                            <?php
                     



                                         
                                        //Upload File
                                        if (isset($_POST['submit'])) {
                                            if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
                                                echo "<h1>" . "File ". $_FILES['filename']['name'] ." Uploaded Successfully!." . "</h1>";
                                                echo "<h2>Displaying contents:</h2>";


                                                readfile($_FILES['filename']['tmp_name']);
                                            }
                                         
                                            //Import uploaded file to Database
                                            $handle = fopen($_FILES['filename']['tmp_name'], "r");
                                         
                                            while (($data = fgetcsv($handle, 15000, ",")) !== FALSE) {
                                            
                                            $import="INSERT into student_evaluator (student_last,student_id,student_middle,student_college,student_dept,student_year,student_section,student_pass) 
                                            values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
                                         
                                                mysql_query($import) or die(mysql_error());
                                            }
                                         
                                            fclose($handle);
                                         
                                            
                                            print "Import done";
                                         
                                            //view upload form
                                        }else {
                                         
                                            print "Browse CSV File:<br />\n";
                                         
                                            print "<form enctype='multipart/form-data' action='uploadstudent.php' method='post'>";
                                         
                                            print "<h3>File name to import:</h3><br />\n";
                                         
                                            print "<input size='50' type='file' name='filename'><br />\n";
                                         
                                            echo "<div class='row'>";
                                            print "<input class='btn btn-success' type='submit' name='submit' value='Upload'></form>";
                                            echo "&nbsp;";
                                            print "<a href='evaluatorstudent.php' class='btn btn-warning'>Back</a>";
                                            echo "<div>";
                                        }
                                         



                                        ?>


                            <!--END-->
                    </div>
                    
                

                </div>     
            </div>
        </div>


<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
