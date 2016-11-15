<html>
<body>
<?php
$period = 8;
$arr2=array('sat','sun','mon','tue','wed','thu','fri');
?>
<table border='2'>
<tr>
<th>Days</th>
<?php 
for($i=1;$i <= $period; $i++){
    ?><th><?php echo $i; ?></th><?php
}
?>
</tr>
<?php 
foreach($arr2 as $day){
    ?>
    <tr>
        <th><?php echo $day; ?></th>
        <?php
        for($i=1;$i <= $period; $i++){
            ?>
            <td>
                <input type="text" placeholder="subject">
                <input type="text" placeholder="subject code">
                <input type="text" placeholder="teachers name">
            </td>
            <?php
        } 
        ?>
        </tr>
    <?php
}
?>
</table>
</body>
</html>