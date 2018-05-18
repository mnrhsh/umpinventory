<?php
include_once("C:/xampp/htdocs/questionnaire/includes/dbh.inc.php");

include 'header.php';
include 'css/edit.css';

$u_email = $_SESSION['u_email'];
$query = "SELECT * FROM users WHERE user_email='$u_email'";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
$id = $row["user_id"];
$fname = $row["user_first"];
$lname = $row["user_last"];
$gender = $row["gender"];
$uid = $row["user_uid"];
$pwd = $row["user_pwd"];
?>

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
<form method = "post" action="update.php">

<center>
    <h2>Edit Profile</h2>
    <table>
  <tr>
    <td>First Name</td>
    <td><input type ="text" name="first" size="60" value= "<?php echo $fname;?>"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type ="text" name="last" size="60" value= "<?php echo $lname;?>"></td>
  </tr>
  <tr>
    <td>Faculty</td>
    <td></td>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" size="60" value=" <?php echo $_SESSION['u_email'];?>" disabled></td>
  </tr>
  <tr>
    <td>User ID</td>
    <td><input type="text" name="uid" size="60" value="<?php echo  $uid;?>"></td>
  </tr>
</table>
</center>

<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<center>
<input type ="submit" value="SAVE">
<input type ="reset" value="RESET">
</center
<br>
</form>
