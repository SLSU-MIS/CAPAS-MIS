<?php 
    
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['sess_sess_admin'])){
      header('Location: index.php?err=2');
    }
?>

<?php
                      require("db/db2.php");

                      $result = mysql_query("SELECT * FROM student_subjectlist");
                      $row = mysql_fetch_array($result);
                      if (!$result) 
                          {
                          die("Error: Data not found..");
                          }
                              $StudentID = $row['student_id'];
                              $StudentName = $row['student_name'];


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
        ASSIGNMENT TAB
        <small>(Student)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Assignment Tab</li>
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
              <span class="info-box-text">Registered Student Evaluators</span>
              <span class="info-box-number">1,410</span>
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
              <h3 class="box-title">ASSIGNING INSTRUCTORS TO BE EVALUATED BY STUDENT</h3>

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
                    <form action="assignstudent.php?college=<?php echo $_REQUEST['student_college']; ?>" method="POST">
                    <thead>
                    <tr>
                      <th>COLLEGE</th>
                      <th>DEPARTMENT</th>
                      <th>YEAR</th>
                      <th>SECTION</th>
                      <th>SUBJECT</th>
                      
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <thead>
                    <tr>
                      <th>

                       <div>
                          <select class="form-control" id="college-select" name="student_college">
                           
                          
                            <option value="cag">College of Agriculture</option>
                            <option value="cam">College of Allied Medicine</option>
                            <option value="cas">College of Arts and Sciences</option>
                            <option value="cba">College of Business Administration</option>
                            <option value="cen">College of Engineering</option>
                            <option value="cit">College of Industrial Technology</option>
                            <option value="cte">College of Teachers Education</option>
                            

                          </select>
                      </div>
                      </th>
                            <th>
                             <select class="form-control" id="dept-select" name="student_department"></select>
                            </th>
                            
                            <th>
                                  <select class="form-control" id="year-select" name="student_year"></select>
                            </th>

                            <th>
                                <select class="form-control" id="section-select" name="student_section"></select>
                            </th>

                            <th>
                                <select class="form-control" id="subject-select" name="student_subject"></select>
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

        <div>
           <?php


  
                      mysql_connect("localhost","root");
                      mysql_select_db("capas_db");
                      $res=mysql_query("SELECT * FROM student_subjectlist where college= '".$_REQUEST['student_college']."'");
                      while($row=mysql_fetch_array($res))
                      {
                          ?>
                    <div class="form-group">
            
                    <input type="text" name="student_list" value="<?php echo $StudentID; ?>"/>

                    </div>


                          <?php
                      }
                      ?>
        </div>

          <!--END SEARCH RESULT-->
               


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
<script src="plugins/jQuery/jquery.min.js"></script>
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
    ["MAT01c", "cag1,cen1,cba1,cam1,cit1"],
    ["MAT10b", "CPE3,ME4"],
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
    
    
    "cag":cagObj,
    "cas":casObj,
    "cam":camObj,
    "cba":cbaObj,
    "cen":cenObj,
    "cit":citObj,
    "cte":cteObj


    
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
