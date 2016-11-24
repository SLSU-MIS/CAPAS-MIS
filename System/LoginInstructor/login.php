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
  


        echo " Field must be filled";
  }
  else
  {
    
    $sql = "SELECT activate from student_evaluator WHERE student_id='".$_REQUEST['username']."'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $row = mysqli_fetch_array($query, MYSQLI_NUM);
        $active = $row[0];

            if($active == '1'){
                echo "You already took the Evaluation for this semester";
            }
    }
 

     $sql1= "select * from student_evaluator where student_id= '".$_REQUEST['username']."' &&  student_pass ='".$_REQUEST['password']."'";
    $result=mysql_query($sql1)
      
      or exit("Sql Error".mysql_error());

      $num_rows=mysql_num_rows($result);
    
     if($num_rows>0)
     {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
       
      $_SESSION['login_student']=$_REQUEST['username']; 
 
          header("location: /CAPAS-MIS/EvaluationPage/student.php");
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