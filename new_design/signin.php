<?php

if(isset($_POST['submit'])) {


include("configuration.php");

session_start();



$username=($_POST['Username']);

$Password=($_POST['Password']);



$sql="SELECT ID FROM registration WHERE username='$username' and Password='$Password'";

$result=mysql_query($sql);

$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
if($count==1)
{

$_SESSION['login_user']=$username;
header("location: User.php");
}
else
{
	$message = "You are not a lazy reporter";
	echo "<script type= 'text/javascript'>alert('$message'); </script>";
	include("login.php");
	

	

}
}


?>