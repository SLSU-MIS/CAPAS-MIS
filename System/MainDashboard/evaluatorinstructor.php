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

<!--ADDING SCRIPT-->

<?php


  

  require 'db/connect.php';
  if (isset($_POST['submit'])) {
    $Fname = $_POST['ins_name'];
    $Sid = $_POST['ins_id'];
    $College = $_POST['slct1'];
    $Department = $_POST['slct2'];
    $Dean = $_POST['dean'];
    $Password = $_POST['ins_pass'];

    /**echo $Fname;
    echo $Lname;
    echo $Mname;
    echo $SId;
    echo $SNo;
    echo $College;
    echo $Course;
    echo $Year;
    echo $password;**/


                    $sql = "INSERT INTO instructor_evaluator(ins_id,ins_name,ins_college,ins_dept,ins_pass,dean) 
                            VALUES('$Sid','$Fname','$College','$Department','$Password','$Dean')";
                         $query = mysqli_query($conn, $sql);
                         if($query){
                              $note= "SUCCESSFULLY Registered";
                             }

                             else{
                              $alert= "Error in Registration (Already Exists)";
                             }


       

  }


   if (isset($_POST['reset'])){
            $sql= "UPDATE instructor_evaluator SET activate='0'";
            $query = mysqli_query($conn, $sql);

            if($query){
                $alert= "EVALUATORS LOGIN CREDENTIALS HAS BEEN RESET";

            }

        }

?>


<!--DELETING SCRIPT-->


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
        EVALUATORS TAB
        <small>(Instructor)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Instructor Evaluators</li>
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
         <div class="col-lg-6 col-xs-6">
          <?php if (isset($note)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$note. "</div>"; }?>
          <?php if (isset($alert2)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$alert2. "</div>"; }?>
          <?php if (isset($alert)) {echo "<div class=\"alert alert-danger\"><strong>Alert: </strong>" .$alert. "</div>"; }?>

        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">


        <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Instructor</h3>

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
              <h3 class="box-title">Registered Instructor Evaluators Available on the Database</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Instructor Id</th>
                  <th>Instructor Name</th>
                  <th>College</th>
                  <th>Department</th>
                  <th>Password</th>
                  <th>Dean?</th>
                  <th>ACTION</th>
                </tr>

                </thead>
                <tbody>
                  <?php
                    mysql_connect("localhost","root");
                    mysql_select_db("capas_db");
                    $res=mysql_query("SELECT * FROM instructor_evaluator");
                    while($row=mysql_fetch_array($res))
                    {
                        ?>
                <tr>
                  <form>

                  <td><?php echo $row['ins_id']; ?></td>
                  <td><?php echo $row['ins_name'];?></td>
                  <td><?php echo $row['ins_college']; ?></td>
                  <td><?php echo $row['ins_dept']; ?></td>
                  <td><?php echo $row['ins_pass']; ?></td>
                  <td><?php echo $row['dean']; ?></td>
                  <td>
                    <a class="btn btn-danger" href="deleteinstructor.php?ins_id=<?php echo $row['ins_id']; ?>">Delete</a>&nbsp;&nbsp;
                    <a class="btn btn-warning" href="updateinstructor.php?ins_id=<?php echo $row['ins_id']; ?>">Edit</a>
                  </td>
                </tr>
                </form>
                 <?php
                  }
                  ?>
                
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

           <div align="left">
                <form action="evaluatorstudent.php" method="POST">
                      <input type="submit" class="btn btn-danger" name="reset" value="Reset Credentials" />
                </form>
            </div>
            <hr>

           <div class="alert alert-danger"><strong>Note:</strong> Click the (+) at the right to expand</div>
           <!--PAGE ADDING-->
      <div class="row">
            <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">ADDING EVALUATORS</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <div class="col-md-12">
          <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Register Forms</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="evaluatorinstructor.php" method="POST">
                          <div class="box-body">



                            <div class="form-group">
                              <label class="col-sm-2 control-label">Instructor ID No.</label>

                              <div class="col-sm-6">
                                <input name="ins_id" type="text" class="form-control" placeholder="No.">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Instructor Name</label>

                              <div class="col-sm-6">
                                <input name="ins_name"type="text" class="form-control" placeholder="(Last Name,First Name Middle Initial)">
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
                                <input name="ins_pass" type="text" class="form-control" placeholder="Password">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Dean?</label>

                              <div class="col-sm-6">
                                <input type="radio" required name="dean" value="Yes"  />Yes
                                <input type="radio" required name="dean" value="No"  />No
                              </div>
                            </div>
                            
                            


                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>&nbsp;
                            <button name="submit" type="submit" class="btn btn-info pull-right">Submit</button>
                          </div>
                          <!-- /.box-footer -->
                        </form>
                      </div>


                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                    <!-- /.col -->
                  </div><!-- /END OF THE ROW -->

       <!--PAGE IMPORTS-->

      <div class="row">
            <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">IMPORT CSV LIST</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
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
                            <input type="name" class="form-control" name="table" id="table" value="instructor_evaluator">
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
                          echo "<a href='evaluatorinstructor.php' class='btn btn-success'>Refresh Browser</a>";


                          }
                          else{
                          echo "";
                          }

                          ?>
                  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- /END OF THE ROW -->

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

               <a class="btn btn-primary btn-lg" href="exportinstructorlist.php">EXPORT LIST</a>
                
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
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
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
    var optionArray = ["|","BAgriTech|BAgriTech","BAgriTech|DAgriTech","BSAgri|BSAgri","BSFor|BSFor","BSEnviSci|BSEnviSci"];
  } else if(s1.value == "College of Arts and Science"){
    var optionArray = ["|","BSMath|BSMath","BSBior|BSBio","BAComm|BAComm","BAPsych|BAPsych","BAPubAdmin|BAPubAdmin"];
  } else if(s1.value == "College of Allied Medicine"){
    var optionArray = ["|","BSNursing|BSNursing","BSMidwifery|BSMidwifery"];
  }
  else if(s1.value == "College of Business Administration"){
    var optionArray = ["|","BSAcc|BSAcc","BSBA in Financ|BSBA in Finance","BSBA in Marketing|BSBA in Marketing","BSBA in HR|BSBA in HR"];
  }

  else if(s1.value == "College of Engineering"){
    var optionArray = ["|","BSCE|BSCE","BSCpE|BSCpE","BSECE|BSECE","BSEE|BSEE","BSIE|BSIE","BSME|BSME"];
  }

  else if(s1.value == "College of Industrial Technology"){
    var optionArray = ["|","BSCPT|BSCPT","BSELT|BSELT","BSELX|BSELX","BSFT|BSFT","BSMT|BSMT","BSHRM|BSHRM"];
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
