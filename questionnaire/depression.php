<?php
include 'header.php';
include 'css/depression.css';
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
	      <li><a href="#">LEARN MORE</a></li>
	      <li><a href="#">HELPLINES</a></li>
	   </ul>
	</div>
<div class="ex1">
  <div>

  <a href="stress.php "><img src="https://www.pngarts.com/files/1/Right-Arrow-Download-Transparent-PNG-Image.png" width="30" height="30" style="float:right;"></a>
</div>

      <br><br><h2>What is Depression?</h2><hr>
  <div class="row">

  <div class="column left">
    <img src="https://d2sslp958cft0.cloudfront.net/wp-content/uploads/2017/10/05161407/Unterillustration-fu%CC%88r-10-Symptome-einer-Depression-Selbstzweifel.png"  width="285" height="280"><br><br>
  <br>
  </div>

<div class="column right">
  <h2>Depression and College Students</h2>
  <p>A lack of sleep, poor eating habits, and not enough exercise are a recipe for depression among
    college students. The stress that comes with academia — including financial worries,
    pressure to get a good job after school, and failed relationships — is enough to force some students
    to leave college or worse</p><br>
  <h2>Depression symptomps</h2>
  <p>Depression symptoms can vary from mild to severe and can include:<p>
  <ul>
 <li>Feeling sad or having a depressed mood.</li>
 <li>Loss of interest or pleasure in activities once enjoyed.</li>
 <li>Changes in appetite — weight loss or gain unrelated to dieting.</li>
 <li>Trouble sleeping or sleeping too much.</li>
 <li>Difficulty thinking, concentrating or making decisions.</li>
 <li>Feeling worthless or guilty.</li>
 <li>Thoughts of death or suicide</li>
</ul>
 </div>

</div>
<div class="row">
<div class="column left" style="width:65%">
  <h2>Natural Depression Treatment</h2>
  <p>Being depressed can make you feel helpless. You're not. Along with therapy and sometimes medication,
    there's a lot you can do on your own to fight back. Changing your behavior - your physical activity,
    lifestyle, and even your way of thinking, are all natural depression treatments.</p>
    <ul>
   <li>Get into routine.</li>
   <li>Set goals.</li>
   <li>Exercise</li>
   <li>Eat healthily.</li>
   <li>Get enough sleep.</li>
   <li>Challenge negative thoughts.</li>
   <li>Do something new.</li>
  </ul>
<br>
</div>

<div class="column right" style="width:35%" >

<center><img src="  https://png.kisspng.com/20180302/row/kisspng-physical-exercise-physical-fitness-clip-art-vector-cartoon-character-health-movement-5a993454be6550.7721146815199898447799.png"  width="285" height="280"></center><br><br>
<br>
</div>

</div>
</div>
</body>
</html>
