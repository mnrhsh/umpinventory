<?php
include_once("C:/xampp/htdocs/questionnaire/includes/dbh.inc.php");
include "header.php";

$queryStress = "SELECT SUM(answer_value) FROM  record WHERE question_no IN ('1','6','8','11','12','14','18')";
$result = mysqli_query($conn, $queryStress);

if($result){
  $data = mysql_fetch_assoc($result);
   echo $data;
 }
 ?>
