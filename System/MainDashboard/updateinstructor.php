<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }
?>

 <!--UPDATING SCRIPT-->

                      <?php
                      require("db/db.php");
                      $id =$_REQUEST['student_id'];

                      $result = mysql_query("SELECT * FROM instructor_evaluator WHERE ins_id='$id'");
                      $row = mysql_fetch_array($result);
                      if (!$result) 
                          {
                          die("Error: Data not found..");
                          }
                              $Fname = $row['ins_first'];
                              $Lname = $row['ins_last'];
                              $Minitial = $row['ins_middle'];
                              $Sid = $row['ins_id'];
                              $College = $row['slct1'];
                              $Department = $row['slct2']; 
                              $Password = $row['ins_pass'];

                      if(isset($_POST['update']))
                      { 
                        $fname_update = $_POST['ins_first'];
                        $lname_update = $_POST['ins_last'];
                        $minitial_update = $_POST['ins_middle'];
                        //$sid_update = $_POST['student_id'];
                        $college_update = $_POST['slct1'];
                        $department_update = $_POST['slct2'];
                        $password_update = $_POST['ins_pass'];
                        

                        mysql_query("UPDATE instructor_evaluator SET ins_last ='$lname_update',
                        ins_first ='$fname_update',ins_middle ='$minitial_update',
                        ins_college ='$college_update',ins_dept ='$department_update',
                        ins_pass ='$password_update' WHERE ins_id = '$id'")
                              
                              or die(mysql_error()); 
                        
                        $alert= "Saved!";
                        
                        header("Location: evaluatorinstructor.php");      
                      }
                      mysql_close($conn);
                      ?>

                      <!--END SCRIPT-->

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
            <li><a href="assignstudent.php"><i class="fa fa-circle-o"></i>STUDENT</a></li>
            <li><a href="assignself.php"><i class="fa fa-circle-o"></i>SELF</a></li>
            <li><a href="assignpeer.php"><i class="fa fa-circle-o"></i>PEER</a></li>
            <li><a href="assigndean.php"><i class="fa fa-circle-o"></i>DEAN</a></li>
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
        EVALUATORS TAB
        <small>(Student)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Evaluators</li>
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
              <span class="info-box-number">1,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
         
        <?php if (isset($alert)) {echo "<div class=\"alert alert-success\"><strong>Alert: </strong>" .$alert. "</div>"; }?>

        </div>


      </div>
      <!-- /.row -->

      
              <div class="alert alert-warning"><strong>Note:</strong> Update Information Here</div>
           <!--PAGE ADDING-->
      
      
          <!-- Horizontal Form -->

         

                    <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Register Forms</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST">
                          <div class="box-body">



                            <div class="form-group">
                              <label class="col-sm-2 control-label">Instructor ID No.</label>

                              <div class="col-sm-6">
                                <input name="ins_id" type="text" class="form-control" disabled value="<?php echo $Sid ?>" />
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Student Name</label>

                              <div class="col-sm-2">
                                <input name="ins_last"type="text" class="form-control" value="<?php echo $Lname ?>"/>
                              </div>
                              <div class="col-sm-2">
                                <input name="ins_first" type="text" class="form-control" value="<?php echo $Fname ?>"/>
                              </div>
                              <div class="col-sm-2">
                                <input name="ins_middle" type="text" class="form-control" value="<?php echo $Minitial ?>"/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">College</label>

                              <div class="col-sm-6">
                                 <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
                                  <option value="">Select Colleges</option>
                                  <option value="College of Agriculture">College of Agriculture</option>
                                  <option value="College of Arts and Science">College of Arts and Science</option>
                                  <option value="College of Allied Medicine">College of Allied Medicine</option>
                                  <option value="College of Business Administration">College of Business Administration</option>
                                  <option value="College of Engineering">College of Engineering</option>
                                  <option value="College of Industrial Technology">College of Industrial Technology</option>
                                  <option value="College of Teachers Education">College of Teachers Education</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Department</label>

                              <div class="col-sm-6">
                                <select id="slct2" name="slct2" onchange="populate2(this.id,'slct3')"></select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Password</label>

                              <div class="col-sm-6">
                                <input name="ins_pass" type="text" class="form-control" value="<?php echo $Password ?>"/>
                              </div>
                            </div>
                            
                            


                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>&nbsp;
                             <input type="submit" class="btn btn-danger" name="reset" value="reset" />
                            <button name="update" type="submit" class="btn btn-info pull-right">Update</button>
                          </div>
                          <!-- /.box-footer -->
                        </form>
                      </div>



                      

      <!--PAGE EXPORTS-->

      <div class="row">
            <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">EXPORT EVALUATORS LIST</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table">

               <a class="btn btn-primary btn-lg">EXPORT LIST</a>
                
           </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- /END OF THE ROW -->







          


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
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "College of Agriculture"){
    var optionArray = ["|","bAgriTech|BAgriTech","dAgriTech|DAgriTech","bSAgri|BSAgri","bSFor|BSFor","bSEnviSci|BSEnviSci"];
  } else if(s1.value == "College of Arts and Science"){
    var optionArray = ["|","bSMath|BSMath","bSBior|BSBio","bAComm|BAComm","bAPsych|BAPsych","bAPubAdmin|BAPubAdmin"];
  } else if(s1.value == "College of Allied Medicine"){
    var optionArray = ["|","bSNursing|BSNursing","bSMidwifery|BSMidwifery"];
  }
  else if(s1.value == "College of Business Administration"){
    var optionArray = ["|","bSAcc|BSAcc","bSBA in Financ|BSBA in Finance","bSBA in Marketing|BSBA in Marketing","bSBA in HR|BSBA in HR"];
  }

  else if(s1.value == "College of Engineering"){
    var optionArray = ["|","bSCE|BSCE","bSCpE|BSCpE","bSECE|BSECE","bSEE|BSEE","bSIE|BSIE","bSME|BSME"];
  }

  else if(s1.value == "College of Industrial Technology"){
    var optionArray = ["|","bSCPT|BSCPT","bSELT|BSELT","bSELX|BSELX","bSFT|BSFT","bSMT|BSMT","bSHRM|BSHRM"];
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
