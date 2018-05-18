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
	      <li><a href="stress.php">LEARN MORE</a></li>
	      <li><a href="#">HELPLINES</a></li>
	   </ul>
	</div>
<div class="ex1">
  <a href="anxiety.php "><img src="https://www.pngarts.com/files/1/Right-Arrow-Download-Transparent-PNG-Image.png" width="30" height="30" style="float:right;"></a>
        <h2>What is Stress?</h2><hr>
  <div class="row">

  <div class="column left" style="width:40%">
    <img src="https://cdn.evbuc.com/eventlogos/33288047/smsclosedeyesfellanobackground.png"  width="400" height="350"><br><br>
  <br>
  </div>

<div class="column right"style="width:60%">
  <h2>Why Stress happens?</h2>
  <p>Stress, in everyday terms, is a feeling that people have when they are overloaded and struggling to cope with demands.
These demands can be related to finances, work, relationships, and other situations, but anything that poses a real or perceived challenge or
threat to a person's well-being can cause stress.</p>
<br>
  <h2>What are the stress symptoms?</h2>
  <p>The <b>physical</b> effects of stress include:<p>
  <ul>
 <li>Sweating.</li>
 <li>Pain in the back or chest.</li>
 <li>Sleeping difficulties.</li>
 <li>Lower immunity against disease.</li>
 <li>Muscular aches.</li>
</ul>
</div>

  <div class="row">
<p>While the <b>emotional</b> effects of stress can include:<p>
<ul>
<li>Anger and sadness.</li>
<li>Anxiety.</li>
<li>Concentration issues.</li>
<li>Fatigue and restlessness.</li>
<li>Nail bitting.</li>
</ul>
 </div>

</div>
<div class="row">
<div class="column left" style="width:65%">
  <h2>How can stress be manage?</h2>
  <p>Here are a few lifestyle choices you can take to manage or prevent the feeling of being overwhelmed.</p>
    <ul>
   <li><b>Exercise</b>: Studies have shown that exercise can benefit a person's mental and physical state.</li>
   <li><b>Reducing intake of alcohol, drugs, and caffeine</b>: These substances will not help prevent stress, and they can make it worse. They should be cut out or reduced.</li>
   <li><b>Nutrition</b>: A healthy, balanced diet with plenty of fruit and vegetables helps maintain the immune system at times of stress. A poor diet will lead to ill health and additional stress.</li>
   <li><b>Time</b>: Set aside some time each day just for yourself. Use it to organize your life, relax, and pursue your own interests.</li>
   <li><b>Acknowledging the signs</b>: A person can be so anxious about the problem that is causing the stress that they do not notice the effects on their body.</li>
   <li><b>Find your own destressor</b>: Most people have something that helps them relax, such as reading a book, going for a walk, listening to music, or spending time with a friend or a pet. Joining a choir or a gym helps some people.</li>

  </ul>
<br>
</div>

<div class="column right" style="width:35%" >

<center><img src="  https://www.kevaayurveda.com/wp-content/uploads/2017/12/insomnia.png"  width="375" height="280"></center><br><br>
<br>
</div>

</div>
</div>
</body>
</html>
