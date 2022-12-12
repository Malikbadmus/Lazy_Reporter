<?php
		include('configuration.php');
		session_start();

		$user_check=$_SESSION['login_user'];
		$ses_sql=mysql_query("SELECT Username FROM registration WHERE username='$user_check'");
		$row=mysql_fetch_array($ses_sql);

		$user=$row['Username'];

		if(!isset($user))
		{
		header("location:Home.php");
		}
		include('pimp.php');

		?>




<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lazyreporters</title>
</head>
<style type="text/css">

.submi{
	position: relative;
	left: 500px;

	border:none;
color:white;
border-radius:5px;
background:forestgreen;
padding:5px;
margin-top:40px;
border:none;
width:300px;
height:30px;
font-size:16px
}


	
.sidebar{

width:8%;
height:680px;
background:grey;
position:relative;
left:1px;
box-shadow:0 0 5px 7px whitesmoke;
top: 1px;

	
}


.font{
	position: relative;
	left: 40px;

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
}

li a {
    display: block;
	position:relative;
	left:300px;
    color: grey;
    text-align: center;
    letter-spacing: 10px;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: green;
}


a{text-decoration: none;}


.text{


	position: relative;
	left: 200px;
	box-shadow:0 0 5px 3px grey;
	border: none;
	border-radius: 4px;
	width:900px;
	height: 550px;
	top: 10px;
}

.text1{


	position: relative;
	left: 200px;
	box-shadow:0 0 5px 3px grey;
	border: none;
	border-radius: 4px;
	width:900px;
	height:30px;
	bottom:10px;
}

.te{


	position: relative;
	color: white;
	left: 200px;
	box-shadow:0 0 5px 3px grey;
	border: none;
	border-radius: 4px;
	width:700px;
	height:20px;
	bottom:10px;
}


.tex{


	position: relative;
	left: 200px;
	box-shadow:0 0 5px 3px grey;
	border: none;
	border-radius: 4px;
	bottom: 10px;
}

</style>

<body bgcolor="black">

	<ul>              
  <li><a href="user.php"><font size="4">Create New Post</font></a></li>
  <li><a href="stories.php"><font size="4">Earnings</font></a></li>
</ul>

</div><br>

<center><font face="arial" size="4pt" color="White">Welcome <?php echo $user;?></center></font><br><br>


<form method="POST" action="<?php  echo htmlspecialchars('newsupload.php');?>">

<p align="center"><font type="arial" color= "grey" size="6pt">News Subject:</font><br></p>
<input type="text" name="sub" id="sub" class="text1"><br>



<p align="center"><font type="arial" color= "grey" size="6pt">News Story:</font><br></p>
<textarea type="text" name="News" id="News" cols="20" rows="5" class="text">
Start here...
</textarea><br><br>
<input class="submi" type="submit" value="POST STORY" name= "POS" id="POS">
</form>
</body>


</html>