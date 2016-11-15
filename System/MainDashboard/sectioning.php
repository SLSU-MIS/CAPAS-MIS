<?php
  error_reporting(0);
  session_start();
  include('session.php');
  require 'db/connect.php';


    $result="SELECT section_description FROM section";
    $query = mysqli_query($conn,$result); 
    $option = "CHOOSE SECTION";   
      
      while ($row = mysqli_fetch_array($query)){ 
      $option = $option."<option>$row[0]</option>";
      } 


  if (isset($_POST['add'])) {
    $stud =  $_POST['student'];
    $sec1 =  $_POST['sec1'];
    $sec2 =  $_POST['sec2'];
    $sec3 = $_POST['sec3'];
    //echo $stud;

        //converts section_description into section_id1
        $sql="SELECT section_id FROM section WHERE section_description='$sec1'";
        $query=mysqli_query($conn, $sql);

        if($query){
          while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
            $sec_id1=$row[0];
          }

        }

        //converts section_description into section_id2
        $sql="SELECT section_id FROM section WHERE section_description='$sec1'";
        $query=mysqli_query($conn, $sql);

        if($query){
          while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
            $sec_id2=$row[0];
          }

        }

        //converts section_description into section_id3
        $sql="SELECT section_id FROM section WHERE section_description='$sec1'";
        $query=mysqli_query($conn, $sql);

        if($query){
          while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
            $sec_id3=$row[0];
          }

        }

      $result = "SELECT student_id FROM student_evaluator where student_id='$stud'";
      $query = mysqli_query($conn,$result); 
      
      if($query){
        $row = mysqli_fetch_array($query, MYSQLI_NUM);
          $compare = $row[0];
          //echo $compare;
        }
    


      if ($compare == $stud) {
        if($sec1 == "CHOOSE SECTION" ){
          $okay1="";

        }else if (isset($sec1) && $sec1 != "CHOOSE SECTION") {  

        $sql = "INSERT INTO student_section (stud_id,section_id,section_description,sem_id,school_year) Values('$stud','$sec_id1','$sec1','$sem','$sy')";
        $query = mysqli_query($conn,$sql);
          if($query){
            $okay1= "Okay";
          }
        }

        //section2
        if($sec2 == "CHOOSE SECTION" ){
          $okay2="";

        }else if (isset($sec2) && $sec2 != "CHOOSE SECTION") {  

        $sql = "INSERT INTO student_section(stud_id,section_id,section_description,sem_id,school_year) Values('$stud','$sec_id2','$sec2','$sem','$sy')";
        $query = mysqli_query($conn,$sql);
          if($query){
            $okay2= "Okay";
          }
        }
        
        if($sec3 == "CHOOSE SECTION" ){
          $okay3="";

        }else if (isset($sec3) && $sec3 != "CHOOSE SECTION") {    

        $sql = "INSERT INTO student_section(stud_id,section_id,section_description,sem_id,school_year) Values('$stud','$sec_id3','$sec3','$sem','$sy')";
        $query = mysqli_query($conn,$sql);
          if($query){
            $okay3= "Okay";
          }
        }

        $note="SUCESSFULLY ADDED";

      }else if($compare != $stud){
        $note= "No Student ID Found";
      }
    
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
          <p>CAPAS-ADMINISTRATOR</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Active</a>
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
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>EVALUATORS</span>
            <i class="fa fa-angle-left pull-right"></i>
            <span class="label label-primary pull-right">4</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="evaluatorstudent.php"><i class="fa fa-circle-o"></i>STUDENT</a></li>
            <li><a href="evaluatorinstructor.php"><i class="fa fa-circle-o"></i>INSTRUCTOR</a></li>
            <li><a href="evaluatordean.php"><i class="fa fa-circle-o"></i>DEAN</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>ASSIGNMENT</span>
            <span class="label label-primary pull-right">4</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="assignstudent.php"><i class="fa fa-circle-o"></i>STUDENT</a></li>
            <li><a href="assignself.php"><i class="fa fa-circle-o"></i>SELF</a></li>
            <li><a href="assignpeer.php"><i class="fa fa-circle-o"></i>PEER</a></li>
            <li><a href="assigndean.php"><i class="fa fa-circle-o"></i>DEAN</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="sectioning.php">
            <i class="fa fa-files-o"></i>
            <span>SECTIONING</span>
           
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> 
            <span>RESULTS</span>
            <span class="label label-primary pull-right">4</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="resultstudent.php"><i class="fa fa-circle-o"></i>STUDENT</a></li>
            <li><a href="resultself.php"><i class="fa fa-circle-o"></i>SELF</a></li>
            <li><a href="resultpeer.php"><i class="fa fa-circle-o"></i>PEER</a></li>
            <li><a href="resultdean.php"><i class="fa fa-circle-o"></i>DEAN</a></li>
          </ul>
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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
          
        <?php if (isset($note)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$note. "</div>"; }?>
            <form role="form "method="post" action="sectioning.php">
            <table class="table">
            <tr>
            <td><label for="student"><h2>STUDENT ID</h2></label>
            <input type="text" name="student" required="required"></td>
            </tr>
            <tr>
              <td colspan="2"><h2>SELECT YOUR SECTION</h2></td>
            </tr>
            <tr>
              <td><select class="selectpicker show-pick form-control" name="sec1"><option><?php echo $option; ?></option></select>
              <td><?php echo $okay1;?></td>
            </tr>
            <tr>
              <td><select class="selectpicker show-pick form-control" name="sec2"><option><?php echo $option; ?></option></select>
              <td><?php echo $okay2;?></td>
            </tr>
            <tr>
              <td><select class="selectpicker show-pick form-control" name="sec3"><option><?php echo $option; ?></option></select>
              <td><?php echo $okay3;?></td>
            </tr> 
            </table>
            <input type="submit" name="add" class="btn btn-warning btn-md" value="Add" />

            </form>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      

          
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
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
