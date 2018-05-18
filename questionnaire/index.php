<?php
	include 'css/index.css';
	include 'header.php';
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
</head>

<body>
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

<div class="ex1">

  <div class="row" >

  <div class="column left">

		<img src="http://www.cardiff.ac.uk/__data/assets/image/0006/766059/Mental-health.jpg" width="400" height="300"><br><br>
 </div>

<div class="column right">
	<h3>"Mental health conditions, such as depression or anxiety, are real, common and treatable. And recovery is possible."</h3><br>
	<p>Take the mental health test to determine whether you are experiencing symptoms of a mental health condition.
	</p><br><center>
	<?php
	if (isset($_SESSION['u_id'])) {
	echo '<a href="page1.php" class="square_btn">TAKE THE TEST</a>';
	} else {
		echo '<a href="login.php" class="square_btn">TAKE THE TEST</a>';
	}
	?>
</div></center>
<hr>
</div>
<div class="row">
<div class="column left" style="padding-top:20px;">
	<h3>"To be healthy as a whole, mental health plays a role"</h3><br>
<p>
		Learn and read on depression, stress and anxiety and watch videos on how can the problem be dealt with.</p><br>
<center><a href="depression.php" class="square_btn">LEARN MORE</a></center>

<br>
</div>

<div class="column right" style="padding-top:20px;" >
<center><img src="https://image.ibb.co/eLjApS/64f724330b7d133015b7137f51d36f75.png" width="380" height="360"></center>
<br>
</div>

</div>
</body>


</html>
