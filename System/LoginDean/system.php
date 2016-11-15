
<?php
include('session.php');

error_reporting(0);

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
                <a class="navbar-brand" href="index.html">SLSU:Instructor System</a>
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
                                <h3>Welcome: Instructor</h3>
                       
                                
                            </div>
                        </div>

                    </li>


                   
                    <li>
                        <a href="#" class="active-menu"><i class="fa fa-sitemap "></i>Faculty Teachers Program<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                            <li>
                                <a href="#">College of Arts and Science</a>
                                <a href="#">College of Agriculture</a>
                                <a href="#">College of Business Administration</a>
                                <a href="#">College of Engineering</a>
                                <a href="#">College of Industrial Technology</a>
                                <a href="#">College of Teachers Education</a>
                             
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>IPCR</a>
                    </li>

                     <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Others</a>
                    </li>

                     <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Ohers</a>
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
                       



                        </h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <!--DATA ROW IN EACH TABLE-->
                <div class="row">
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
                                            <td>Engineering</td>
                                            <th>School Year:</th>
                                            <th>
                                                <input type="text" name="schoolyear" placeholder="Enter SY" class="form-control">

                                                </input>
                                                
                                                
                                            </th>
                                        </tr>

                                         <tr>
                                            <th>Location:</th>
                                            <td>MHDP Building</td>
                                            <th>Semester:</th>
                                            <th><select>
                                                <option >1st Semester</option>
                                                <option >1st Semester</option>
                                                
                                                </select>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End -->

                    </div>
                </div>
                <!--DATA ROW-->

                <!--DATA ROW IN EACH TABLE-->
                <div class="row">
                    <div class="col-md-12">

                         <div class="panel panel-danger">
                        <div class="panel-heading">
                            Basic Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name:</th>
                                            <td><input type="text" name="name" placeholder="Name" 
                                                class="form-control"/>

                                                </td>
                                            <th>Rank:</th>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <input type="text" name="schoolyear" placeholder="Enter Rank" class="form-control"/>
                                                     
                                                    
                                                </div>
                                                
                                            </td>
                                        </tr>

                                         <tr>
                                            <th>Home Address:</th>
                                            <td colspan="4">
                                            <input type="text" class="form-control" title="Home Address" 
                                            data-placement="top" data-toggle="popover" data-trigger="focus" data-content="It must Alpa-Numeric"/>

                                                </input>
                                            </td>
                                            
                                        </tr>

                                          <tr>
                                            <th>Month/Year Appointment:</th>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    
                                                        <input type='date' class="form-control" />
                                                        
                                                    
                                                </div>
                                            </td>
                                       
                                            <th> Year of Service in SLSU:</th>
                                            <td>
                                                <div class="form-group">
                                                        <input type="text" placeholder="No.of Years" class="form-control"/>
                                                </div>    
                                             </td>           
                                           </tr>
                                    
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End -->

                    </div>
                </div>
                <!--DATA ROW-->

                  <!--DATA ROW IN EACH TABLE-->
                <div class="row">
                    <div class="col-md-12">

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
                                            <td><input type="text" name="name" placeholder="Status" class="form-control">

                                                </input></td>
                                            <th>Civil Status:</th>
                                            <td>
                                                <select>
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                </select>
                                            </td>

                                            <th>
                                                Date of Birth
                                            </th>
                                            <td>
                                                 <input type='date' class="form-control" />
                                            </td>
                                        </tr>

                                        
                                    
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End -->

                    </div>
                </div>
                <!--DATA ROW-->

                  <!--DATA ROW IN EACH TABLE-->
                <div class="row">
                    <div class="col-md-12">

                         <div class="panel panel-danger">
                        <div class="panel-heading">
                            Teaching Load
                        </div>
                        <form action="show.php" method="post">
                        <div class="panel-body">
                            <div class="table-responsive">
                                
                                <table class="table table-striped table-bordered table-hover" id="dataTable">
                                     
                                    <thead>
                                        <tr>
                                            <TD><INPUT type="checkbox" name="chk"></TD>
                                            <TD><INPUT type="text" placeholder="Subject/s" name="sub[]" class="form-control"/></TD>
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
                        </div>
                    <!--END-->
                    <input type="submit" value="Submit">


                </form>

               

                                        

                <!--DATA ROW IN EACH TABLE-->
                <div class="row">
                    <div class="col-md-12">

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
                                                <input type="text" class="form-control"/>
                                            </td>

                                             <th>
                                                No. of Preparations
                                            </th>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        <tr>
                                            <tr>
                                            <th>
                                                Unit Per Week:
                                            </th>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>

                                             <th>
                                                Excess Load:
                                            </th>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        <tr>

                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    
                     <!-- End -->

                    </div>
                </div>
                <!--DATA ROW-->

                 <!--DATA ROW IN EACH TABLE-->
                <div class="row">
                    <div class="col-md-12">

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
                                            <td><input type="text" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>Committee Work</th>
                                            <td><input type="text" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>Research Work</th>
                                            <td><input type="text" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>Extension</th>
                                            <td><input type="text" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>Consultation Time</th>
                                            <td><input type="text" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"/>
                                            </td>
                                        </tr>


                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    
                     <!-- End -->

                    </div>
                </div>
                <!--DATA ROW-->
                <div class="row" align="center">
                    <div class="col-md-12" align="center">
                         <div class="panel panel-primary" align="center">
                                <div class="panel-heading">

                                </div>

                                <h3 align="center">Date Accomplished</h3>
                                    <div align="center">
                                      <input type="date" />
                                    </div>
                        </div>
                    </div>
                </div>

                <!--SUBMIT BUTTONS-->
                <div class="row">
                    <div class="col-md-12" align="center">
                        <input type="submit" class="btn btn-danger btn-lg"/>
                    </div>
                </div>

              
                
                                    

                 


               



     

           </div>
       </div>
        </div>
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
    <script>
            $(document).ready(function(){
            $('[data-toggle="popover"]').popover(); 
                });
    </script>

    <SCRIPT language="javascript">
        function addRow(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var colCount = table.rows[0].cells.length;
 
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);
 
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }
 
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
        }
 
    </SCRIPT>
   

    


</body>
</html>
