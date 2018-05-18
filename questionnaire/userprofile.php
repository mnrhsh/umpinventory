<?php
include_once("C:/xampp/htdocs/questionnaire/includes/dbh.inc.php");
include "header.php";
include "css/userprofile.css";

$u_email = $_SESSION['u_email'];
$query = "SELECT * FROM users WHERE user_email ='$u_email'";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
$id = $row["user_id"];
$first = $row["user_first"];
$last = $row["user_last"];
$gender = $row["gender"];
$uid = $row["user_uid"];
$pwd = $row["user_pwd"];
?>

<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
</head>
<div id="centeredmenu">
   <ul>
      <li><?php
      if (isset($_SESSION['u_id'])) {
      echo '<a href="page1.php">TAKE THE TEST</a>';
      } else {
        echo '<a href="login.php">TAKE THE TEST</a>';
      }
      ?></li>
      <li><a href="score.php">SCORING INSTRUCTIONS</a></li>
      <li><a href="depression.php">LEARN MORE</a></li>
      <li><a href="#">HELPLINES</a></li>
   </ul>
</div>
<center>
<h2>Hi, <?php echo $first;?> <?php echo $last;?></h2></center>

<form action="edit.php" method="POST">
<center>
  <table>
    <tr>
      <td><b>Name</b></td>
      <td> <?php echo $first; ?> <?php echo $last;?></td>
    </tr>
    <tr>
      <td><b>Gender</b></td>
      <td> <?php echo $gender; ?></td><br>
    </tr>
    <tr>
      <td><b>Email</b></td>
      <td> <?php echo $_SESSION['u_email']; ?></td><br>
    </tr>

    <tr>
      <td><b>User ID</b></td>
      <td> @ <?php echo $uid; ?></td><br>
    </tr>
</table>
</center><br>
<center><input type="submit" name="submit" value="EDIT PROFILE"></center>
</form>

</html>
