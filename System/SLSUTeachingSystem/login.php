<?php 
  require 'db/connect.php';

  session_start();

  $username = "";
  $password = "";

  
  if(isset($_POST['username'])){
    $username = $_POST['username'];
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];

  }
  
  echo $username ." : ".$password;

  

 $q = 'SELECT * FROM instructor_evaluator WHERE ins_id=:username AND ins_pass=:password';

  $query = $dbh->prepare($q);

  $query->execute(array(':username' => $username, ':password' => $password));


  if($query->rowCount() == 0){
    header('Location: index.php?err=1');
  }else{

    $row = $query->fetch(PDO::FETCH_ASSOC);

    session_regenerate_id();
    
    $_SESSION['sess_sess_username'] = $row['ins_id'];
    $_SESSION['sess_name'] = $row['ins_name'];

    echo $_SESSION['sess_name'];

    session_write_close();

    
     if( $_SESSION['sess_name'] == "ADMIN"){
      header('Location: system.php');
    }else{
      header('Location: system.php');
    }
  
    
    
  }


?>