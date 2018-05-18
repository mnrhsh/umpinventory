<?php
	session_start();
	include 'css/signup.css';
	include 'css/header.css'

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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"></button>

      <a class="navbar-brand" href="index.php">UMP MENTAL HEALTH TEST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
				<?php
				echo '<li><a href="login.php">LOGIN</a></li>'; ?>
      </ul>
    </div>
  </div>
</nav>


<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<div class="signup-block">
  <h1>Sign up and join the community!</h1>
	<form class="signup-form" action="includes/signup.inc.php" method="POST">
		<p>First Name</p>
		<input type="text" name="first" placeholder="Enter Username">
		<p>Last Name</p>
		<input type="text" name="last" placeholder="Enter Password">
		<p>Gender</p>

	  <input id="male" name="gender" type="radio" value="Male" style="height:15px;">Male<br>
		<input id="female" name="gender" type="radio" value="Female" style="height:15px;">Female<br><br>
		<p>Select Faculty</p>
		<select name="faculty" style="height:35px; width:520px;">
		 <option value="Computer Systems & Software Engineering">Computer Systems & Software Engineering</option>
		<option value="Civil Engineering & Earth Resources">Civil Engineering & Earth Resources</option>
		<option value="Chemical & Natural Resources Engineering">Chemical & Natural Resources Engineering</option>
		<option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
		<option value="Industrial Sciences & Technology">Industrial Sciences & Technology</option>
		<option value="Manufacturing Engineering">Manufacturing Engineering</option>
		<option value="Mechanical Engineering">Mechanical Engineering</option>
		<option value="Engineering Technology">Engineering Technology</option>
		<option value="Industrial Management">Industrial Management</option>
	</select><br><br>
		<p>Email Address</p>
		<input type="text" name="email" placeholder="Enter Email Address">
		<p>Choose a Username</p>
		<input type="text" name="uid" placeholder="Enter Username">
		<p>Enter Password</p>
		<input type="password" name="pwd" placeholder="Password"><br><br>
		<button type="submit" name="submit">SIGN UP</button><br><br>

	</form>
</div>
</html>
