<!DOCTYPE html>
<html>
<head>
    <title>CAPAS-MIS||LOG-IN ERROR</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>


<body>

<style>
    
    body{
      background-image: url("/CAPAS-MIS/System/image/1.jpg");
      background-size: 100%;

    }

    div{

      margin-top: 75px;
      margin-right: 0px;
      margin-bottom: 25px;
      margin-left: 25px;
     
    }

    .alert alert-danger{
       opacity: 0.4;
    }

    .img-rounded {

      border: 1px solid green ;

    }

</style>

<div class="row">
  <div class="col-md-12">
    <div class="alert alert-danger" >

      <img class="img-rounded" src="/CAPAS-MIS/System/image/slsulogo2.png" alt="Rounded image"/>
  


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
  

        if($_REQUEST['admin']=="" || $_REQUEST['password']=="")
           {
  


        echo " Field must be filled";
  }
  else
  {
     $sql1= "select * from admin where admin_id= '".$_REQUEST['admin']."' &&  admin_password ='".$_REQUEST['password']."'";
    $result=mysql_query($sql1)
      
      or exit("Sql Error".mysql_error());

      $num_rows=mysql_num_rows($result);
    
     if($num_rows>0)
     {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
       
      $_SESSION['login_admin']=$_REQUEST['admin']; 
 
          header("location: index.php");
         Echo "LOG-IN SUCCESSFULLY";  
        }
      else
    {
   
      echo "USERNAME OR PASSWORD IS INCORRECT";
     
    }
  }
} 

//session

?>
      <a class="btn btn-danger" href="/CAPAS-MIS/System/index.php">GO BACK TO LOGIN</a>
    </div>
  <div>
</div>

</body>

</html>