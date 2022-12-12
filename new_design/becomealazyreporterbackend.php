<?php
if(isset($_POST['add'])) {

$dbhost = 'localhost';
$dbuser = 'control';
$dbpass = 'tusukiyomi';


$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if (! $conn){

  die('could not connect' . mysql_error());
}

if(! get_magic_quotes_gpc() ) {

$Fname = addslashes ($_POST['Fname']);
$Lname = addslashes ($_POST['Lname']);
}else {
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
}

$Username = $_POST['Username'];
$nationality = $_POST['nationality'];
$Email = $_POST['Email'];
$Age = $_POST['Age'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST['Fname'])){
$NameErr=" *First name is required";
} else if(!preg_match("/^[a-zA-Z]*$/",$Fname)){
$NameErr="Only letters and white space allowed";
}
else if(empty($_POST['Lname'])) {
$LnameErr="Last name requuired";
} else if(!preg_match("/^[a-zA-Z]*$/",$Lname)){
$LnameErr="Only letters and white space allowed";
}
else if(empty($_POST['Username'])) {
$UsernameErr="USERNAME IS REQUIRED";
} else if(!preg_match("/^[a-zA-Z]*$/",$Username)){
$UsernameErr="Only letters and white space allowed";
}
else if (empty($_POST['nationality'])) {
$nationalityErr="NO country was selected";
}
else if(empty($_POST['Email'])) {
$EmailErr="Please input your email";
} 
else if (empty($_POST['Age'])) {
$AgeErr="select your age";
}
else if(empty($_POST['Password'])) {
$PassErr="Password is required";
} 
else if(empty($_POST['Confirmpassword'])) {
$CpassErr="FIELD IS EMPTY";
} 
else if(($_POST['Confirmpassword'])!=($_POST['Password'])){
$CpassErr="Password do not match";
} 

else {
$sql = "INSERT INTO registration ". "(Firstname,Lastname,Username,Nationality,Email,Age,Password,Confirmpassword,Joindate) ". "VALUES('$Fname','$Lname','$Username','$nationality','$Email','$Age','$Password','$Confirmpassword', NOW())";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "Registration Successfull\n";
include("becomealazyreporter.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}
}
}
?>