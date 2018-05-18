<?php

include_once("C:/xampp/htdocs/questionnaire/includes/dbh.inc.php");
include 'header.php';

extract ($_POST);
$u_email = $_SESSION['u_email'];
$query =  "UPDATE users SET user_first= '$first', user_last='$last', user_uid='$uid' WHERE user_email ='$u_email'";
$result = mysqli_query($conn, $query) or die ("Could not execute query");
if ($result) {
  echo "<script type = 'text/javascript'> window.location='userprofile.php'</script>";

}
?>
