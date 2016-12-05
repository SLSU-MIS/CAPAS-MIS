<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.select-boxes{width: 280px;text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #FB4314;
    color: #55BB91;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}
</style>
<script src="plugins/jQuery/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#college').on('change',function(){
        var collegeID = $(this).val();
        if(collegeID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'college_id='+collegeID,
                success:function(html){
                    $('#department').html(html);
                    $('#year').html('<option value="">ERROR THIS</option>'); 
                }
            }); 
        }else{
            $('#department').html('<option value="">Select College first</option>');
            $('#year').html('<option value="">Select Department first</option>'); 
        }
    });
    
    $('#department').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'department_id='+departmentID,
                success:function(html){
                    $('#year').html(html);
                }
            }); 
        }else{
            $('#year').html('<option value="">Error this</option>'); 
        }
    });
});
</script>
</head>
<body>
    <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
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

                        <?php
                            //Include database configuration file
                            include('db/dbConfig.php');
                            
                            //Get all country data
                            $query = $db->query("SELECT * FROM college ORDER BY college_name ASC");
                            
                            //Count total number of rows
                            $rowCount = $query->num_rows;
                        ?>
                       <select name="college" id="college">
                            <option value="">Select College</option>
                            <?php
                            if($rowCount > 0){
                                while($row = $query->fetch_assoc()){ 
                                    echo '<option value="'.$row['college_id'].'">'.$row['college_name'].'</option>';
                                }
                            }else{
                                echo '<option value="">College not available</option>';
                            }
                            ?>
                      </select>
                      </th>
                            <th>
                             <select name="department" id="deparment">
                                <option value="">Select college first</option>
                            </select>
                            </th>
                            
                            <th>
                                 <select name="year" id="year">
                              <option value="">Select department first</option>
                          </select>
                            </th>

                            <th>
                              
                            </th>

                            <th>
                              
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
</body>
</html>
