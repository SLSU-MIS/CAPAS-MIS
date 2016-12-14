<?php
  error_reporting(0);
  session_start();
  
  @ $db = mysqli_connect('127.0.0.1', 'root', '', 'capas_db');

if (mysqli_connect_errno()) {
  echo "failed to connect to database";
  exit;
}




  if(isset($_SESSION['user'])){
      $userId = $_SESSION['user'];
      $fname = $_SESSION['student_name'];
      $college = $_SESSION['student_college'];
      $department = $_SESSION['student_dept'];
      $year = $_SESSION['student_year'];
      $sem= "sem_01";
      $SY = "2016-2017";
      $RP = "August-December";
      $prof = @$_POST['professor'];
      $_SESSION['prof-name']=$prof;
      $subj=$_POST['subject'];
      $_SESSION['subj']=$subj;

}


        if (($_SESSION['user'] == "") || (!isset($_SESSION['user'])) ) {
          $noted= "The Evaluation Already Reached";
        }
        $studentid = $_SESSION['user'];
        $activate = "0";

        $query1 = "SELECT * FROM student_evaluate WHERE student_id = '".$studentid."' AND evaluated = '".$activate."' ";

        $result1 = $db->query($query1);
        $numresults1 = $result1->num_rows;

         $result2 = $db->query($query1);
        $numresults2 = $result2->num_rows;

        $result3 = $db->query($query1);
        $numresults3 = $result3->num_rows;

        $result4 = $db->query($query1);
        $numresults4 = $result4->num_rows;

        $instructordone = $_REQUEST['professor'];
        $instructorcollege = $row['instructor_college'];
        $instructordept = $row['instructor_dept'];
        $subjectdone = $_REQUEST['professor'];

        if($numresults1==""){

          $done="The Evaluation of Assigned Teachers is Already Done. Your evaluation records are already submitted. Submit button is disabled. You may logout now";


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
    <a href="student.php" class="logo">
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
                  <?php echo $fname;?>
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
          <a href="student.php">
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
                  <img src="img/slsu2.png" alt="logo" title="logo" />
            </div>
            <div class="col-sm-8" align="center">
                  <h1>SOUTHERN LUZON STATE UNIVERSITY<br /><?php echo $college;?></h1>
                  <h3>Online Qualitative Contribution Evaluation for Instruction/Teaching <br />Effectiveness of Instructors<br />
                   Rating Period: <?php echo $RP;?><br />
                   School Year: <?php echo $SY;?></h3>
                   <hr/>
            </div>
            <div class="col-sm-2">
                  <?php
                  
                    if($college=="College of Agriculture"){
                    echo '<img src="img/cag.png" alt="logo" title="logo" />';
                        }

                    if($college=="College of Arts and Sciences"){
                    echo '<img src="img/cas.png" alt="logo" title="logo" />';
                        }

                    if($college=="College of Allied Medicine"){
                    echo '<img src="img/cam.png" alt="logo" title="logo" />';
                        }

                    if($college=="College of Business Administration"){
                    echo '<img src="img/cba.png" alt="logo" title="logo" />';
                        }

                    if($college=="College of Engineering"){
                    echo '<img src="img/cen.png" alt="logo" title="logo" />';
                        }

                    if($college=="College of Industrial Technology"){
                    echo '<img src="img/cit.png" alt="logo" title="logo" />';
                        }

                    if($college=="College of Teachers Education"){
                    echo '<img src="img/cte.png" alt="logo" title="logo" />';
                        }



                  ?>

            </div> 
      </div>
      <hr>
      <?php if (isset($noted)) {echo "<div class=\"alert alert-danger\"><strong><i class=\"fa fa-info-circle fa-2x\" aria-hidden=\"true\"></i>Note: </strong>" .$noted. "</div>"; }?>
      <?php if (isset($done)) {echo "<div class=\"alert alert-danger\"><strong><i class=\"fa fa-info-circle fa-2x\" aria-hidden=\"true\"></i>Note: </strong>" .$done. "</div>"; }?>

          
   <form action="studentverify.php" method="post">

      <!--EVALUATION OPTION-->

      <div class="row">

            <div class="col-sm-6" align="left">
               <label for="faculty"><b>Name of Faculty Assigned:</b></label>
               

                <select class="selectpicker show-pick form-control" name="professor">
                      <?php
                        if ($numresults1 !=0) {
                          for ($i=0; $i < $numresults1; $i++) { 
                            $row = $result1->fetch_assoc();
                            echo"<option value=\"".$row['instructor_name']."\">".$row['instructor_name']."</option>";
                          }
                        }
                        else {
                          $_SESSION['user']=0;
                          header("Location: login.php");
                        }
                        $db->close();
                      ?>

               </select>
            </div>
            <div class="col-sm-6" align="left">
             <label for="subject">Subject:</label>

             <select class="selectpicker show-pick form-control" name="subject">
              <?php
                        if ($numresults2 !=0) {
                          for ($i=0; $i < $numresults2; $i++) { 
                            $row = $result2->fetch_assoc();
                            echo"<option value=\"".$row['subject']."\">".$row['subject']."</option>";
                          }
                        }
                        else {
                          $_SESSION['user']=0;
                          header("Location: login.php");
                        }
                        $db->close();
                      ?>


            </select>
           </div>
      </div>

      <hr>

       <div class="row">

            <div class="col-sm-6" align="left">
               <label for="faculty"><b>Instructor Designated College:</b></label>
               

                <select class="selectpicker show-pick form-control" name="college">
                      <?php
                        if ($numresults3 !=0) {
                          for ($i=0; $i < $numresults3; $i++) { 
                            $row = $result3->fetch_assoc();
                            echo"<option value=\"".$row['instructor_college']."\">".$row['instructor_college']."</option>";
                          }
                        }
                        else {
                          $_SESSION['user']=0;
                          header("Location: login.php");
                        }
                        $db->close();
                      ?>

               </select>
            </div>
            <div class="col-sm-6" align="left">
             <label for="subject">Instructor Designated Department:</label>

             <select class="selectpicker show-pick form-control" name="department">
              <?php
                        if ($numresults4 !=0) {
                          for ($i=0; $i < $numresults4; $i++) { 
                            $row = $result4->fetch_assoc();
                            echo"<option value=\"".$row['instructor_dept']."\">".$row['instructor_dept']."</option>";
                          }
                        }
                        else {
                          $_SESSION['user']=0;
                          header("Location: login.php");
                        }
                        $db->close();
                      ?>


            </select>
           </div>
      </div>

      <hr>

      <!--MAIN CONTENT-->
       <div class="col-md-12">
          <div class="box box-warning box-solid" >
            <div class="box-header with-border">
              <h3 class="box-title">Collapsable</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
                  <!--BODY CONTENT-->
                 
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <td><b>Scale</b></td>
                                 <td><b>Descriptive Rating</b></td>
                                 <td><b>Qualitative Description</b></td>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><strong>5</strong></td>
                                 <td>Outstanding</td>
                                 <td>The performance always exceeds the job requirements and an exceptional role model.</td>
                              </tr>
                              <tr>
                                 <td><strong>4</strong></td>
                                 <td>Very Satisfactory</td>
                                 <td>The performance meets and often exceeds the job requirements.</td>
                              </tr>
                              <tr>
                                 <td><strong>3</strong></td>
                                 <td>Satisfactory</td>
                                 <td>The performance meets job requirements.</td>
                              </tr>
                              <tr>
                                 <td><strong>2</strong></td>
                                 <td>Fair</td>
                                 <td>The performance needs some development to meet job requirements.</td>
                              </tr>
                              <tr>
                                 <td><strong>1</strong></td>
                                 <td>Poor</td>
                                 <td>The faculty fails to meet job requirements.</td>
                              </tr>
                           </tbody>
                     </table>
                    
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      
        

     
      <!--PAGE ANSWER-->
      <div class="row">
            <div class="col-md-12">
              <p class="alert alert-warning "><strong><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>Note: Please Check If Choices Are Chosen, Else it will not submit if empty</strong></p>
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">A. COMMITMENT</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <table class="table">
               <tr>
               <th>COMMITMENT</th>
               <th>5</th>
               <th>4</th>
               <th>3</th>
               <th>2</th>
               <th>1</th>
            </tr>
            <tr>
               <td><p >1. Demonstrates sensitivity to student's ability to attend and absorb content information.</td>
               <td><input type="radio" required name="a1" value="5" /></td>
               <td><input type="radio" required name="a1" value="4" /></td>
               <td><input type="radio" required name="a1" value="3" /></td>
               <td><input type="radio" required name="a1" value="2" /></td>
               <td><input type="radio" required name="a1" value="1" /></td>
            </tr>
            <tr>
               <td>2.   Integrates sensitively his/her learning objectives with those of the students in a collaborative process.</td>
               <td><input type="radio" required name="a2" value="5" /></td>
               <td><input type="radio" required name="a2" value="4" /></td>
               <td><input type="radio" required name="a2" value="3" /></td>
               <td><input type="radio" required name="a2" value="2" /></td>
               <td><input type="radio" required name="a2" value="1" /></td>
            </tr>
            <tr>
               <td>3.   Makes self available to students beyond official time.</td>
               <td><input type="radio" required name="a3" value="5" /></td>
               <td><input type="radio" required name="a3" value="4" /></td>
               <td><input type="radio" required name="a3" value="3" /></td>
               <td><input type="radio" required name="a3" value="2" /></td>
               <td><input type="radio" required name="a3" value="1" /></td>
            </tr>
            <tr>
               <td>4.   Regularly comes to class on time, well-groomed and well-prepared to complete assigned responsibilities.</td>
               <td><input type="radio" required name="a4" value="5" /></td>
               <td><input type="radio" required name="a4" value="4" /></td>
               <td><input type="radio" required name="a4" value="3" /></td>
               <td><input type="radio" required name="a4" value="2" /></td>
               <td><input type="radio" required name="a4" value="1" /></td>
            </tr>
            <tr>
               <td>5.   Keeps accurate records of student's performance and prompt submission of the same.</td>
               <td><input type="radio" required name="a5" value="5" /></td>
               <td><input type="radio" required name="a5" value="4" /></td>
               <td><input type="radio" required name="a5" value="3" /></td>
               <td><input type="radio" required name="a5" value="2" /></td>
               <td><input type="radio" required name="a5" value="1" /></td>
            </tr>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- /END OF THE ROW -->

      <!--PAGE ANSWER-->
      <div class="row">
            <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">B. KNOWLEDGE OF SUBJECT</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
               <tr>
                  <th>KNOWLEDGE OF SUBJECT</th>
                  <th>5</th>
                  <th>4</th>
                  <th>3</th>
                  <th>2</th>
                  <th>1</th>
               </tr>
               <tr>
                  <td>1.   Demonstrates mastery of the subject matter (explain the subject matter without relying solely on the prescribed textbook).</td>
                  <td><input type="radio" required name="b1" value="5" /></td>
                  <td><input type="radio" required name="b1" value="4" /></td>
                  <td><input type="radio" required name="b1" value="3" /></td>
                  <td><input type="radio" required name="b1" value="2" /></td>
                  <td><input type="radio" required name="b1" value="1" /></td>
               </tr>
               <tr>
                  <td>2.   Draws and share information on the state of the art theory and practice in his/her discipline.</td>
                  <td><input type="radio" required name="b2" value="5" /></td>
                  <td><input type="radio" required name="b2" value="4" /></td>
                  <td><input type="radio" required name="b2" value="3" /></td>
                  <td><input type="radio" required name="b2" value="2" /></td>
                  <td><input type="radio" required name="b2" value="1" /></td>
               </tr>
               <tr>
                  <td>3.   Integrates subject to practical circumstances and learning intents/ purposes of students.</td>
                  <td><input type="radio" required name="b3" value="5"  /></td>
                  <td><input type="radio" required name="b3" value="4"  /></td>
                  <td><input type="radio" required name="b3" value="3"  /></td>
                  <td><input type="radio" required name="b3" value="2"  /></td>
                  <td><input type="radio" required name="b3" value="1"  /></td>
               </tr>  
               <tr>
                  <td>4.   Explains the relevance of present topics to the previous lessons and relates the subjects matter to relevant current issues and/or daily life activities.</td>
                  <td><input type="radio" required name="b4" value="5"  /></td>
                  <td><input type="radio" required name="b4" value="4"  /></td>
                  <td><input type="radio" required name="b4" value="3"  /></td>
                  <td><input type="radio" required name="b4" value="2"  /></td>
                  <td><input type="radio" required name="b4" value="1"  /></td>
               </tr>
               <tr>
                  <td>5.   Demonstrates up-to-date knowledge and/or awareness on current trends and issues.</td>
                  <td><input type="radio" required name="b5" value="5"  /></td>
                  <td><input type="radio" required name="b5" value="4"  /></td>
                  <td><input type="radio" required name="b5" value="3"  /></td>
                  <td><input type="radio" required name="b5" value="2" /></td>
                  <td><input type="radio" required name="b5" value="1"  /></td>
               </tr>  
         </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- /END OF THE ROW -->

      <!--PAGE ANSWER-->
      <div class="row">
            <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">C. TEACHING FOR INDEPENDENT LEARNING</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table">
                <tr>
                  <td>1.   Create teaching strategies that allow students to practice using concepts they need to understand (interactive discussion).</td>
                  <td><input type="radio" required name="c1" value="5"  /></td>
                  <td><input type="radio" required name="c1" value="4"  /></td>
                  <td><input type="radio" required name="c1" value="3"  /></td>
                  <td><input type="radio" required name="c1" value="2"  /></td>
                  <td><input type="radio" required name="c1" value="1"  /></td>
               </tr>
               <tr>
                  <td>2.   Enhances student self-esteem and/or gives due recognition to student's performance/potentials.</td>
                  <td><input type="radio" required name="c2" value="5"  /></td>
                  <td><input type="radio" required name="c2" value="4"  /></td>
                  <td><input type="radio" required name="c2" value="3"  /></td>
                  <td><input type="radio" required name="c2" value="2"  /></td>
                  <td><input type="radio" required name="c2" value="1"  /></td>
               </tr>
               <tr>
                  <td>3.   Allows students to create their own course with objectives and realistically defined student-professor rules and make them accountable for their performance.</td>
                  <td><input type="radio" required name="c3" value="5"  /></td>
                  <td><input type="radio" required name="c3" value="4"  /></td>
                  <td><input type="radio" required name="c3" value="3"  /></td>
                  <td><input type="radio" required name="c3" value="2"  /></td>
                  <td><input type="radio" required name="c3" value="1"  /></td>
               </tr>  
               <tr>
                  <td>4.   Allows students to think independently and make their own decisions and holding them accountable for their performance based largely on their success in executing decisions.</td>
                  <td><input type="radio" required name="c4" value="5"  /></td>
                  <td><input type="radio" required name="c4" value="4"  /></td>
                  <td><input type="radio" required name="c4" value="3"  /></td>
                  <td><input type="radio" required name="c4" value="2"  /></td>
                  <td><input type="radio" required name="c4" value="1"  /></td>
               </tr>
               <tr>
                  <td>5.   Encourage students to learn beyond what is required and help/guide the students how to apply the concepts learned.</td>
                  <td><input type="radio" required name="c5" value="5"  /></td>
                  <td><input type="radio" required name="c5" value="4"  /></td>
                  <td><input type="radio" required name="c5" value="3"  /></td>
                  <td><input type="radio" required name="c5" value="2"  /></td>
                  <td><input type="radio" required name="c5" value="1"  /></td>
               </tr>
           </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- /END OF THE ROW -->

      <!--PAGE ANSWER-->
      <div class="row">
            <div class="col-md-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">D. MANAGEMENT OF LEARNING</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
               <tr>
                  <th>MANAGEMENT OF LEARNING</th>
                  <th>5</th>
                  <th>4</th>
                  <th>3</th>
                  <th>2</th>
                  <th>1</th>
               </tr>
               <tr>
                  <td>1.   Create opportunities for intensive and/or extensive contribution of students in the class activities (e.g. breaks class into dyads, triads, or buzz/task groups).</td>
                  <td><input type="radio" required name="d1" value="5"  /></td>
                  <td><input type="radio" required name="d1" value="4"  /></td>
                  <td><input type="radio" required name="d1" value="3"  /></td>
                  <td><input type="radio" required name="d1" value="2"  /></td>
                  <td><input type="radio" required name="d1" value="1"  /></td>
               </tr>
               <tr>
                  <td>2.   Assumes roles as facilitator, resource person, coach, inquisitor, integrator, referee in drawing students to contribute to knowledge and understanding of the concepts t hand.</td>
                  <td><input type="radio" required name="d2" value="5"  /></td>
                  <td><input type="radio" required name="d2" value="4"  /></td>
                  <td><input type="radio" required name="d2" value="3"  /></td>
                  <td><input type="radio" required name="d2" value="2"  /></td>
                  <td><input type="radio" required name="d2" value="1"  /></td>
               </tr>
               <tr>
                  <td>3.   Design and implements learning conditions and experience that promotes healthy exchange and/or confrontations.</td>
                  <td><input type="radio" required name="d3" value="5"  /></td>
                  <td><input type="radio" required name="d3" value="4"  /></td>
                  <td><input type="radio" required name="d3" value="3"  /></td>
                  <td><input type="radio" required name="d3" value="2"  /></td>
                  <td><input type="radio" required name="d3" value="1"  /></td>
               </tr>  
               <tr>
                  <td>4.   Structures/re-structures learning and teaching-learning context to enhance attainment of collective learning objectives.</td>
                  <td><input type="radio" required name="d4" value="5"  /></td>
                  <td><input type="radio" required name="d4" value="4"  /></td>
                  <td><input type="radio" required name="d4" value="3"  /></td>
                  <td><input type="radio" required name="d4" value="2"  /></td>
                  <td><input type="radio" required name="d4" value="1"  /></td>
               </tr>
               <tr>
                  <td>5.   Use of instructional materials (audio/video materials, fieldtrips, film showing, computer-aided instruction and etc. ) to reinforce learning processes.</td>
                  <td><input type="radio" required name="d5" value="5"  /></td>
                  <td><input type="radio" required name="d5" value="4"  /></td>
                  <td><input type="radio" required name="d5" value="3"  /></td>
                  <td><input type="radio" required name="d5" value="2"  /></td>
                  <td><input type="radio" required name="d5" value="1"  /></td>
               </tr>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- /END OF THE ROW -->
      <?php
      if($numresults1 !=0){

          echo '<input type="submit" name="submit" class="btn btn-danger btn-lg"  value="Submit"/>';
          }
          else{
            echo "<div class=\"alert alert-danger\"><strong><i class=\"fa fa-info-circle fa-2x\" aria-hidden=\"true\"></i>Note: Submit Button Is Already Disabled, Evaluation is already submitted</strong></div>";
          }
      ?>
    <!--END OF SECTION-->
    </section>

    <!-- /.content -->
  </div>
</form>
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
