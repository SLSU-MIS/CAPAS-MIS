<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }
?>
<?php
  
  
  
    $sem = "1st Semester";
    $SY="2016-2017";
    $RP="August-December";

         $sql= "SELECT COUNT(student_id) FROM student_evaluator";
        $query=mysqli_query($conn,$sql);

        if($query){
        $row=mysqli_fetch_array($query,MYSQLI_NUM);
        $total_stud=$row[0];
        }

        $sql= "SELECT COUNT(student_id) FROM student_evaluator WHERE activate='1'";
        $query=mysqli_query($conn,$sql);

        if($query){
        $row=mysqli_fetch_array($query,MYSQLI_NUM);
        $total_take=$row[0];
        }



    //converts sem to sem_id;
    $sql="SELECT sem_id FROM semester WHERE sem_description='$sem'";
    $query=mysqli_query($conn, $sql);

    if($query){
      while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
        $sem_id=$row[0];
        //echo $sem_id;
      }

    }


    $query = "SELECT ins_name FROM instructor_evaluator WHERE activate='0'"; 
         $result = mysqli_query($conn, $query);
            $option1 = "CHOOSE ONE";
         

         while($row = mysqli_fetch_array($result)){
            $option1 = $option1."<option>$row[0]</option>";

         }


         
         

  if($_POST['sub']){
    

     $prof = @$_POST['prof']; //to nullify error 
     $_SESSION['prof'] = $prof; 
    $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof'";
            $query=mysqli_query($conn, $sql);

            if($query){
              while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                $prof_id=$row[0];
              }

            }

    $sql= "SELECT ins_college, ins_dept FROM instructor_evaluator WHERE ins_id='$prof_id' ";
    $query=mysqli_query($conn, $sql);

    if ($query){
      $row=mysqli_fetch_array($query, MYSQLI_NUM);
      $college_id= $row[0];
      $course_id= $row[1];
      //echo $college_id;
      //echo $course_id;


    }

   

    $sql="SELECT AVG(answer) FROM answer WHERE ins_id='$prof_id'";
    $query= mysqli_query($conn, $sql);

      $row = mysqli_fetch_array($query); 
      $sum_prof = $row[0];

      
      //echo $sum;


  }//POST['sub']

    if(@$_POST['reset']){
            $sql="UPDATE instructor_evaluator SET activate='0'";
                $ok=mysqli_query($conn, $sql);
                if($ok){
                    //echo "activated";
                }

            $sql="DELETE FROM average";
                $ok=mysqli_query($conn, $sql);
                if($ok){
                    //echo "activated";
                }

                $note= "Table Successfully Updated";

    }



?>

  <?php
              error_reporting(0);
              $con = mysql_connect("localhost","root","");
              if (!$con) {
                die('Could not connect: ' . mysql_error());
              }

              mysql_select_db("capas_db", $con);

              $result = mysql_query("select count(1) FROM answer WHERE type='Student Evaluation'");
              $row = mysql_fetch_array($result);

              $total = $row[0];
              

              mysql_close($con);
          ?>

    <?php
              error_reporting(0);
              $con = mysql_connect("localhost","root","");
              if (!$con) {
                die('Could not connect: ' . mysql_error());
              }

              mysql_select_db("capas_db", $con);

              $result = mysql_query("select count(1) FROM student_evaluator");
              $row = mysql_fetch_array($result);

              $student = $row[0];
              

              mysql_close($con);
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
        RESULT TAB
        <small>(Student)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Result Tab</li>
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
                <h4>Results of Evaluation</h4>
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
                  <h3 class="box-title">INSTRUCTORS EVALUATED BY STUDENTS</h3>
                </div>
                <!-- /.box-header -->
                      <div id="page-content-wrapper">
            <?php if (isset($note)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$note. "</div>"; }?>

            
            <h3 class="alert alert-warning"><i class="fa fa-user" aria-hidden="true"></i>Total Number of Students: <?php echo $student?></h3>
            <h3 class="alert alert-success"><i class="fa fa-check-square-o" aria-hidden="true"></i>Number of Students Evaluates in Instructors: <?php echo $total?></h3>
            </div>
            <form role="form "method="post" action="exportstudenttally.php">
               

           
            <div class="form-group col-sm-12" align="center">
                <h2>CHOOSE THE PROFESSORS</h2>


                 <table id="example1" class="table table-bordered table-striped">
                   
                    <thead>
                    <tr>
                      <th>COLLEGE</th>
                      <th>DEPARTMENT</th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                      <th>

                       <div>
                          <select class="form-control" id="college-select" name="student_college">
                           
                          
                            <option value="College of Agriculture">College of Agriculture</option>
                            <option value="College of Allied Medicine">College of Allied Medicine</option>
                            <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                            <option value="College of Business Administration">College of Business Administration</option>
                            <option value="College of Engineering">College of Engineering</option>
                            <option value="College of Industrial Technology">College of Industrial Technology</option>
                            <option value="College of Teachers Education">College of Teachers Education</option>
                            

                          </select>
                      </div>
                      </th>
                            <th>
                             <select class="form-control" id="dept-select" name="student_department"></select>
                            </th>
                            
                            
                            <th>
                                <input type="submit" name="submit" class="btn btn-success" value="SEE TALLY"/>
                                
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    </form>
                    </tbody>
                  </table>
                </form>
             </div>

           
             
             <div class="row">
                
             </div>
        </div>
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

<script>
  var currentCollege;
  var currentDept;
  var currentSection;
  var currentYear;
  var subjectArr = [
  // subjectName, course/college + yearLevel
  //              - kung anong course/college
  //                ang mga nagtetake.
    ["MAT01c", "College of Agriculture1"],
    ["MAT10b", "BSCpE3"],
    ["CPE302", "CPE3,IE5"]
  ];

  var cagObj = {
    "BAgriTech": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "DAgriTech": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "BSAgri": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "BSFor": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },
    
  };

  var casObj = {
    "BSMath": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "BSBio": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "BAComm": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "BAPsych": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    },

    "BAPubAdmin": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],

    }
    
  };

  var camObj = {
    "BSNursing": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },
    "BSMidwifery": {
      1:["A"],
      2:["A"]
    }
  };





  var cenObj = {
    "BSCpE": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],
      5:["A", "B"]
    },
    "BSCE": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],
      5:["A", "B"]
    },
    "BSECE": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],
      5:["A", "B"]
    },
    "BSEE": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],
      5:["A", "B"]
    },
    "BSIE": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],
      5:["A", "B"]
    },
    "BSME": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B"],
      4:["A", "B"],
      5:["A", "B"]
    }
  };
  var cbaObj = {
    "BSAcc": {
      1:["A"],
      2:["A"],
      3:["A"],
      4:["A"]
    },
    "BSBA in Finance": {
      1:["A", "B"],
      2:["A"],
      3:["A", "B"],
      4:["A", "B"]
    },

    "BSBA in Marketing": {
      1:["A", "B"],
      2:["A"],
      3:["A", "B"],
      4:["A", "B"]
    },

    "BSBA in HR": {
      1:["A", "B"],
      2:["A"],
      3:["A", "B"],
      4:["A", "B"]
    },

    "BS in HRM": {
      1:["A", "B"],
      2:["A"],
      3:["A", "B"],
      4:["A", "B"]
    }


  };
  

  var citObj = {
    "BSCPT": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSELT": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSELX": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSFT": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSMT": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    }


  };
    
  var cteObj = {
    "BEED": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinEnglish": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinFilipino": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinMath": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinSocial": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinMapeh": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinTLE": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "IHK": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    },

    "BSEDinPhysics": {
      1:["A", "B"],
      2:["A", "B"],
      3:["A", "B", "C"],
      4:["A", "B"]
    }
  };

  var collegeObj = {
    
    
    "College of Agriculture":cagObj,
    "College of Arts and Sciences":casObj,
    "College of Allied Medicine":camObj,
    "College of Business Administration":cbaObj,
    "College of Engineering":cenObj,
    "College of Industrial Technology":citObj,
    "College of Teachers Education":cteObj


    
  };

  function updateDeptSelect() {
    var collegeSelected = $("#college-select").val();
    var deptSelect = $("#dept-select");
    var college = collegeObj[collegeSelected];
    currentCollege = college;
    deptSelect.empty();
    for (var coll in college) {
      var option = new Option(coll, coll);
      deptSelect.append(option);
    }
    updateYearSelect();
  }

  function updateYearSelect() {
    var deptSelected = $("#dept-select").val();
    var yearSelect = $("#year-select");
    var label = ["1st", "2nd", "3rd", "4th", "5th"];
    var dept = currentCollege[deptSelected];
    currentDept = dept;
    yearSelect.empty();
    console.log(Object.size(dept));
    for(var i = 0; i < Object.size(dept); i++) {
      var option = new Option(label[i], i+1);
      yearSelect.append(option);
    }
    updateSectionSelect();
    updateSubjectSelect();
  }

  function updateSectionSelect() {
    var yearSelected = $("#year-select").val();
    var sectionSelect = $("#section-select");
    var year = currentDept[yearSelected];
    currentYear = year;
    sectionSelect.empty();
    for (var y in year) {
      var option = new Option(year[y], year[y]);
      sectionSelect.append(option);
    }
  }

  function updateSubjectSelect() {
    var subjectSelect = $("#subject-select");
    var year = $("#year-select").val();
    var college = $("#college-select").val() + year;
    var dept = $("#dept-select").val() + year;
    subjectSelect.empty();
    for (var i = 0; i < subjectArr.length; i++) {
      if ((subjectArr[i][1].includes(college)) || (subjectArr[i][1].includes(dept))) {
        console.log(subjectArr[i][1]);
        var option = new Option(subjectArr[i][0], subjectArr[i][0]);
        subjectSelect.append(option);
      } else subjectSelect.append(" "); // properly update blank select
    }
  }

  //function update
  $(window).ready(function() {
    updateDeptSelect();
    $('#college-select').change(updateDeptSelect);
    $('#dept-select').change(updateYearSelect);
    $('#year-select').change(function(e) {
      updateSectionSelect();
      updateSubjectSelect();
    });
  });

  Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
  };

  </script>




</body>
</html>