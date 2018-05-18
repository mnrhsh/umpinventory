<?php
	session_start();
	include 'css/login.css';
	include 'css/header.css';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>UMP Mental Health Inventory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
    </div>
  </div>
</nav>

<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<div class="login-block">
  <h1>Login to your account</h1>
	<?php
					if (isset($_SESSION['u_id'])) {

						header("Location:index.php");

					} else {

						 echo '<form action="includes/login.inc.php" method="POST">


					<input type="text" name="uid" placeholder="Username/Email">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="submit">LOGIN</button>

				</form>';
					}

				?>
				<center>Not a member? <a href="signup.php">SIGN UP</a>
<footer class="container-fluid bg-4 text-center">

</footer>
			
