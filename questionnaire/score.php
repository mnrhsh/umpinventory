<?php
include 'header.php';
include 'css/score.css';
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
    <div class="row">

    <div class="column left">
    <img src="http://clipart.coolclips.com/480/vectors/tf05342/CoolClips_vc090542.png" width="300" height="250">
    </div>
    <br>

    <div class="column right">
    <center><h3>SCORING AND INTERPRETATIONS</h3></center><br>
    <p>The scoring instructions <b>should not be used</b> to replace face to face clinical consultation. It will give an indication whether any of these issues are having a significant effect on the person’s
life at present.</p><br>
<p> Should the person score highly on any of the issues, these will need further
exploration through conversation and thought may need to be given to a referral to a specialist who
could then conduct a clinical interview.
</p><br>
</div>

    <div class="row">
      <center><table>
        <tr>
          <th>CATEGORY</th>
          <th>QUESTION</th>
        </tr>
        <tr>
          <td>Anxiety</td>
          <td>Q1, Q6, Q8, Q11, Q12, Q14, Q18 </td>
        </tr>
        <tr>
          <td>Stress</td>
          <td>Q2, Q4, Q7, Q9, Q15, Q19, Q20 </td>

        </tr>
        <tr>
          <td>Depression</td>
          <td>Q3, Q5, Q10, Q13, Q16, Q17, Q21 </td>

        </tr>

    </table></center><br>
    <div class="column left" style="width:55%">
      <center><h3>SCALE</h3></center><br>
      <li> The <b>depression</b> scale assesses dysphoria, hopelessness, devaluation of life, self-deprecation, lack of interest / involvement,
    anhedonia and inertia.</li><br>
    <li>The <b>anxiety</b> scale assesses autonomic arousal, skeletal muscle effects, situational
anxiety, and subjective experience of anxious affect. </li>
<li>The <b>stress</b> scale is sensitive to levels of chronic nonspecific
arousal. It assesses difficulty relaxing, nervous arousal, and being easily upset / agitated, irritable /
over-reactive and impatient.</li>
    </div>
    <br>

    <div class="column right" style="width:45%">
<center>
<img src="http://www.stress.org.uk/wp-content/uploads/2016/02/Physical.png" width="400" height="400">
</center>
  </div>
  <div>
  <center>  <h4><u>NB Scores on the DASS-21 will need to be multiplied by 2 to calculate the final score.</u></h4></center><br>
  <center><table>
    <tr>
      <th></th>
      <th>DEPRESSION</th>
      <th>ANXIETY</th>
      <th>STRESS</th>
    </tr>
    <tr>
      <td>Normal</td>
      <td>0-9</td>
        <td>0-7</td>
        <td>0-14</td>
    </tr>
    <tr>
      <td>Mild</td>
      <td>10-13</td>
      <td>8-9</td>
      <td>15-18</td>

    </tr>
    <tr>
      <td>Moderate</td>
        <td>14-20</td>
        <td>10-14</td>
        <td>19-25</td>
      </tr>
      <tr>
        <td>Severe</td>
          <td>21-27</td>
          <td>15-19</td>
          <td>26-33</td>
        </tr>
        <tr>
          <td>Extremely Severe</td>
            <td>28+</td>
            <td>20+</td>
            <td>34+</td>
          </tr>
        </table>
        <br><br><br>
</div>
  </div>
</body>
  </html>
