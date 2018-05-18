<?php
session_start();
include 'css/header.css';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UMP Mental Health Inventory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
      <a class="navbar-brand" href="index.php" >UMP MENTAL HEALTH TEST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

      <?php
	 if(isset($_SESSION["u_id"]))
	 {
     echo '<li><a href="userprofile.php">PROFILE</a></li>';
	   echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">LOGOUT</button>
							</form>';
	 } else
	{

	   echo '<li><a href="login.php">LOGIN</a></li>';
	   echo '<li><a href="signup.php">SIGN UP</a></li>';
	}

       ?>


      </ul>
    </div>
  </div>
</nav>
</html>
