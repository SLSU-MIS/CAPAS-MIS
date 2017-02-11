<?php 
    
    error_reporting(0);
    session_start();
    $name = $_SESSION['sess_name'];
    $college = $_SESSION['sess_college'];
    if(!isset($_SESSION['sess_sess_username'])){
      header('Location: index.php?err=2');
    }
?>

<?php    


          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'capas_ipcrdb');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



error_reporting(0); 

If(isset($_REQUEST['submit'])!=''){

                   $index=$_REQUEST['ind'];
                   $res3=1; 
                    
                    $sql="insert into statement(name,unit,period1,period2) values
                    ('".$_REQUEST['name']."','".$_REQUEST['unit']."','".$_REQUEST['period1']."','".$_REQUEST['period2']."')";
                    
                    $res=mysql_query($sql);
                    
                     $sql2="insert into review(name,reviewed_by,reviewed_date,approved_by,approved_date) values
                    ('".$_REQUEST['name']."','".$_REQUEST['review']."','".$_REQUEST['review_date']."','".$_REQUEST['approve']."','".$_REQUEST['approve_date']."')";
                    
                    $res2=mysql_query($sql2);
                    
                    for ($i = 0; $i < $index; $i++) {

                      $Q=$_REQUEST['q'.$i];
                      $E=$_REQUEST['e'.$i];
                      $T=$_REQUEST['t'.$i];
                      $aveg=($Q+$E+$T)/3;
                      $ave=round($aveg,2);

                      $sql3="insert into functions(strategic_no,name,subject,success_indicator,actual,Q,E,T,A,remarks) values
                      (".$_REQUEST['strategic_no'.$i].",\"".$_REQUEST['name']."\",\"".$_REQUEST['subject'.$i]."\",\"".$_REQUEST['success_indicator'.$i]."\",\"".$_REQUEST['actual'.$i]."\",\"".$_REQUEST['q'.$i]."\",\"".$_REQUEST['e'.$i]."\",\"".$_REQUEST['t'.$i]."\",$ave,\"".$_REQUEST['remarks'.$i]."\");";
                      //var_dump($sql3);
                      $res3=mysql_query($sql3);
                      //var_dump($res3);
                      //var_dump(mysql_error());
                      if (!$res3)
                        break;
                    }
                  
                    $sql4="insert into approval(name,discussed,discussed_date,assesed,assesed_date,final,final_date) values
                    ('".$_REQUEST['name']."','".$_REQUEST['discuss']."','".$_REQUEST['discuss_date']."','".$_REQUEST['asses']."','".$_REQUEST['asses_date']."','".$_REQUEST['final']."','".$_REQUEST['final_date']."')";
                        
                    $res4=mysql_query($sql4);

                    If($res)
                        {
                    $note= "Adding Statement Information was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Statement Information";
                      }

                    If($res2)
                        {
                    $note= "Adding Review Information was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Review Information";
                      }


                       If($res3)
                        {
                    $note= "Adding Functions was Successful ".$res3;
                        }
                      Else
                      {
                        $alert= "Error in Adding Functions Information".$res3;;
                      }


                      If($res4)
                        {
                    $note= "Adding Approval was Successful";
                        }
                      Else
                      {
                        $alert= "Error in Adding Approval Information";
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
                <a class="navbar-brand" href="index.html">CAPAS-IPCR</a>
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
                        <a href="#"><i class="fa fa-sitemap "></i>Faculty Teachers Program<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="export-load.php"><i class="fa fa-edit "></i>EXPORT LOAD PDF</a>
                            </li>

                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" class="active-menu"><i class="fa fa-sitemap "></i>IPCR<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="export-ipcr.php"><i class="fa fa-edit "></i>EXPORT IPCR PDF</a>
                            </li>

                        </ul>
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
                        <h1 class="page-head-line" align="center">Individual Performance Commitment and Review(IPCR)</h1>

                        <div class="container">

                              <div class="stepwizard col-md-12">
                            <div class="stepwizard-row setup-panel">
                                  <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle fa fa-pencil-square-o"></a>
                                <p>1. Statement</p>
                              </div>
                                  <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle fa fa-pencil-square-o" disabled="disabled"></a>
                                <p>2. Review</p>
                              </div>
                                  <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle fa fa-pencil-square-o" disabled="disabled"></a>
                                <p>3. Functions</p>
                              </div>

                              <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle fa fa-pencil-square-o" disabled="disabled"></a>
                                <p>4. Approval</p>
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

                          <form action="ipcr.php" method="POST">
                            <div class="row setup-content" id="step-1">
                                <?php if (isset($note)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$note. "</div>"; }?>
                                        <?php if (isset($alert)) {echo "<div class=\"alert alert-danger\"><strong>Alert: </strong>" .$alert. "</div>"; }?>
                                         <?php if (isset($show)) {echo "<div class=\"alert alert-danger\"><strong>Show: </strong>" .$show. "</div>"; }?>
                                  <div class="col-md-10">
                                        <div class="col-md-12">
                                              <div class="panel panel-success">
                                                  <div class="panel-heading">
                                                      Statement
                                                  </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                          <p>I <input type="text" name="name"  value="<?php echo $name; ?>"/> of the <input type="text" name="unit" value="<?php echo $college; ?>"/> Section/Unit/Department
                                                            commit to deliver and agree to be rated on the attainment of the following targets
                                                            in accordance with the indicated measures for the period of <input type='date' title="Period" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                      name="period1" /> to
                                                          
                                                          <input type='date'  title="Period" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                      name="period2" /></p>
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
                                                    Review
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Reviewed by:<br>
                                                                       
                                                                    </th>
                                                                    <td>
                                                                         <input type="text" name="review" class="form-control"  data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                      />
                                                                          Immediate Supervisor
                                                                    </td>


                                                                    <th>Date:
                                                                     
                                                                    </th> 
                                                                    <td>
                                                                          <input type='date' class="form-control" title="Date of Birth" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                       name="review_date"/>
                                                                    </td>
                                                                </tr>

                                                                 <tr>
                                                                    <th>Approved By:</th>
                                                                    <td>
                                                                        <input type="text" name="approve" value="Dr. Milo O. Placino" class="form-control" title="University President" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Must be a Character"/>
                                                                     University President
                                                                   
                                                                    </td>
                                                                    <th>Date:</th>
                                                                    <th>
                                                                        <input type='date' class="form-control" title="University President Date" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                       name="approve_date"/>

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

                                      <div class="panel panel-danger">
                                            <div class="panel-heading">
                                              Functions
                                            </div>
                                            
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                  <tr>
                                                           
                                                            <th colspan="2" style="text-align: center">Output</th>
                                                            <th>Success Indicator</th>
                                                            <th>Actual Accomplishment</th>
                                                            <th colspan="4" style="text-align: center">Rating

                                                            </th>
                                                            <th>Remarks</th>

                                                          </tr>
                                                          <tr>
                                                                    <td>Strategic Priority No:</td>
                                                                    <td>Subject</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Q</td>
                                                                    <td>E</td>
                                                                    <td>T</td>
                                                                    <td>A</td>
                                                                    <td></td>
                                                          </tr>

                                                          <?php
                                                                      $ind  = 0;
                                                                      mysql_connect("localhost","root");
                                                                      mysql_select_db("capas_tpdb");
                                                                      $res=mysql_query("SELECT * FROM teaching_load WHERE name='".$_SESSION['sess_name']."'");
                                                                      while($row=mysql_fetch_array($res))
                                                                      {

                                                                          ?>
                                                                  <tr>
                                                                  
                                                                    <td><input class="form-control" type="number" <?php echo "name='strategic_no".$ind."'"; ?> id="myText" data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Only Numbers Were Accepted"
                                                                    /></td>
                                                                    <td><input class="form-control" type="text" <?php echo "name='subject".$ind."'"; ?> value="<?php echo $row['subject'];?>"></td>
                                                                    <td><input class="form-control" type="text" <?php echo "name='success_indicator".$ind."'"; ?> value="<?php echo $row['class_size'];?>"></td>
                                                                    <td><input class="form-control" type="number" <?php echo "name='actual".$ind."'"; ?> id="myText" data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Only Numbers Were Accepted"
                                                                    /></td>
                                                                    <td>
                                                                       <select class="select-value" placeholder="Value 1" <?php echo "name='q".$ind."'"; ?> >
                                                                        <option value=1>1</option>
                                                                        <option value=2>2</option>
                                                                        <option value=3>3</option> 
                                                                        <option value=4>4</option>
                                                                         <option value=5>5</option>
                                                                      </select>
                                                                    </td>
                                                                    <td>
                                                                         <select class="select-value" placeholder="Value 2" <?php echo "name='e".$ind."'"; ?> >
                                                                          <option value=1>1</option>
                                                                        <option value=2>2</option>
                                                                        <option value=3>3</option>
                                                                        <option value=4>4</option>
                                                                         <option value=5>5</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                         <select class="select-value" placeholder="Value 3" <?php echo "name='t".$ind."'"; ?> >
                                                                             <option value=1>1</option>
                                                                        <option value=2>2</option>
                                                                        <option value=3>3</option>
                                                                        <option value=4>4</option>
                                                                         <option value=5>5</option>
                                                                          </select> 
                                                                    </td>
                                                                    <td class="td-output">
                                                                     <input type="number" placeholder="Average" class="input-average" <?php echo "name='average".$ind."'"; ?> />
                                                                    </td>
                                                                    <td><input type="text" <?php echo "name='remarks".$ind."'"; ?> class="form-control"/></td>
                                                                    
                                                                 
                                                                   <?php
                                                                    $ind++;
                                                                    }
                                                                    ?>
                                                        <input type='hidden' name="ind" <?php echo "value=".$ind ?> />

                                                        </table>

                                                       
                                                    
                                                    
                                               
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

                            <div class="row setup-content" id="step-4">
                                  
                                    <div class="col-md-10">

                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                               Approval
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    Discussed With:
                                                                </th>
                                                                <td>
                                                                    <input type="text" class="form-control" title="Discussed With" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    name="discuss" value="<?php echo $name; ?>"/>
                                                                </td>

                                                                 <th>
                                                                    Date
                                                                </th>
                                                                <td>
                                                                    <input type='date' class="form-control" title="Date of Discussion" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                       name="discuss_date" />
                                                                </td>
                                                            </tr>
                                                                <tr>
                                                                  <th>
                                                                      Assesed By:
                                                                  </th>
                                                                  <td>
                                                                      <input type="text" class="form-control" title="Assesed By" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                      name="asses"/>
                                                                  </td>

                                                                  <th>
                                                                      Date:
                                                                  </th>

                                                                  <td>
                                                                   <input type='date' class="form-control" title="Date of Assesesment" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                       name="asses_date" />
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                 <th>
                                                                    Final Rating:
                                                                </th>
                                                                <td>
                                                                    <input type="text" class="form-control" title="Final Rating" 
                                                                    data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                    name="final" value="Dr. Milo O. Placino"/>
                                                                </td>
                                                                <th>
                                                                    Date:
                                                                </th>

                                                                <td>
                                                                    <input type='date' class="form-control" title="Date of Rating" 
                                                                      data-placement="top" data-toggle="popover" data-trigger="focus" data-content="Please do complete the right information"
                                                                       name="final_date" />
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


    <script>

      $(window).ready(function() {
        getSelectValueAverage();
        $(".select-value").change(function() {
          getSelectValueAverage(this);
        });
      });

      function getSelectValueAverage(outputTb) {
        var sum = 0, length = 0;
        $(outputTb).parent().parent().find(".select-value").each(function() {
          sum += parseFloat($(this).val());
          length++;
        });
        // Round of two the nearest hundredths
        var result = Math.round(sum/length *100) / 100;
        var inputAve = $(outputTb).parent().siblings(".td-output").children(".input-average");
        inputAve.val(result);
        inputAve.attr("value", result);
      }

    </script>

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


    

   

    


</body>
</html>
