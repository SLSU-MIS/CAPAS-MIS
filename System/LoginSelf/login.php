<?php    


session_start();


          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'instruction_sysdb');
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
     $sql1= "select * from user where user_number= '".$_REQUEST['username']."' &&  user_password ='".$_REQUEST['password']."'";
    $result=mysql_query($sql1)
      
      or exit("Sql Error".mysql_error());

      $num_rows=mysql_num_rows($result);
    
     if($num_rows>0)
     {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
       
      $_SESSION['login_user']=$_REQUEST['username']; 
 
          header("location:system.php");
         Echo "You have logged in successfully";  
        }
      else
    {
      echo "username or password incorrect";
    }
  }
} 

//session

 




?>