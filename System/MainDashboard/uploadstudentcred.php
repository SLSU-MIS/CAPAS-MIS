<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
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
        ASSIGNMENT
        <small>(Student)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Assignment Tab</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
        <div class="col-xs-12">
          <!-- small box -->
          <div class="callout callout-success" align="center">
                <h4>Uploading of Assignments</h4>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">


        <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">DATABASE QUE</h3>

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
                  <h3 class="box-title">Management of Students Enrolled in Subjects</h3>
                </div>
                <!-- /.box-header -->
               <div class="box-body">
             <br>
                    <h1> CSV to Database </h1>
                    <p> Fields are provided for you,only the CSV filename will fill-up</p>

                    </br>
                    <form class="form-horizontal"action="evaluatorstudent.php" method="post">
                        <div class="form-group">
                            <label for="mysql" class="control-label col-xs-2">Mysql Server address (or)<br>Host name</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="mysql" id="mysql" placeholder="" value="localhost">
                        </div>
                        </div>
                      <div class="form-group">
                            <label for="username" class="control-label col-xs-2">Username</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="username" id="username" placeholder="" value="root">
                        </div>
                        </div>
                      <div class="form-group">
                            <label for="password" class="control-label col-xs-2">Password(Leave This Blank)</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="password" id="password" placeholder="">
                        </div>
                        </div>
                      <div class="form-group">
                            <label for="db" class="control-label col-xs-2">Database name</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="db" id="db" placeholder="" value="capas_db">
                        </div>
                        </div>
                      
                      <div class="form-group">
                            <label for="table" class="control-label col-xs-2">Table name</label>
                        <div class="col-xs-3">
                            <input type="name" class="form-control" name="table" id="table" value="student_subjectlist">
                        </div>
                        </div>
                      <div class="form-group">
                            <label for="csvfile" class="control-label col-xs-2">Name of the file</label>
                        <div class="col-xs-3">
                            <input type="name" class="form-control" name="csv" id="csv">
                        </div>
                        eg. MYDATA.csv
                        </div>
                      <div class="form-group">
                      <label for="login" class="control-label col-xs-2"></label>
                        <div class="col-xs-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                      </div>
                      </div>
                    </form>
                    </div>
                    <?php 

                          if(isset($_POST['username'])&&isset($_POST['mysql'])&&isset($_POST['db'])&&isset($_POST['username']))
                          {
                          $sqlname=$_POST['mysql'];
                          $username=$_POST['username'];
                          $table=$_POST['table'];
                          if(isset($_POST['password']))
                          {
                          $password=$_POST['password'];
                          }
                          else
                          {
                          $password= '';
                          }
                          $db=$_POST['db'];
                          $file=$_POST['csv'];
                          $cons= mysqli_connect("$sqlname", "$username","$password","$db") or die(mysql_error());

                          $result1=mysqli_query($cons,"select count(*) count from $table");
                          $r1=mysqli_fetch_array($result1);
                          $count1=(int)$r1['count'];
                          //If the fields in CSV are not seperated by comma(,)  replace comma(,) in the below query with that  delimiting character 
                          //If each tuple in CSV are not seperated by new line.  replace \n in the below query  the delimiting character which seperates two tuples in csv
                          // for more information about the query http://dev.mysql.com/doc/refman/5.1/en/load-data.html
                          mysqli_query($cons, '
                              LOAD DATA LOCAL INFILE "'.$file.'"
                                  INTO TABLE '.$table.'
                                  FIELDS TERMINATED by \',\'
                                  LINES TERMINATED BY \'\n\'
                          ')or die(mysql_error());

                          $result2=mysqli_query($cons,"select count(*) count from $table");
                          $r2=mysqli_fetch_array($result2);
                          $count2=(int)$r2['count'];

                          $count=$count2-$count1;
                          if($count>0)
                          echo "Success";
                          echo "<b> total $count records have been added to the table $table</b> ";
                          echo "<br>";
                          echo "<a href='uploadstudentcred.php' class='btn btn-success'>Refresh Browser</a>";


                          }
                          else{
                          echo "";
                          }

                          ?>
                  </div>
            </div>
            <!-- /.box-body -->
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

                </div>
                <!-- /.box-body -->

              </div>
              <!-- /.box -->
               


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



</body>
</html>
