<?php

$txtbox = $_POST['sub'];
$txtbox2 = $_POST['time'];
$txtbox3 = $_POST['day'];
$txtbox4 = $_POST['room'];
$txtbox5 = $_POST['course'];
$txtbox6 = $_POST['hrs'];
$txtbox7 = $_POST['units'];
$txtbox8 = $_POST['class'];


foreach($txtbox as $a => $b)
  echo "$txtbox[$a] - $txtbox2[$a] - $txtbox3[$a] - $txtbox4[$a] - $txtbox5[$a] - $txtbox6[$a] - $txtbox7[$a] - $txtbox8[$a]";


?>