<?php
include 'header.php';
include 'css/page.css';

?>

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
	<?php
	 include 'includes/test.inc.php';?><br><br>

	  <form  action="submit_answer.php" method="POST">
	  <center>
	  <table>
	  <tr>
	  <th><center>Question</center></th>
	     <th><center>0</center></th>
	     <th><center>1</center></th>
	     <th><center>2</center></th>
	     <th><center>3</center></th>
	  </tr>
	  <tr>
	     <td>I found it hard to wind down.</td>
	     <td><center><input id="stress11" name="stress1" type="radio" value="0"/></center></td>
	     <td><center><input id="stress12" name="stress1" type="radio" value="1"/></center></td>
	     <td><center><input id="stress13" name="stress1" type="radio" value="2"/></center></td>
	     <td><center><input id="stress14" name="stress1" type="radio" value="3"/></center></td>
	 </tr>
	 <tr>
	     <td>I was aware of the dryness of my mouth.</td>
	     <td><center><input id="anxiety11" name="anxiety1" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety12" name="anxiety1" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety13" name="anxiety1" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety14" name="anxiety1" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I couldn't seem to experience any positive feeling at all.</td>
	     <td><center><input id="depression11" name="depression1" type="radio" value="0"/></center></td>
	     <td><center><input id="depression12" name="depression1" type="radio" value="1"/></center></td>
	     <td><center><input id="depression13" name="depression1" type="radio" value="2"/></center></td>
	     <td><center><input id="depression14" name="depression1" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I experienced breathing difficulty(i.e excessively rapid breathing,<br>breathlessnes in the absence of physical exertion)</td>
	     <td><center><input id="anxiety21" name="anxiety2" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety22" name="anxiety2" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety23" name="anxiety2" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety24" name="anxiety2" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I found it difficult to work up on the initiative to do things</td>
	     <td><center><input id="depression21" name="depression2" type="radio" value="0"/></center></td>
	     <td><center><input id="depression22" name="depression2" type="radio" value="1"/></center></td>
	     <td><center><input id="depression23" name="depression2" type="radio" value="2"/></center></td>
	     <td><center><input id="depression24" name="depression2" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I tended to over-react to situations.</td>
	     <td><center><input id="stress21" name="stress2" type="radio" value="0"/></center></td>
	     <td><center><input id="stress22" name="stress2" type="radio" value="1"/></center></td>
	     <td><center><input id="stress23" name="stress2" type="radio" value="2"/></center></td>
	     <td><center><input id="stress24" name="stress2" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I experienced trembling (i.e. in the hands)</td>
	     <td><center><input id="anxiety31" name="anxiety3" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety32" name="anxiety3" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety33" name="anxiety3" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety34" name="anxiety3" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt that I was using a lot of nervous energy.</td>
	     <td><center><input id="stress31" name="stress3" type="radio" value="0"/></center></td>
	     <td><center><input id="stress32" name="stress3" type="radio" value="1"/></center></td>
	     <td><center><input id="stress33" name="stress3" type="radio" value="2"/></center></td>
	     <td><center><input id="stress34" name="stress3" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I was worried about situations in which I might panic and make a fool of myself.</td>
	     <td><center><input id="anxiety41" name="anxiety4" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety42" name="anxiety4" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety43" name="anxiety4" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety44" name="anxiety4" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt that I had nothing to look forward to.</td>
	     <td><center><input id="depression31" name="depression3" type="radio" value="0"/></center></td>
	     <td><center><input id="depression32" name="depression3" type="radio" value="1"/></center></td>
	     <td><center><input id="depression33" name="depression3" type="radio" value="2"/></center></td>
	     <td><center><input id="depression34" name="depression3" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I found myself getting agitated.</td>
	     <td><center><input id="stress41" name="stress4" type="radio" value="0"/></center></td>
	     <td><center><input id="stress42" name="stress4" type="radio" value="1"/></center></td>
	     <td><center><input id="stress43" name="stress4" type="radio" value="2"/></center></td>
	     <td><center><input id="stress44" name="stress4" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I found it difficult to relax.</td>
	     <td><center><input id="stress51" name="stress5" type="radio" value="0"/></center></td>
	     <td><center><input id="stress52" name="stress5" type="radio" value="1"/></center></td>
	     <td><center><input id="stress53" name="stress5" type="radio" value="2"/></center></td>
	     <td><center><input id="stress54" name="stress5" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt down-hearted and blue.</td>
	     <td><center><input id="depression41" name="depression4" type="radio" value="0"/></center></td>
	     <td><center><input id="depression42" name="depression4" type="radio" value="1"/></center></td>
	     <td><center><input id="depression43" name="depression4" type="radio" value="2"/></center></td>
	     <td><center><input id="depression44" name="depression4" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I was intolerant of anything that kept me from getting on with what I was doing.</td>
	     <td><center><input id="stress61" name="stress6" type="radio" value="0"/></center></td>
	     <td><center><input id="stress62" name="stress6" type="radio" value="1"/></center></td>
	     <td><center><input id="stress63" name="stress6" type="radio" value="2"/></center></td>
	     <td><center><input id="stress64" name="stress6" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt that I was so close to panic.</td>
	     <td><center><input id="anxiety51" name="anxiety5" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety52" name="anxiety5" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety53" name="anxiety5" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety54" name="anxiety5" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I was unable to become enthusiastic about anything.</td>
	     <td><center><input id="depression51" name="depression5" type="radio" value="0"/></center></td>
	     <td><center><input id="depression52" name="depression5" type="radio" value="1"/></center></td>
	     <td><center><input id="depression53" name="depression5" type="radio" value="2"/></center></td>
	     <td><center><input id="depression54" name="depression5" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt that I wasnt worth as much as a person.</td>
	     <td><center><input id="depression61" name="depression6" type="radio" value="0"/></center></td>
	     <td><center><input id="depression62" name="depression6" type="radio" value="1"/></center></td>
	     <td><center><input id="depression63" name="depression6" type="radio" value="2"/></center></td>
	     <td><center><input id="depression64" name="depression6" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt that I was rather touchy.</td>
	     <td><center><input id="stress71" name="stress7" type="radio" value="0"/></center></td>
	     <td><center><input id="stress72" name="stress7" type="radio" value="1"/></center></td>
	     <td><center><input id="stress73" name="stress7" type="radio" value="2"/></center></td>
	     <td><center><input id="stress74" name="stress7" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I was aware of the action of my heart in the absence of physical exertion(i.e. sense of heart rate increases)</td>
	     <td><center><input id="anxiety61" name="anxiety6" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety62" name="anxiety6" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety63" name="anxiety6" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety64" name="anxiety6" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt scared without any good reason.</td>
	     <td><center><input id="anxiety71" name="anxiety7" type="radio" value="0"/></center></td>
	     <td><center><input id="anxiety72" name="anxiety7" type="radio" value="1"/></center></td>
	     <td><center><input id="anxiety73" name="anxiety7" type="radio" value="2"/></center></td>
	     <td><center><input id="anxiety74" name="anxiety7" type="radio" value="3"/></center></td>
	   </tr>
	   <tr>
	     <td>I felt that life was meaningless.</td>
	     <td><center><input id="depression71" name="depression7" type="radio" value="0"/></center></td>
	     <td><center><input id="depression72" name="depression7" type="radio" value="1"/></center></td>
	     <td><center><input id="depression73" name="depression7" type="radio" value="2"/></center></td>
	     <td><center><input id="depression74" name="depression7" type="radio" value="3"/></center></td>
	   </tr>

	 </table><br>
	 <button type="submit" value="insert" name="submit">submit</button>
	 </center>
	 </form>
<script>
function getScore()
{
	var strScore = document.getElementByName('stress1').value;
	strScore = strScore + document.getElementByName('stress2').value;
	strScore = strScore + document.getElementByName('stress3').value;
	strScore = strScore + document.getElementByName('stress4').value;
	strScore = strScore + document.getElementByName('stress5').value;
	strScore = strScore + document.getElementByName('stress6').value;
	strScore = strScore + document.getElementByName('stress7').value;
	document.getElementByName("stress").value = strScore;
	alert (strScore);
}

</script>
	 <center>
		 <input type="text" name="stress">
		 <input type="text" name="depression">
		 <input type="text" name="anxiety">
	 </center>
	 <br><br>
