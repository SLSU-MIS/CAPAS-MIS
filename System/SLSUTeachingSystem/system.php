<?php 
    
    error_reporting(0);
    session_start();
    $name = $_SESSION['sess_name'];
    if(!isset($_SESSION['sess_sess_username'])){
      header('Location: index.php?err=2');
    }
?>




<?php    


          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'teachers_programdb');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



error_reporting(0); 

If(isset($_REQUEST['submit'])!=''){
                    
                    $sql="insert into basic_information(name,rank,appointment,address,year_service) values
                    ('".$_REQUEST['name']."','".$_REQUEST['rank']."','".$_REQUEST['appointment']."','".$_REQUEST['address']."','".$_REQUEST['year_service']."')";

                    $sql2="insert into school_info(name,college,sy,location,sem) values
                    ('".$_REQUEST['name']."','".$_REQUEST['college']."','".$_REQUEST['schoolyear']."','".$_REQUEST['location']."','".$_REQUEST['semester']."')";

                     $sql3="insert into employee_info(name,status,civil_status,birth) values
                    ('".$_REQUEST['name']."','".$_REQUEST['status']."','".$_REQUEST['civil_status']."','".$_REQUEST['birth']."')";


                     $sql4="insert into teaching_load2(name,contact_hours,preparations,unit,excess_load) values
                    ('".$_REQUEST['name']."','".$_REQUEST['contact']."','".$_REQUEST['preparations']."','".$_REQUEST['uperweek']."','".$_REQUEST['excess']."')";


                     $sql5="insert into assignment(name,designation,designation_hours,committee,committee_hrs,
                      research,research_hrs,extension,extension_hrs,consultation,consultation_hrs) values
                    ('".$_REQUEST['name']."','".$_REQUEST['desig1']."','".$_REQUEST['desig2']."','".$_REQUEST['comm1']."','".$_REQUEST['comm2']."'
                      ,'".$_REQUEST['research1']."','".$_REQUEST['research2']."','".$_REQUEST['exte1']."','".$_REQUEST['exte2']."','".$_REQUEST['consul1']."'
                      ,'".$_REQUEST['consul2']."')";

                        

                    $res=mysql_query($sql);
                    $res2=mysql_query($sql2);
                    $res3=mysql_query($sql3);
                    $res4=mysql_query($sql4);
                    $res5=mysql_query($sql5);


                       
                    
                   

    

                    If($res)
                        {
                    $note= "Adding Basic Information was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Basic Information";
                      }

                      If($res2)
                        {
                    $note= "Adding School Information was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding School Information";
                      }

                      If($res3)
                        {
                    $note= "Adding Employment Information was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Employment Information";
                      }

                      If($res4)
                        {
                    $note= "Adding Teaching Load Information 2 was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Teaching Load Information 2";
                      }

                       If($res5)
                        {
                    $note= "Adding Assignment Information was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Assignment Information";
                      }




                       




                     

}

?>


<?php 

 define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'teachers_programdb');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


if(isset($_POST)==true && empty($_POST)==false){
                            
                            $sub=$_POST['sub'];
                            $time=$_POST['time'];
                            $day=$_POST['day'];
                            $room=$_POST['room'];
                            $course=$_POST['course'];
                            $hrs=$_POST['hrs'];
                            $units=$_POST['units'];
                            $class=$_POST['class'];
                          
                                    foreach($sub as $a => $b){


                                     $sql="insert into teaching_load(name,subject,time,day,room,course,hrs_week,units,class_size) 
                                         values
                                        ('".$_REQUEST['name']."','$sub[$a]','$time[$a]','$day[$a]','$room[$a]','$course[$a]'
                                          ,'$hrs[$a]','$units[$a]','$class[$a]')";    

                                        $res=mysql_query($sql);
                                       
                                       

                        

                                        If($res)
                                            {
                                        $note= "Adding Basic Information was Successful";
                                            }
                                          Else
                                          {
                                            $alert= "Error in Adding Basic Information";
                                          }
                                    

                                       
                                   
                                    
                                
                    
                     } 


                   }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SLSU-Instruction System</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 20px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 80%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
    

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CAPAS-TEACHING LOAD</a>
            </div>

            <div class="header-right">

               
            <a href="logout.php" class="btn btn-danger" title="Logout"><b>Logout</b>&nbsp;&nbsp;<i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div" align="center">
                            <img src="assets/img/slsu.png" class="img-thumbnail" />
                            <br>   <br>   
                            <div>
                                <h3>Welcome Sir/Maam: <?php echo $name; ?></h3>
                       
                                
                            </div>
                        </div>

                    </li>


                   
                    <li>
                        <a href="#" class="active-menu"><i class="fa fa-sitemap "></i>Faculty Teachers Program<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="export-load.php"><i class="fa fa-edit "></i>EXPORT PDF</a>
                            </li>

                        </ul>
                    </li>
                   
                    <li>
                        <a href="ipcr.php"><i class="fa fa-square-o "></i>IPCR</a>
                        
                    </li>

                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <h1 class="page-subhead-line">Southern Luzon State University<br>
                        Lucban,Quezon
                        <h1 class="page-head-line" align="center">FACULTY TEACHING LOAD</h1>

                        <div class="container">

                              <div class="stepwizard col-md-12">
                            <div class="stepwizard-row setup-panel">
                                  <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle fa fa-user"></a>
                                <p>Basic Information</p>
                              </div>
                                  <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle fa fa-graduation-cap" disabled="disabled"></a>
                                <p>School Information</p>
                              </div>
                                  <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle fa fa-users" disabled="disabled"></a>
                                <p>Employment Information</p>
                              </div>

                              <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle fa fa-pencil-square-o" disabled="disabled"></a>
                                <p>Teaching Load</p>
                              </div>

                              <div class="stepwizard-step">
                                <a href="#step-5" type="button" class="btn btn-default btn-circle fa fa-pencil-square-o" disabled="disabled"></a>
                                <p>Teaching Load</p>
                              </div>

                              <div class="stepwizard-step">
                                <a href="#step-6" type="button" class="btn btn-default btn-circle fa fa-file-o" disabled="disabled"></a>
                                <p>Assignments</p>
                              </div>


                                </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                                <br>
                                <br>
                                <br>

                            </div>
                          </div>

                           <!--STARTING FORMS-->

                          <form action="system.php" method="POST">
                            <div class="row setup-content" id="step-1">
                                <?php if (isset($note)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$note. "</div>"; }?>
                                        <?php if (isset($alert)) {echo "<div class=\"alert alert-danger\"><strong>Alert: </strong>" .$alert. "</div>"; }?>
                                         <?php if (isset($show)) {echo "<div class=\"alert alert-danger\"><strong>Show: </strong>" .$show. "</div>"; }?>
                                  <div class="col-md-10">
                                        <div class="col-md-12">
                                              <div class="panel panel-success">
                                                  <div class="panel-heading">
                                                      Basic Information
                                                  </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                          <table class="table table-striped table-bordered table-hover">
                                                              <thead>
                                                                  <tr>
                                                                      <th>Name:</th>
                                                                      <td>
                                                                          <input type="text" name="name" placeholder="Name" 
                                                                          class="form-control" required="required" title="Name" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="(First Name Middle Initial Last Name)"
                                                                      required="required"/>
                                                                      </td>
                                                                      <th>Rank:</th>
                                                                      <td>
                                                                          <input type="text" name="rank" placeholder="Enter Rank" class="form-control"
                                                                              title="Rank" 
                                                                                  data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Enter Your SLSU Ranking"
                                                                                  required="required" /> 
                                                                      </td>
                                                                  </tr>

                                                                   <tr>
                                                                      <th>Home Address:</th>
                                                                      <td>
                                                                         <input type="text" class="form-control" title="Home Address" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="It must Alpa-Numeric"
                                                                      required="required" name="address"/>
                                                                      </td>
                                                                     <th>Month/Year Appointment:</th>
                                                                      <td colspan="2">
                                                                                  <input type='date' class="form-control" title="Month/Year Appointment" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                      required="required"name="appointment" />
                                                                      </td>

                                                                      
                                                                  </tr>
                                                                  <tr>
                                                                      <th> Year of Service in SLSU:</th>
                                                                      <td>
                                                                                  <input type="text" placeholder="No.of Years" class="form-control" title="No. of Years" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="It Must Be Numeric"
                                                                      required="required" name="year_service"/> 
                                                                       </td> 
                                                                  </tr>
                                                              </thead>
                                                              
                                                          </table>
                                                           <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                                    </div>
                                                </div>

                                            </div>
                                             <!-- End -->
                                    </div>
                              </div>
                            </div>


                            <!--END OF FORMS-->

                                     <!--STARTING FORMS-->

                                      
                            <div class="row setup-content" id="step-2">
                                  <div class="col-md-10">
                                        <div class="col-md-12">
                                              <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    School Information
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>College:</th>
                                                                    <td>
                                                                        <select class="form-control" name="college">
                                                                            <option>Agriculture</option>
                                                                            <option>Allied Medicine</option>
                                                                            <option>Arts and Sciences</option>
                                                                            <option>Business Administration</option>
                                                                            <option>Engineering</option>
                                                                            <option>Industrial Technology</option>
                                                                            <option>Teachers Educations</option>
                                                                        </select>
                                                                    </td>
                                                                    <th>School Year:</th>
                                                                    <th>
                                                                        <input type="text" name="schoolyear" placeholder="Enter SY" class="form-control" title="School Year" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Format: AY 20XX-20XX"
                                                                    required="required">

                                                                        </input>
                                                                        
                                                                        
                                                                    </th>
                                                                </tr>

                                                                 <tr>
                                                                    <th>Location:</th>
                                                                    <td>
                                                                        <input type="text" name="location" placeholder="Enter Location" class="form-control" title="Location" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Must be Alpha-Numeric"
                                                                    required="required"
                                                                    </td>
                                                                    <th>Semester:</th>
                                                                    <th><select name="semester" required="required">
                                                                        <option >1st Semester</option>
                                                                        <option >2nd Semester</option>
                                                                        
                                                                        </select>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                                </div>

                                            </div>
                                             <!-- End -->
                                    </div>
                              </div>
                            </div>

                            <!--END OF FORMS-->

                            
                            <!--STARTING FORMS-->


                            <div class="row setup-content" id="step-3">
                                  
                                    <div class="col-md-10">

                                        <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    Employment Information
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Employment Staus:</th>
                                                                    <td><input type="text" name="status" placeholder="Status" class="form-control"
                                                                        title="Employment Status" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    required="required">

                                                                        </input></td>
                                                                    <th>Civil Status:</th>
                                                                    <td>
                                                                        <select class="form-control" name="civil_status">
                                                                            <option>Single</option>
                                                                            <option>Married</option>
                                                                        </select>
                                                                    </td>

                                                                    <th>
                                                                        Date of Birth
                                                                    </th>
                                                                    <td>
                                                                         <input type='date' class="form-control" title="Date of Birth" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    required="required" name="birth"/>
                                                                    </td>
                                                                </tr>

                                                                
                                                            
                                                            </thead>
                                                            
                                                        </table>
                                                    </div>

                                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                                </div>
                                            </div>
                                             <!-- End -->
                                      
                                    
                                  </div>
                            </div>

                            <!--END OF FORMS-->

                            <!--STARTING FORMS-->


                             
                            <div class="row setup-content" id="step-4">
                                  
                                    <div class="col-md-10">

                                      <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                Teaching Load
                                            </div>
                                            
                                            <div class="panel-body">
                                                <div class="table-responsive">

                                                    
                                                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                                                      
                                                        <thead>
                                                            <tr>
                                                                <td><input type="checkbox" name="chk"></td>

                                                                <td><input type="text" placeholder="Subject/s" name="sub[]" class="form-control"/></td>
                                                                <TD><INPUT type="text" placeholder="Time" name="time[]" class="form-control"/></TD>
                                                                <TD><INPUT type="text" placeholder="Day" name="day[]" class="form-control"/></TD>
                                                                <TD><INPUT type="text" placeholder="Room" name="room[]" class="form-control"/></TD>
                                                                <TD><INPUT type="text" placeholder="Course" name="course[]" class="form-control"/></TD>
                                                                <TD><INPUT type="text" placeholder="Hrs/Wk" name="hrs[]" class="form-control"/></TD>
                                                                <TD><INPUT type="text" placeholder="Units" name="units[]" class="form-control"/></TD>
                                                                <TD><INPUT type="text" placeholder="Class Size" name="class[]" class="form-control"/></TD>
                                                                
                                                                
                                                            </tr>
                                                        </thead>
                                                    </table>

                                                    <INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
                                                    <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
                                                </div>
                                                 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                               
                                            </div>
                                        <!--END-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                          

                            <!--END OF FORMS-->

                              <!--STARTING FORMS-->

                            <div class="row setup-content" id="step-5">
                                  
                                    <div class="col-md-10">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Teaching Load
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    Contact Hours Per Week:
                                                                </th>
                                                                <td>
                                                                    <input type="text" class="form-control" title="Contact Hours Per Week" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    required="required" name="contact"/>
                                                                </td>

                                                                 <th>
                                                                    No. of Preparations
                                                                </th>
                                                                <td>
                                                                    <input type="text" class="form-control" title="No. of Preparations" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    required="required" name="preparations"/>
                                                                </td>
                                                            <tr>
                                                                <tr>
                                                                <th>
                                                                    Unit Per Week:
                                                                </th>
                                                                <td>
                                                                    <input type="text" class="form-control" title="Unit Per Week" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    required="required" name="uperweek"/>
                                                                </td>

                                                                 <th>
                                                                    Excess Load:
                                                                </th>
                                                                <td>
                                                                    <input type="text" class="form-control" title="Excess Load" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    required="required" name="excess"/>
                                                                </td>
                                                            <tr>

                                                        </thead>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                    </div>
                                  
                            </div>

                            <!--END OF FORMS-->

                            <!--STARTING FORMS-->

                            <div class="row setup-content" id="step-6">
                                  
                                    <div class="col-md-10">
                                      <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Assignments
                                            </div>
                                            <div class="panel-body">
                                                 
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">
                                                                    LOCAL DESIGNATION/OTHER ASSIGNMENT
                                                                </th>
                                                                <th>
                                                                    ETL/HOURS PER WEEK
                                                                </th>

                                                            </tr>
                                                            <tr>
                                                                <th>Designation</th>
                                                                <td><input type="text" class="form-control" name="desig1"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="desig2"/>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <th>Committee Work</th>
                                                                <td><input type="text" class="form-control" name="comm1"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="comm2"/>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <th>Research Work</th>
                                                                <td><input type="text" class="form-control" name="research1"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="research2"/>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <th>Extension</th>
                                                                <td><input type="text" class="form-control" name="exte1"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="exte2"/>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <th>Consultation Time</th>
                                                                <td><input type="text" class="form-control" name="consul1"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="consul2"/>
                                                                </td>
                                                            </tr>


                                                        </thead>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                      <button class="btn btn-success btn-lg pull-right" type="submit" name="submit">Submit</button>
                                   
                                    </div>
                                  
                            </div>

                            <!--END OF FORMS-->
                          
                            </div>

                            </form>
               

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2016 SLSU-Management Information System |Web System
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
              $(document).ready(function () {
              var navListItems = $('div.setup-panel div a'),
                      allWells = $('.setup-content'),
                      allNextBtn = $('.nextBtn');

              allWells.hide();

              navListItems.click(function (e) {
                  e.preventDefault();
                  var $target = $($(this).attr('href')),
                          $item = $(this);

                  if (!$item.hasClass('disabled')) {
                      navListItems.removeClass('btn-primary').addClass('btn-default');
                      $item.addClass('btn-primary');
                      allWells.hide();
                      $target.show();
                      $target.find('input:eq(0)').focus();
                  }
              });

              allNextBtn.click(function(){
                  var curStep = $(this).closest(".setup-content"),
                      curStepBtn = curStep.attr("id"),
                      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                      curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
                      isValid = true;

                  $(".form-group").removeClass("has-error");
                  for(var i=0; i<curInputs.length; i++){
                      if (!curInputs[i].validity.valid){
                          isValid = false;
                          $(curInputs[i]).closest(".form-group").addClass("has-error");
                      }
                  }

                  if (isValid)
                      nextStepWizard.removeAttr('disabled').trigger('click');
              });

              $('div.setup-panel div a.btn-primary').trigger('click');
            });
              </script>



    <script>
            $(document).ready(function(){
            $('[data-toggle="popover"]').popover(); 
                });
    </script>


    <script>

          function addRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            if(rowCount < 20){             // limit the user from creating fields more than your limits
              var row = table.insertRow(rowCount);
              var colCount = table.rows[0].cells.length;
              for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
              }
            }else{
               alert("MAXIMUM ENTRIES ARE 20");
                   
            }
          }

          function deleteRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            for(var i=0; i<rowCount; i++) {
              var row = table.rows[i];
              var chkbox = row.cells[0].childNodes[0];
              if(null != chkbox && true == chkbox.checked) {
                if(rowCount <= 1) {             // limit the user from removing all the fields
                  alert("CANNOT REMOVE ALL");
                  break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
              }
            }
          }


    </script>


   

    


</body>
</html>
