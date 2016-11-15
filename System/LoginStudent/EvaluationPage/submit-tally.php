<?php
   error_reporting(0);
   session_start();
   require 'db/connect.php';
   
   if(isset($_SESSION['student_id'])){
      $userId = $_SESSION['student_id'];
      $fname = $_SESSION['student_name'];
       $college = $_SESSION['college_id'];
       $course = $_SESSION['course_id'];
       $year = $_SESSION['year_level'];
       $sem= "sem_01";
       $SY = "2016-2017";
       $RP = "August-December";

      
   }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CAPAS-ADMIN | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="ajax/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="ajax/ionic/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>

<style>
      

      .row hr{
         width: 100%;
      }

      .selectpicker{
         width:300px;
         margin: 0 auto;
      }

    </style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SLSU</b>CAPAS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SLSU</b>-CAPAS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
    
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/slsulogo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">LOGOUT</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/slsulogo.png" class="img-circle" alt="User Image">

                <p>
                  CAPAS-ADMINISTRATOR
                  <small>Revision May 2016</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
               
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/slsulogo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $fname;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Welcome Student!</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MANAGEMENT TABS</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Profile Information</span>
          </a>
          
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>EVALUATE</span>
          </a>
          
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Evaluation
        <small>(Fill-up Forms)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
         <h3>EVALUATION PAGE</h3>
        </section>
      </div>

      <!--EVALUATION PAGE-->
      <div class="row">

            <div class="col-sm-2">
                  <img src="img/slsu.png" alt="logo" title="logo" />
            </div>
            <div class="col-sm-8" align="center">
                  <h1>SOUTHERN LUZON STATE UNIVERSITY<br />COLLEGE OF ENGINEERING</h1>
                  <h3>Online Qualitative Contribution Evaluation for Instruction/Teaching <br />Effectiveness of COE Instructors<br />
                   Rating Period: <?php echo $RP;?><br />
                   School Year: <?php echo $SY;?></h3>
                   <hr/>
            </div>
            <div class="col-sm-2">
                  <img src="img/cen.png" alt="logo" title="logo" /> 
            </div> 
      </div>

      <div class="jumbotron alert-success" align="center">
              <h3>SUCCESSFULLY EVALUATED!</h3>
            </div>
            <h2>PROFESSORS EVALUATED: </h2>
    <?php 

    /**
    **this is the table where the student can see his or her evaluated professors
    */
    $i=0;
    $sql = "SELECT ins_name,subj_code, evaluated FROM stud_prof WHERE student_id='$userId' AND evaluated='1'";
    $query = mysqli_query($conn, $sql);

      
      echo "<table class=\"table\">";
      echo "<th><center>PROFESOR NAME</center></th>";
      echo "<th><center>SUBJECT</center></th>";
      echo "<th><center>EVALUATED</center></th>";
      while($row = mysqli_fetch_array($query, MYSQLI_NUM)){
      echo "<tr>";
      echo "<td>"."<center>".$row[0]."</center>"."</td>";  
      echo "<td>"."<center>".$subjCode=$row[1]."</center>"."</td>";  
        $eval_d=$row[2];

        if($eval_d=='1'){
          $eval="DONE"; 
          echo "<td>"."<center>".$eval."</center>"."</td>";
          $i++;
        }else{
          $eval="";
          echo "<td>"."<center>".$eval."</center>"."</td>";

        }

          
          echo "</tr>";
      }//endof while
      echo "</table>";

      $sql="SELECT COUNT(ins_id) FROM stud_prof WHERE student_id='$userId'";
        $query= mysqli_query($conn, $sql);
         if($query){
          $row = mysqli_fetch_array($query); 
            $sum = $row[0];
            echo $sum. "<br />";
          }
            echo $i;
          
          if($i==$sum){
              $sql="UPDATE student_evaluator SET activate='1' WHERE student_id='$userId'";
                $ok=mysqli_query($conn, $sql);
                if($ok){
                    echo "YOU ARE DONE";
                }

          }


      
    ?>
      <div class="link-wrapper"><h3><a href="student.php">Click here to evaluate another professor</a></h3></div>
      
      </form>
   </div>

  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016 <a href="#">SLSU</a>.</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
