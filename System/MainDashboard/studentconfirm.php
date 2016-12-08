<!--ADD ASSIGNED DATA TO DATABASE-->


          
          <?php

          define('DB_HOST', 'localhost'); 
          define('DB_NAME', 'capas_db');
          define('DB_USER','root');
          define('DB_PASSWORD',''); 

          $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
          $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

            
            if (isset($_POST['submit2'])) {
            if(isset($_POST)==true && empty($_POST)==false){

                  $studentid=$_POST['studentlistid[]'];
                  $studentname=$_POST['studentlistname[]'];
                  $studentsubject=$_POST['studentlistsubject[]'];
                  $instructorname=$_POST['instructorlist_name'];

              foreach($studentid as $a => $b){


               $sql = "INSERT INTO student_evaluate(student_id,student_name,subject,instructor_name) 
               VALUES('$studentid[a]','$studentname[a]', '$studentsubject[a]','$instructorname')";
               
               $res=mysql_query($sql);
                                     

               
                                        If($res)
                                            {
                                        echo "Adding Basic Information was Successful";
                                            }
                                          Else
                                          {
                                        echo "Error in Adding Basic Information";
                                          }
                   
              


              }
            }
          }


            ?>

          <!--END ASSIGNMENT-->