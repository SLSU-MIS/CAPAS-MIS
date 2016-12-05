<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["college_id"]) && !empty($_POST["college_id"])){
    //Get all department data
    $query = $db->query("SELECT * FROM department WHERE college_id = '".$_POST['college_id']."'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display department list
    if($rowCount > 0){
        echo '<option value="">Select Department</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>';
        }
    }else{
        echo '<option value="">Department not available</option>';
    }
}

if(isset($_POST["department_id"]) && !empty($_POST["department_id"])){
    //Get all year data
    $query = $db->query("SELECT * FROM year WHERE department_id = ".$_POST['department_id']." ORDER BY year_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display year list
    if($rowCount > 0){
        echo '<option value="">Select Year</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['year_id'].'">'.$row['year_name'].'</option>';
        }
    }else{
        echo '<option value="">Year not available</option>';
    }
}
?>