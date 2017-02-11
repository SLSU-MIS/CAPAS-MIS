<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }
?>

<?php
              error_reporting(0);
              $con = mysql_connect("localhost","root","");
              if (!$con) {
                die('Could not connect: ' . mysql_error());
              }

              mysql_select_db("capas_db", $con);

              $result = mysql_query("select count(1) FROM instructor_evaluator");
              $row = mysql_fetch_array($result);

              $total = $row[0];
              $number2= $total;

              mysql_close($con);
          ?>





<!--ADD ASSIGNED DATA TO DATABASE-->


          
          <?php

          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'capas_db');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


            if(isset($_POST)==true && empty($_POST)==false){

                  $instructorid=$_POST['instructorlistid'];
                  $instructorname=$_POST['instructorlistname'];
                  $instructorcollege=$_POST['instructorlistcollege'];
                  $instructordept=$_POST['instructorlistdept'];


                  $instructorid2=$_POST['instructorlistid2'];
                  $instructorname2=$_POST['instructorlistname2'];
                  $instructorcollege2=$_POST['instructorlistcollege2'];
                  $instructordept2=$_POST['instructorlistdept2'];

              foreach($instructorid as $a => $b){

                $type="Peer Evaluation";

               $sql = "INSERT INTO instructor_evaluate(instructor_id,instructor_name,instructor_evaluatee,instructor_college,instructor_dept,type) 
               VALUES('$instructorid[$a]','$instructorname[$a]', '$instructorname2[$a]','$instructorcollege[$a]','$instructordept[$a]','$type')";
               
               $res=mysql_query($sql);
                                     

               
                                        If($res)
                                            {
                                        $assignsuccess= "Assigning Peer Instructors to Instructor was Successul";
                                        
                                            }
                                          Else
                                          {
                                        $assignerror= "Error Assigning Peer Instructors";
                                        
                                          }
                   
              


            
            }
          }


            ?>

          <!--END ASSIGNMENT-->


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
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  
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
            <li><a href="uploadstudentcred.php"><i class="fa fa-circle-o"></i>UPLOAD STUDENTS CRED</a></li>
            <li><a href="uploadinstructorcred.php"><i class="fa fa-circle-o"></i>UPLOAD INSTRUCTORS CRED</a></li>
            <li><a href="assignstudent.php"><i class="fa fa-circle-o"></i>ASSIGN STUDENT</a></li>
            <li><a href="assignself.php"><i class="fa fa-circle-o"></i>ASSIGN SELF</a></li>
            <li><a href="assignpeer.php"><i class="fa fa-circle-o"></i>ASSIGN PEER</a></li>
            <li><a href="assigndean.php"><i class="fa fa-circle-o"></i>ASSIGN DEAN</a></li>
          </ul>
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
        ASSIGNMENT TAB
        <small>(Student)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Peer Assignment Tab</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Registered Instructor Evaluators</span>
              <span class="info-box-number"><?php echo $number2; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">


        <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ASSIGNING INSTRUCTORS TO BE EVALUATED BY PEER</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">INSTRUCTORS TO BE EVALUATE</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <form action="assignpeer.php?college=<?php echo $_REQUEST['slct1']; ?>" method="POST">
                    <thead>
                    <tr>
                      <th>COLLEGE</th>
                      <th>DEPARTMENT</th>
                      
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                      <th>
                      <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
                        <option value=""></option>
                            <option value="College of Agriculture">College of Agriculture</option>
                            <option value="College of Allied Medicine">College of Allied Medicine</option>
                            <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                            <option value="College of Business Administration">College of Business Administration</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Industrial Technology">College of Industrial Technology</option>
                            <option value="College of Teachers Education">College of Teachers Education</option>
                            
                      </select>
                      </th>
                            <th>
                               <select id="slct2" name="slct2"></select>
                            </th>
                            
                            <th>
                                 <input type="submit" name="submit" class="btn btn-success" value="SEARCH QUERY"/>
                           
                            </th>
                        </tr>
                    </thead>
                  

                    <tbody>
                       </form>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

                </div>
                <!-- /.box-body -->

              </div>
              <!-- /.box -->



              <!--SEARCH RESULT-->

        
        <div class="row">
          <!--STUDENT-->
          <div class="col-md-6">
            <div class="box box-primary box-solid">
                 <div class="box-header with-border">
                       <h3 class="box-title">SEARCHED INSRUCTORS </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">INSTRUCTOR RESULTS</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                      <form action="assignpeer.php" method="post">
                        <thead>
                          <th>Instructor ID</th>
                          <th>Instructor Name</th>
                          <th>College</th>
                          <th>Dept</th>
                        </thead>
                      <tbody>
                        </table>
           <?php
  
                      mysql_connect("localhost","root");
                      mysql_select_db("capas_db");
                      $res=mysql_query("SELECT * FROM instructor_evaluator where ins_college= '".$_REQUEST['slct1']."' && ins_dept= '".$_REQUEST['slct2']."'");
                      while($row=mysql_fetch_array($res))
                      {
                          ?>

            
                    <td><input type="text" name="instructorlistid[]" value="<?php echo $row['ins_id']; ?>"/></td>
                    <td><input type="text" name="instructorlistname[]" value="<?php echo $row['ins_name']; ?>"/></td>
                    <td><input type="text" name="instructorlistcollege[]" value="<?php echo $row['ins_college']; ?>"/></td>
                     <td><input type="text" name="instructorlistdept[]" value="<?php echo $row['ins_dept']; ?>"/></td>
                    
                          <?php
                      }
                      ?>
                    
                  


                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

                </div>
                <!-- /.box-body -->

              </div>
              <!-- /.box -->
          </div>
              <!--END STUDENT-->

               <!--STUDENT-->
          <div class="col-md-6">
            <div class="box box-primary box-solid">
                 <div class="box-header with-border">
                       <h3 class="box-title">SEARCHED EVALUATEE</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">INSTRUCTOR RESULTS</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <table class="table table-bordered table-striped">
                      <form action="assignpeer.php" method="post">
                        <thead>
                          <th>Instructor ID</th>
                          <th>Instructor Name</th>
                          <th>College</th>
                          <th>Dept</th>
                        </thead>
                      <tbody>
                        

           <?php


  
                      mysql_connect("localhost","root");
                      mysql_select_db("capas_db");
                      $res=mysql_query("SELECT * FROM instructor_evaluator where ins_college= '".$_REQUEST['slct1']."' && ins_dept= '".$_REQUEST['slct2']."'");
                      while($row=mysql_fetch_array($res))
                      {
                          ?>
                    <div class="form-group">
                    <tr>
                     <td><input type="text" name="instructorlistid2[]" value="<?php echo $row['ins_id']; ?>"/></td>
                    <td><input type="text" name="instructorlistname2[]" value="<?php echo $row['ins_name']; ?>"/></td>
                    <td><input type="text" name="instructorlistcollege2[]" value="<?php echo $row['ins_college']; ?>"/></td>
                     <td><input type="text" name="instructorlistdept2[]" value="<?php echo $row['ins_dept']; ?>"/></td>
                    
                    
                    </div>
                    </tr>



                          <?php
                      }


                      ?>

                      </tbody>
                      </table>
                      <hr>
                      <?php echo '<input type="submit" name="submit2" class="btn btn-success btn-lg" value="Assign"/>';?>
                  </form>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

                </div>
                <!-- /.box-body -->

              </div>
              <!-- /.box -->
          </div>
              <!--END INSTRUCTOR-->

        </div>

          <!--END SEARCH RESULT-->

          <?php if (isset($assignsuccess)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$assignsuccess. "</div>"; }?>
          <?php if (isset($assignerror)) {echo "<div class=\"alert alert-danger\"><strong>Note: </strong>" .$assignerror. "</div>"; }?>

          
               


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->        
        <!-- right col -->
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
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->



<script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "College of Agriculture"){
    var optionArray = ["|","bAgriTech|BAgriTech","dAgriTech|DAgriTech","bSAgri|BSAgri","bSFor|BSFor"];
  } else if(s1.value == "College of Arts and Sciences"){
    var optionArray = ["|","bSMath|BSMath","bSBio|BSBio","bAComm|BAComm","bAPsych|BAPsych","bAPubAdmin|BAPubAdmin"];
  } else if(s1.value == "College of Allied Medicine"){
    var optionArray = ["|","bSNursing|BSNursing","bSMidwifery|BSMidwifery"];
  }
  else if(s1.value == "College of Business Administration"){
    var optionArray = ["|","bSAcc|BSAcc","bSBA in Finance|BSBA in Finance","bSBA in Marketing|BSBA in Marketing","bSBA in HR|BSBA in HR","bS in HRM|BS in HRM"];
  }

  else if(s1.value == "College of Engineering"){
    var optionArray = ["|","bSCpE|BSCpE","bSCE|BSCE","bSECE|BSECE","bSEE|BSEE","bSIE|BSIE","bSME|BSME"];
  }

  else if(s1.value == "College of Industrial Technology"){
    var optionArray = ["|","bSCPT|BSCPT","bSELT|BSELT","bSELX|BSELX","bSFT|BSFT","bSMT|BSMT"];
  }

  else if(s1.value == "College of Teachers Education"){
    var optionArray = ["|","bEED|BEED","bSEDinEnglish|BSEDinEnglish","bSEDinFilipino|BSEDinFilipino","bSEDinMath|BSEDinMath","bSEDinSocial|BSEDinSocial","bSEDinMapeh|BSEDinMapeh","bSEDinTLE|BSEDinTLE","iHK|IHK","bSEDinPhysics|BSEDinPhysics"];
  }
  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}
</script>

</body>
</html>
