<?php
include 'header.php';
include 'css/page.css';

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
       <?php include 'includes/test.inc.php';?><br><br>
  	</div>
  	<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<meta charset="UTF-8">
<title>jQuery Get Selected Radio Button Value</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       // this jquery function trigger when radio button types object is clicked
        $("input[type='radio']").click(function(){

			//this command is to get the checked value from the radio buttons
      var s1 = $("input[name='stress1']:checked").val();
			var s2 = $("input[name='stress2']:checked").val();
			var s3 = $("input[name='stress3']:checked").val();
			var s4 = $("input[name='stress4']:checked").val();
      var s5 = $("input[name='stress5']:checked").val();
      var s6 = $("input[name='stress6']:checked").val();
      var s7 = $("input[name='stress7']:checked").val();

      var a1 = $("input[name='anxiety1']:checked").val();
      var a2 = $("input[name='anxiety2']:checked").val();
      var a3 = $("input[name='anxiety3']:checked").val();
      var a4 = $("input[name='anxiety4']:checked").val();
      var a5 = $("input[name='anxiety5']:checked").val();
      var a6 = $("input[name='anxiety6']:checked").val();
      var a7 = $("input[name='anxiety7']:checked").val();

      var d1 = $("input[name='depression1']:checked").val();
      var d2 = $("input[name='depression2']:checked").val();
      var d3 = $("input[name='depression3']:checked").val();
      var d4 = $("input[name='depression4']:checked").val();
      var d5 = $("input[name='depression5']:checked").val();
      var d6 = $("input[name='depression6']:checked").val();
      var d7 = $("input[name='depression7']:checked").val();

			var totalStress = (parseInt(s1) + parseInt(s2)+ parseInt(s3)+ parseInt(s4)+ parseInt(s5)+
      parseInt(s6)+ parseInt(s7))*2;

      var totalAnxiety = (parseInt(a1) + parseInt(a2)+ parseInt(a3)+ parseInt(a4)+ parseInt(a5)+
      parseInt(a6)+ parseInt(a7))*2;

      var totalDepression = (parseInt(d1) + parseInt(d2)+ parseInt(d3)+ parseInt(d4)+ parseInt(d5)+
      parseInt(d6)+ parseInt(d7))*2;

			// this command is to pass the total values to textfield name 'output'
            $("input[name='outputStress']").val(totalStress);
            $("input[name='outputAnxiety']").val(totalAnxiety);
            $("input[name='outputDepression']").val(totalDepression);

                //alert("Your are a - " + radioValue);


			//start drawing the chart
			var options = {
			title: {
			text: "Your Stress, Anxiety and Depression Score"
			},
			data: [
			{
		// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
			{ label: "Stress",  y: totalStress  },
			{ label: "Anxiety", y: totalAnxiety   },
			{ label: "Depression",  y: totalDepression }
			]
			}
				]
};

$("#chartContainer").CanvasJSChart(options);

        });

    });
</script>


</head>
<body>
  <center>
    <h4>QUESTION</h4>
    <center>
    <table id="questions" border="0">
      <tbody>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle">0</td>
          <td align="center" valign="middle">1</td>
          <td align="center" valign="middle">2</td>
          <td align="center" valign="middle">3</td>
        </tr>
        <tr>
          <td>I found it hard to wind down.</td>
          <td align="center" valign="middle"><input type="radio" name="stress1" value="0"></td>
          <td align="center" valign="middle"><input type="radio" name="stress1" value="1"></td>
          <td align="center" valign="middle"><input type="radio" name="stress1" value="2"></td>
          <td align="center" valign="middle"><input type="radio" name="stress1" value="3"></td>
        </tr>
        <tr>
          <td>I was aware of the dryness of my mouth.</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety1" value="0"></td>
          <td><input type="radio" name="anxiety1" value="1"></td>
          <td><input type="radio" name="anxiety1" value="2"></td>
          <td><input type="radio" name="anxiety1" value="3"></td>
        </tr>
        <tr>
          <td>I couldn't seem to experience any positive feeling at all.</td>
          <td align="center" valign="middle"><input type="radio" name="depression1" value="0"></td>
          <td><input type="radio" name="depression1" value="1"></td>
          <td><input type="radio" name="depression1" value="2"></td>
          <td><input type="radio" name="depression1" value="3"></td>
        </tr>
        <tr>
          <td>I experienced breathing difficulty (i.e excessively rapid breathing)</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety2" value="0"></td>
          <td><input type="radio" name="anxiety2" value="1"></td>
          <td><input type="radio" name="anxiety2" value="2"></td>
          <td><input type="radio" name="anxiety2" value="3"></td>
        </tr>
        <tr>
          <td>I found it difficult to work up on the initiative to do things</td>
          <td align="center" valign="middle"><input type="radio" name="depression2" value="0"></td>
          <td><input type="radio" name="depression2" value="1"></td>
          <td><input type="radio" name="depression2" value="2"></td>
          <td><input type="radio" name="depression2" value="3"></td>
        </tr>
        <tr>
          <td>I tended to over-react to situations.</td>
          <td align="center" valign="middle"><input type="radio" name="stress2" value="0"></td>
          <td><input type="radio" name="stress2" value="1"></td>
          <td><input type="radio" name="stress2" value="2"></td>
          <td><input type="radio" name="stress2" value="3"></td>
        </tr>
        <tr>
          <td>I experienced trembling (i.e. in the hands)</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety3" value="0"></td>
          <td><input type="radio" name="anxiety3" value="1"></td>
          <td><input type="radio" name="anxiety3" value="2"></td>
          <td><input type="radio" name="anxiety3" value="3"></td>
        </tr>
        <tr>
          <td>I felt that I was using a lot of nervous energy.</td>
          <td align="center" valign="middle"><input type="radio" name="stress3" value="0"></td>
          <td><input type="radio" name="stress3" value="1"></td>
          <td><input type="radio" name="stress3" value="2"></td>
          <td><input type="radio" name="stress3" value="3"></td>
        </tr>
        <tr>
          <td>I was worried about situations in which I might panic and make a fool of myself.</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety4" value="0"></td>
          <td><input type="radio" name="anxiety4" value="1"></td>
          <td><input type="radio" name="anxiety4" value="2"></td>
          <td><input type="radio" name="anxiety4" value="3"></td>
        </tr>
        <tr>
          <td>I felt that I had nothing to look forward to.</td>
          <td align="center" valign="middle"><input type="radio" name="depression3" value="0"></td>
          <td><input type="radio" name="depression3" value="1"></td>
          <td><input type="radio" name="depression3" value="2"></td>
          <td><input type="radio" name="depression3" value="3"></td>
        </tr>
        <tr>
          <td>I found myself getting agitated.</td>
          <td align="center" valign="middle"><input type="radio" name="stress4" value="0"></td>
          <td><input type="radio" name="stress4" value="1"></td>
          <td><input type="radio" name="stress4" value="2"></td>
          <td><input type="radio" name="stress4" value="3"></td>
        </tr>
        <tr>
          <td>I found it difficult to relax.</td>
          <td align="center" valign="middle"><input type="radio" name="stress5" value="0"></td>
          <td><input type="radio" name="stress5" value="1"></td>
          <td><input type="radio" name="stress5" value="2"></td>
          <td><input type="radio" name="stress5" value="3"></td>
        </tr>
        <tr>
          <td>I felt down-hearted and blue.</td>
          <td align="center" valign="middle"><input type="radio" name="depression4" value="0"></td>
          <td><input type="radio" name="depression4" value="1"></td>
          <td><input type="radio" name="depression4" value="2"></td>
          <td><input type="radio" name="depression4" value="3"></td>
        </tr>
        <tr>
          <td>I was intolerant of anything that kept me from getting on with what I was doing.</td>
          <td align="center" valign="middle"><input type="radio" name="stress6" value="0"></td>
          <td><input type="radio" name="stress6" value="1"></td>
          <td><input type="radio" name="stress6" value="2"></td>
          <td><input type="radio" name="stress6" value="3"></td>
        </tr>
        <tr>
          <td>I felt that I was so close to panic.</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety5" value="0"></td>
          <td><input type="radio" name="anxiety5" value="1"></td>
          <td><input type="radio" name="anxiety5" value="2"></td>
          <td><input type="radio" name="anxiety5" value="3"></td>
        </tr>
        <tr>
          <td>I was unable to become enthusiastic about anything.</td>
          <td align="center" valign="middle"><input type="radio" name="depression5" value="0"></td>
          <td><input type="radio" name="depression5" value="1"></td>
          <td><input type="radio" name="depression5" value="2"></td>
          <td><input type="radio" name="depression5" value="3"></td>
        </tr>
        <tr>
          <td>I felt that I wasnt worth as much as a person.</td>
          <td align="center" valign="middle"><input type="radio" name="depression6" value="0"></td>
          <td><input type="radio" name="depression6" value="1"></td>
          <td><input type="radio" name="depression6" value="2"></td>
          <td><input type="radio" name="depression6" value="3"></td>
        </tr>
        <tr>
          <td>I felt that I was rather touchy.</td>
          <td align="center" valign="middle"><input type="radio" name="stress7" value="0"></td>
          <td><input type="radio" name="stress7" value="1"></td>
          <td><input type="radio" name="stress7" value="2"></td>
          <td><input type="radio" name="stress7" value="3"></td>
        </tr>
        <tr>
          <td>I was aware of the action of my heart in the absence of physical exertion(i.e. sense of heart rate increases)</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety6" value="0"></td>
          <td><input type="radio" name="anxiety6" value="1"></td>
          <td><input type="radio" name="anxiety6" value="2"></td>
          <td><input type="radio" name="anxiety6" value="3"></td>
        </tr>
        <tr>
          <td>I felt scared without any good reason.</td>
          <td align="center" valign="middle"><input type="radio" name="anxiety7" value="0"></td>
          <td><input type="radio" name="anxiety7" value="1"></td>
          <td><input type="radio" name="anxiety7" value="2"></td>
          <td><input type="radio" name="anxiety7" value="3"></td>
        </tr
        <tr>
          <td>I felt that life was meaningless</td>
          <td align="center" valign="middle"><input type="radio" name="depression7" value="0"></td>
          <td><input type="radio" name="depression7" value="1"></td>
          <td><input type="radio" name="depression7" value="2"></td>
          <td><input type="radio" name="depression7" value="3"></td>
        </tr>

      </tbody>
    </table>
    <br>
    <p>Stress Score <input type="text" name="outputStress" value=""></p>
      <p>Anxiety Score <input type="text" name="outputAnxiety" value=""></p>
      <p>Depression Score <input type="text" name="outputDepression" value=""></p>
      <br><br>
<div id="chartContainer" style="height: 370px; width: 50%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


</body>
</html>
