<?php
include("pimp.php");




?>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lazyreporters</title>
<link href="design.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	
.post {

	position: relative;
	left: 150px;
	width: 80%;


}




</style>

<body>
<div class="container">	
<font class="font" type="arial" color= "blue" size="10pt">L</font><font class="font" color="red" size="10pts">a</font><font class="font" color="yellow" size="10pts">z</font><font class="font" color="blue" size="10pts">y</font><font class="font" color="green" size="10pts">r</font><font class="font" color="red" size="10pts">e</font><font class="font" color="blue" size="10pts">p</font><font class="font" color="green" size="10pts">o</font><font class="font"color="brown" size="10pts">r</font><font class="font" color="black" size="10pts">t</font><font class="font" color="pink" size="10pts">e</font><font class="font" color="red" size="10pts">r</font>

</div>
<br>


<ul>              
  <li><a href="index.html"><font size="4">HOME</font></a></li>
  <li><a href="BRANCHES.html"><font size="4">FRONT PAGE</font></a></li>
  <li><a href="becomealazyreporter.php"><font size="4">BECOME A LAZY REPORTER</font></a></li>
</ul><br><br>

<center><font size="10" color="black"><?php echo $FSUBJECT;?></font></center><br><br>

<font size="4" color="green"> By <?php echo $FUSER;?></font><br><br>

<div class= "post">
<font size="5" color="Black"> By <?php echo $STORIES;?></font><br><br>

</div>


</body>
</html>