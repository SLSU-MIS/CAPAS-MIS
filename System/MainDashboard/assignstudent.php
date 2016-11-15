<?php
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require 'db/connect.php';


        $sem = "1st Semester";
        $sy="2015-2016";

        $userId=$_POST['stud'];
     

    //set ng session sa prof
        $prof1=$_POST['prof1'];
        $_SESSION['prof1']=$prof1;

        $prof2=$_POST['prof2'];
        $_SESSION['prof2']=$prof2;

        $prof3=$_POST['prof3'];
        $_SESSION['prof3']=$prof3;

        $prof4=$_POST['prof4'];
        $_SESSION['prof4']=$prof4;

        $prof5=$_POST['prof5'];
        $_SESSION['prof5']=$prof5;

        $prof6=$_POST['prof6'];
        $_SESSION['prof6']=$prof6;

        $prof7=$_POST['prof7'];
        $_SESSION['prof7']=$prof7;

        $prof8=$_POST['prof8'];
        $_SESSION['prof8']=$prof8;

        $prof9=$_POST['prof9'];
        $_SESSION['prof9']=$prof9;

        $prof10=$_POST['prof10'];
        $_SESSION['prof10']=$prof10;




        //set ng session sa section
        $sec1=$_POST['sec1'];
        $_SESSION['sec1']=$sec1;

        $sec2=$_POST['sec2'];
        $_SESSION['sec2']=$sec2;

        $sec3=$_POST['sec3'];
        $_SESSION['sec3']=$sec3;

        $sec4=$_POST['sec4'];
        $_SESSION['sec4']=$sec4;

        $sec5=$_POST['sec5'];
        $_SESSION['sec5']=$sec5;

        $sec6=$_POST['sec6'];
        $_SESSION['sec6']=$sec6;

        $sec7=$_POST['sec7'];
        $_SESSION['sec7']=$sec7;

        $sec8=$_POST['sec8'];
        $_SESSION['sec8']=$sec8;

        $sec9=$_POST['sec9'];
        $_SESSION['sec9']=$sec9;

        $sec10=$_POST['sec10'];
        $_SESSION['sec10']=$sec10;



        //set ng session sa subject
        $subj1=$_POST['subj1'];
        $_SESSION['subj1']=$subj1;


        $subj2=$_POST['subj2'];
        $_SESSION['subj2']=$subj2;

        $subj3=$_POST['subj3'];
        $_SESSION['subj3']=$subj3;

        $subj4=$_POST['subj4'];
        $_SESSION['subj4']=$subj4;

        $subj5=$_POST['subj5'];
        $_SESSION['subj5']=$subj5;

        $subj6=$_POST['subj6'];
        $_SESSION['subj6']=$subj6;

        $subj7=$_POST['subj7'];
        $_SESSION['subj7']=$subj7;

        $subj8=$_POST['subj8'];
        $_SESSION['subj8']=$subj8;

        $subj9=$_POST['subj9'];
        $_SESSION['subj9']=$subj9;

        $subj10=$_POST['subj10'];
        $_SESSION['subj10']=$subj10;




        //converts sem into sem_id
    $sql="SELECT sem_id FROM semester WHERE sem_description='$sem'";
    $query=mysqli_query($conn, $sql);

    if($query){
      while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
        $sem_id=$row[0];
        //echo $sem_id;
      }

    }
    
    //prof
    $query = "SELECT ins_name FROM instructor_evaluator"; 
         $result = mysqli_query($conn, $query);
            if(isset($_SESSION['prof1'])){    //babaguhin
              $optprof1 = $prof1;       //babaguhin
            }else{                //babaguhin
              $optprof1 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof2'])){   //babaguhin
              $optprof2 = $prof2;       //babaguhin
            }else{                //babaguhin
              $optprof2 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof3'])){   //babaguhin
              $optprof3 = $prof3;       //babaguhin
            }else{                //babaguhin
              $optprof3 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof4'])){   //babaguhin
              $optprof4 = $prof4;       //babaguhin
            }else{                //babaguhin
              $optprof4 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof5'])){   //babaguhin
              $optprof5 = $prof5;       //babaguhin
            }else{                //babaguhin
              $optprof5 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof6'])){   //babaguhin
              $optprof6 = $prof6;       //babaguhin
            }else{                //babaguhin
              $optprof6 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof7'])){   //babaguhin
              $optprof7 = $prof7;       //babaguhin
            }else{                //babaguhin
              $optprof7 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof8'])){   //babaguhin
              $optprof8 = $prof8;       //babaguhin
            }else{                //babaguhin
              $optprof8 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof9'])){   //babaguhin
              $optprof9 = $prof9;       //babaguhin
            }else{                //babaguhin
              $optprof9 = "CHOOSE PROF";
            }

             if(isset($_SESSION['prof10'])){    //babaguhin
              $optprof10 = $prof10;       //babaguhin
            }else{                //babaguhin
              $optprof10 = "CHOOSE PROF";
            }


         

         while($row = mysqli_fetch_array($result)){
            $optprof1 = $optprof1."<option>$row[0]</option>";
            $optprof2 = $optprof2."<option>$row[0]</option>";
            $optprof3 = $optprof3."<option>$row[0]</option>";
            $optprof4 = $optprof4."<option>$row[0]</option>";
            $optprof5 = $optprof5."<option>$row[0]</option>";
            $optprof6 = $optprof6."<option>$row[0]</option>";
            $optprof7 = $optprof7."<option>$row[0]</option>";
            $optprof8 = $optprof8."<option>$row[0]</option>";
            $optprof9 = $optprof9."<option>$row[0]</option>";
            $optprof10 = $optprof10."<option>$row[0]</option>";
         }

         //section
         $query = "SELECT section_id FROM section"; 
         $result = mysqli_query($conn, $query);
            if(isset($_SESSION['sec1'])){ //babaguhin
              $optsec1 = $sec1; //babaguhin
            }else{
              $optsec1 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec2'])){ //babaguhin
              $optsec2 = $sec2; //babaguhin
            }else{
              $optsec2 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec3'])){ //babaguhin
              $optsec3= $sec3;  //babaguhin
            }else{
              $optsec3 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec4'])){ //babaguhin
              $optsec4 = $sec4; //babaguhin
            }else{
              $optsec4 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec5'])){ //babaguhin
              $optsec5 = $sec5; //babaguhin
            }else{
              $optsec5 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec6'])){ //babaguhin
              $optsec6 = $sec6; //babaguhin
            }else{
              $optsec6 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec7'])){ //babaguhin
              $optsec7 = $sec7; //babaguhin
            }else{
              $optsec7 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec8'])){ //babaguhin
              $optsec8 = $sec8; //babaguhin
            }else{
              $optsec8 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec9'])){ //babaguhin
              $optsec9 = $sec9; //babaguhin
            }else{
              $optsec9 = "CHOOSE SECTION";//babaguhin
            }

            if(isset($_SESSION['sec10'])){ //babaguhin
              $optsec10 = $sec10; //babaguhin
            }else{
              $optsec10 = "CHOOSE SECTION";//babaguhin
            }
            /**dito mo ituloy yung if else hanggang optsec15**/


         while($row = mysqli_fetch_array($result)){
            $optsec1 = $optsec1."<option>$row[0]</option>";
            $optsec2 = $optsec2."<option>$row[0]</option>";
            $optsec3 = $optsec3."<option>$row[0]</option>";
            $optsec4 = $optsec4."<option>$row[0]</option>";
            $optsec5 = $optsec5."<option>$row[0]</option>";
            $optsec6 = $optsec6."<option>$row[0]</option>";
            $optsec7 = $optsec7."<option>$row[0]</option>";
            $optsec8 = $optsec8."<option>$row[0]</option>";
            $optsec9 = $optsec9."<option>$row[0]</option>";
            $optsec10 = $optsec10."<option>$row[0]</option>";


         }

         //subject
          $query = "SELECT subj_code FROM subject"; 
         $result = mysqli_query($conn, $query);
            if(isset($_SESSION['subj1'])){  //babaguhin
              $optsubj1 = $subj1; //babaguhin
            }else{
              $optsubj1 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj2'])){  //babaguhin
              $optsubj2 = $subj2; //babaguhin
            }else{
              $optsubj2 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj3'])){  //babaguhin
              $optsubj3 = $subj3; //babaguhin
            }else{
              $optsubj3 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj4'])){  //babaguhin
              $optsubj4 = $subj4; //babaguhin
            }else{
              $optsubj4 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj5'])){  //babaguhin
              $optsubj5 = $subj5; //babaguhin
            }else{
              $optsubj5 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj6'])){  //babaguhin
              $optsubj6 = $subj6; //babaguhin
            }else{
              $optsubj6 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj7'])){  //babaguhin
              $optsubj7 = $subj7; //babaguhin
            }else{
              $optsubj7 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj8'])){  //babaguhin
              $optsubj8 = $subj8; //babaguhin
            }else{
              $optsubj8 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj9'])){  //babaguhin
              $optsubj9 = $subj9; //babaguhin
            }else{
              $optsubj9 = "CHOOSE SUBJECT";//babaguhin
            }

            if(isset($_SESSION['subj10'])){   //babaguhin
              $optsubj10 = $subj10; //babaguhin
            }else{
              $optsubj10 = "CHOOSE SUBJECT";//babaguhin
            }
            /**dito mo ituloy yung if else hanggang optsubj15**/

       


         while($row = mysqli_fetch_array($result)){
            $optsubj1 = $optsubj1."<option>$row[0]</option>";
            $optsubj2 = $optsubj2."<option>$row[0]</option>";
            $optsubj3 = $optsubj3."<option>$row[0]</option>";
            $optsubj4 = $optsubj4."<option>$row[0]</option>";
            $optsubj5 = $optsubj5."<option>$row[0]</option>";
            $optsubj6 = $optsubj6."<option>$row[0]</option>";
            $optsubj7 = $optsubj7."<option>$row[0]</option>";
            $optsubj8 = $optsubj8."<option>$row[0]</option>";
            $optsubj9 = $optsubj9."<option>$row[0]</option>";
            $optsubj10 = $optsubj10."<option>$row[0]</option>";
           

           


         }

    if($_POST['sub']){

        if($_POST['stud'] == NULL){
            echo "kulang";

        }else{

        
              //PROF_1
                    if( $prof1 == "CHOOSE PROF" && $sec1 =="CHOOSE SECTION" && $subj1 =="CHOOSE SUBJECT"){
                        $ok1= "";

                    }else if(isset($prof1) && isset($sec1) && isset($subj1) && $prof1 != "CHOOSE PROF" && $sec1 !="CHOOSE SECTION" && $subj1 !="CHOOSE SUBJECT")
              {

                    $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof1'";
                    $query=mysqli_query($conn, $sql);

                    if($query){
                      while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                        $prof_id1=$row[0];
                      }

                    }
                $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId','$prof_id1', '$prof1', '$subj1', '$sec1', '$sem_id', '$sy')";
                $query=mysqli_query($conn, $sql);

                if($query){
                  $ok1= "ok";
                  
                }

                            unset($_SESSION['prof1']);
                            unset($_SESSION['sec1']);
                            unset($_SESSION['subj1']);
              }else
                {
                $ok1= "kulang";
                }
              

                    //PROF_2
                    if( $prof2 == "CHOOSE PROF" && $sec2 =="CHOOSE SECTION" && $subj2 =="CHOOSE SUBJECT"){
                        $ok2= "";

                    }else if(isset($prof2) && isset($sec2) && isset($subj2) && $prof2 != "CHOOSE PROF" && $sec2 !="CHOOSE SECTION" && $subj2 !="CHOOSE SUBJECT")
                    {
                                
                                 $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof2'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id2=$row[0];
                                    }

                                }

                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id2', '$prof2', '$subj2', '$sec2', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok2= "ok";
                        }
                            unset($_SESSION['prof2']);
                            unset($_SESSION['sec2']);
                            unset($_SESSION['subj2']);
                    }else
                    {
                        $ok2= "kulang";
                    }
                    
                    //PROF_3
                    if( $prof3 == "CHOOSE PROF" && $sec3 =="CHOOSE SECTION" && $subj3 =="CHOOSE SUBJECT"){
                        $ok3= "";

                    }else if(isset($prof3) && isset($sec3) && isset($subj3) && $prof3 != "CHOOSE PROF" && $sec3 !="CHOOSE SECTION" && $subj3 !="CHOOSE SUBJECT")
                    {
                                
                                $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof3'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id3=$row[0];
                                    }

                                }

                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id3', '$prof3', '$sec3', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok3= "ok";
                            unset($_SESSION['prof3']);
                            unset($_SESSION['sec3']);
                            unset($_SESSION['subj3']);
                        }
                    }else
                    {
                        $ok3= "kulang";
                    }
                    
                    //PROF_4
                    if( $prof4 == "CHOOSE PROF" && $sec4 =="CHOOSE SECTION" && $subj4 =="CHOOSE SUBJECT"){
                        $ok4= "";

                    }else if(isset($prof4) && isset($sec4) && isset($subj4) && $prof4 != "CHOOSE PROF" && $sec4 !="CHOOSE SECTION" && $subj4 !="CHOOSE SUBJECT")
                    {
                                
                                $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof4'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id4=$row[0];
                                    }

                                }

                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id4', '$prof4', '$sec4', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok4= "ok";
                            unset($_SESSION['prof4']);
                            unset($_SESSION['sec4']);
                            unset($_SESSION['subj4']);
                        }
                    }else
                    {
                        $ok5= "kulang";
                    }
                    
                    //PROF_5
                    if( $prof5 == "CHOOSE PROF" && $sec5 =="CHOOSE SECTION" && $subj5 =="CHOOSE SUBJECT"){
                        $ok= "";

                    }else if(isset($prof5) && isset($sec5) && isset($subj5) && $prof5 != "CHOOSE PROF" && $sec5 !="CHOOSE SECTION" && $subj5 !="CHOOSE SUBJECT")
                    {

                                $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof5'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id5=$row[0];
                                    }

                                }
                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id5', '$prof5', '$sec5', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok5= "ok";
                            unset($_SESSION['prof5']);
                            unset($_SESSION['sec5']);
                            unset($_SESSION['subj5']);
                        }
                    }else
                    {
                        $ok5= "kulang";
                    }

                    //PROF_6
                    if( $prof6 == "CHOOSE PROF" && $sec6 =="CHOOSE SECTION" && $subj6 =="CHOOSE SUBJECT"){
                        $ok6= "";

                    }else if(isset($prof6) && isset($sec6) && isset($subj6) && $prof6 != "CHOOSE PROF" && $sec6 !="CHOOSE SECTION" && $subj6 !="CHOOSE SUBJECT")
                    {

                                $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof6'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id6=$row[0];
                                    }

                                }
                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id6', '$prof6', '$sec6', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok6= "ok";
                            unset($_SESSION['prof6']);
                            unset($_SESSION['sec6']);
                            unset($_SESSION['subj6']);
                        }
                    }else
                    {
                        $ok6= "kulang";
                    }

                    //PROF_7
                    if( $prof7 == "CHOOSE PROF" && $sec7 =="CHOOSE SECTION" && $subj7 =="CHOOSE SUBJECT"){
                        $ok7= "";

                    }else if(isset($prof7) && isset($sec7) && isset($subj7) && $prof7 != "CHOOSE PROF" && $sec7 !="CHOOSE SECTION" && $subj7 !="CHOOSE SUBJECT")
                    {

                                 $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof7'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id7=$row[0];
                                    }

                                }
                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id7', '$prof7', '$sec7', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok7= "ok";
                            unset($_SESSION['prof7']);
                            unset($_SESSION['sec7']);
                            unset($_SESSION['subj7']);
                        }
                    }else
                    {
                        $ok7= "kulang";
                    }

                    //PROF_8
                         if( $prof8  == "CHOOSE PROF" && $sec8 =="CHOOSE SECTION" && $subj8 =="CHOOSE SUBJECT"){
                        $ok8= "";

                    }else if(isset($prof8) && isset($sec8) && isset($subj8) && $prof8 != "CHOOSE PROF" && $sec8 !="CHOOSE SECTION" && $subj8 !="CHOOSE SUBJECT")
                    {

                                 $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof8'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id8=$row[0];
                                    }

                                }
                        $sql="INSERT INTO stud_prof (student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id8', '$prof8', '$sec8', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok10= "ok";
                            unset($_SESSION['prof8']);
                            unset($_SESSION['sec8']);
                            unset($_SESSION['subj8']);
                        }
                    }else
                    {
                        $ok8= "kulang";
                    }

                    //PROF_9
                   if( $prof9  == "CHOOSE PROF" && $sec9 =="CHOOSE SECTION" && $subj9 =="CHOOSE SUBJECT"){
                        $ok9= "";

                    }else if(isset($prof9) && isset($sec9) && isset($subj9) && $prof9 != "CHOOSE PROF" && $sec9 !="CHOOSE SECTION" && $subj9 !="CHOOSE SUBJECT")
                    {

                                $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof9'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id9=$row[0];
                                    }

                                }
                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id9', '$prof9', '$sec9', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok9= "ok";
                            unset($_SESSION['prof9']);
                            unset($_SESSION['sec9']);
                            unset($_SESSION['subj9']);
                        }
                    }else
                    {
                        $ok9= "kulang";
                    }

                    //PROF_10
                    if( $prof10  == "CHOOSE PROF" && $sec10 =="CHOOSE SECTION" && $subj10 =="CHOOSE SUBJECT"){
                        $ok10= "";

                    }else if(isset($prof10) && isset($sec10) && isset($subj10) && $prof10 != "CHOOSE PROF" && $sec10 !="CHOOSE SECTION" && $subj10 !="CHOOSE SUBJECT")
                    {

                                $sql="SELECT ins_id FROM instructor_evaluator WHERE ins_name='$prof10'";
                                $query=mysqli_query($conn, $sql);

                                if($query){
                                    while ($row=mysqli_fetch_array($query, MYSQLI_NUM)) {
                                        $prof_id10=$row[0];
                                    }

                                }
                        $sql="INSERT INTO stud_prof(student_id, ins_id, prof_name, subj_code, section_id, sem_id, school_year ) VALUES('$userId', '$prof_id10', '$prof10', '$sec10', '$sem_id', '$sy')";
                        $query=mysqli_query($conn, $sql);

                        if($query){
                            $ok10= "ok";
                            unset($_SESSION['prof10']);
                            unset($_SESSION['sec10']);
                            unset($_SESSION['subj10']);
                        }
                    }else
                    {
                        $ok10= "kulang";
                    }

                    
            //echo $userId;
     
        }


    } //endng $_POST['sub']
    


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
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

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
              <!--POP UP FOR ASSIGNING THE TABLE OF STUDENTS-->

                <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">


        <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Student</h3>

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
              <h3 class="box-title">Registered Student Evaluators Available on the Database</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                    <!--CONTENT ADD-->


                      <div id="page-content-wrapper">
    <form role="form" action="assignstudent.php" method="POST">
        <h1>Student ID:  <?php

                            error_reporting(0);
                           define('DB_HOST', 'localhost'); 
                            define('DB_NAME', 'capas_db');
                            define('DB_USER','root');
                            define('DB_PASSWORD',''); 

                            $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
                            $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


                            $get=mysql_query("SELECT student_id FROM student_evaluator");
                          
                                        echo '<select name="stud">';
                                        
                                                 while($row = mysql_fetch_assoc($get))
                                                     {
                                                    echo "<option>".$row['student_id']."</option>";
                                                     }


                                            echo'</select>';
                                        

                                ?>
        </h1>
          

        <h1>ADD your professors</h1>     
  <table class="table table">
    <thead>
        <tr>
        <th style="width:11%">PROFESSORS</th>
        <th style="width:8%">SECTION</th>
        <th style="width:8%">SUBJECT</th>
        <th style="width:8%">SEMESTER</th>
        <th style="width:8%">S.Y</th>
        <th style="width:8%">DONE</th>
      </tr>
    </thead>
    <body>
      <tr>
        <td><select class="form-table" name="prof1"><option><?php echo $optprof1;?></option></select></td>
        <td><select name="sec1"><option><?php echo $optsec1;?></option></select></td>   
        <td><select name="subj1"><option><?php echo $optsubj1;?></option></select></td>     
        <td><?php echo $sem;?></td> 
        <td><?php echo $sy;?></td>  
        <td><?php echo $ok1; ?></td>    
      </tr>
      <tr>
        <td><select name="prof2"><option><?php echo $optprof2;?></option></select></td>
        <td><select name="sec2"><option><?php echo $optsec2;?></option></select></td>
        <td><select name="subj2"><option><?php echo $optsubj2;?></option></select></td>     
        <td><?php echo $sem;?></td> 
        <td><?php echo $sy;?></td>
        <td><?php echo $ok2; ?></td>    
      </tr>
      <tr>
        <td><select name="prof3"><option><?php echo $optprof3;?></option></select></td>
        <td><select name="sec3"><option><?php echo $optsec3;?></option></select></td>   
        <td><select name="subj3"><option><?php echo $optsubj3;?></option></select></td>     
        <td><?php echo $sem;?></td>
        <td><?php echo $sy;?></td>
        <td><?php echo $ok3; ?></td>
      </tr>
      <tr>
            <td><select name="prof4"><option><?php echo $optprof4;?></option></select></td>
            <td><select name="sec4"><option><?php echo $optsec4;?></option></select></td>   
            <td><select name="subj4"><option><?php echo $optsubj4;?></option></select></td>         
            <td><?php echo $sem;?></td> 
            <td><?php echo $sy;?></td>  
            <td><?php echo $ok4; ?></td>
      </tr>
      <tr>
            <td><select name="prof5"><option><?php echo $optprof5;?></option></select></td>
            <td><select name="sec5"><option><?php echo $optsec5;?></option></select></td>   
            <td><select name="subj5"><option><?php echo $optsubj5;?></option></select></td>     
            <td><?php echo $sem;?></td>
            <td><?php echo $sy;?></td>
            <td><?php echo $ok5; ?></td>    
        </tr>
        <tr>
            <td><select name="prof6"><option><?php echo $optprof6;?></option></select></td>
            <td><select name="sec6"><option><?php echo $optsec6;?></option></select></td>   
            <td><select name="subj6"><option><?php echo $optsubj6;?></option></select></td>     
            <td><?php echo $sem;?></td> 
            <td><?php echo $sy;?></td>
            <td><?php echo $ok6; ?></td>  
        </tr>
        <tr>
            <td><select name="prof7"><option><?php echo $optprof7;?></option></select></td>
            <td><select name="sec7"><option><?php echo $optsec7;?></option></select></td>   
            <td><select name="subj7"><option><?php echo $optsubj7;?></option></select></td>     
            <td><?php echo $sem;?></td> 
            <td><?php echo $sy;?></td>  
            <td><?php echo $ok7; ?></td>
        </tr>
        <tr>
            <td><select name="prof8"><option><?php echo $optprof8;?></option></select></td>
            <td><select name="sec8"><option><?php echo $optsec8;?></option></select></td>   
            <td><select name="subj8"><option><?php echo $optsubj8;?></option></select></td>     
            <td><?php echo $sem;?></td> 
            <td><?php echo $sy;?></td>
            <td><?php echo $ok8; ?></td>    
        </tr>
        <tr>
            <td><select name="prof9"><option><?php echo $optprof9;?></option></select></td>
            <td><select name="sec9"><option><?php echo $optsec9;?></option></select></td>   
            <td><select name="subj9"><option><?php echo $optsubj9;?></option></select></td>     
            <td><?php echo $sem;?></td> 
            <td><?php echo $sy;?></td>
            <td><?php echo $ok9; ?></td>    
        </tr>
        <tr>
            <td><select name="prof10"><option><?php echo $optprof10;?></option></select></td>
            <td><select name="sec10"><option><?php echo $optsec10;?></option></select></td>
            <td><select name="subj10"><option><?php echo $optsubj10;?></option></select></td>           
            <td><?php echo $sem;?></td> 
            <td><?php echo $sy;?></td>
            <td><?php echo $ok10; ?></td>   
        </tr>
    
    </body>
  </table>
  <div class="button">
  <input type="submit" name="sub" class="btn btn-warning" value="Add" />
</div>

</div>




                    <!--END CONTENT ADD-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
            <!-- /.box-body -->
          </div>
        </div>





             <!--END POP--> 
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
