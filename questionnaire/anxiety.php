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
	      <li><a href="anxiety.php">LEARN MORE</a></li>
	      <li><a href="#">HELPLINES</a></li>
	   </ul>
	</div>
<div class="ex1">
        <h2>What is Anxiety?</h2><hr>
  <div class="row">

  <div class="column left" style="width:40%">
    <img src="https://kidshelpline.com.au/sites/default/files/bdl_image/01_8.png"  width="380" height="280"><br><br>
  <br>
  </div>

<div class="column right"style="width:60%">
  <h2>Anxiety Disorders</h2>
  <p>Anxiety disorders reflect disorders that share a general feature of excessive fear (i.e. emotional response to perceived or real threat) and/or anxiety (i.e. anticipation of future threat) and demonstrate behavioral and functional disturbances as a result.
    Panic attacks are a feature that can occur in the context of many anxiety disorders and reflect a type of fear response.</p>
<br>
  <h2>Type of Disorders</h2>
  <ul>
  <li><b>Panic disorder</b>. You feel terror that strikes at random. During a panic attack, you may also sweat, have chest pain, and feel palpitations (unusually strong or irregular heartbeats).
    Sometimes you may feel like you’re choking or having a heart attack.</li><br></div>

 <li><b>Social anxiety disorder</b>. Also called social phobia, this is when you feel overwhelming worry and self-consciousness about everyday social situations.
   You fixate about others judging you or on being embarrassed or ridiculed.</li><br>
 <li><b>Specific phobias</b>. You feel intense fear of a specific object or situation, such as heights or flying.
The fear goes beyond what’s appropriate and may cause you to avoid ordinary situations.</li><br>

 <li><b>Generalized anxiety disorder</b>. You feel excessive, unrealistic worry and tension with little or no reason.</li>
</ul>


</div>
<div class="row">
<div class="column left" style="width:65%">
  <h2>Managing Anxiety.</h2>
  <p>Here are a few lifestyle choices you can take to manage or prevent the feeling of being overwhelmed.</p><br>
    <ul>
   <li>Acknowledge and accept that you are feeling stressed or anxious.</li>
   <li>Take a break.</li>
   <li>Talk to a friend.</li>
   <li>Allow yourself to cry.</li>
   <li>Go for a walk or run.</li>
   <li>Breathe deeply and allow your natural relaxation response to kick in.</li>

  </ul>
<br>
</div>

<div class="column right" style="width:35%" >
<br><br>
<center><img src="  https://static.wixstatic.com/media/21eda8_f73f57105ed048809f4123919d8a5115~mv2_d_2048_1536_s_2.png"  width="365" height="280"></center><br><br>
<br>
</div>

</div>
</div>
</body>
</html>
