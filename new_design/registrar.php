<?php

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Username = $_POST['Username'];
$nationality = $_POST['nationality'];
$Email = $_POST['Email'];
$Age = $_POST['Age'];
$Pnumber = $_POST['Pnumber'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST['Fname'])){
$NameErr=" *First name is required";
} else if(!preg_match("/^[a-zA-Z]*$/",$Fname)){
$NameErr="Only letters and white space allowed";
}
else if(empty($_POST['Lname'])) {
$NameErr="Last name required";
} else if(!preg_match("/^[a-zA-Z]*$/",$Lname)){
$NameErr="Only letters and white space allowed";
}
else if(empty($_POST['Username'])) {
$NameErr="USERNAME IS REQUIRED";
} else if(!preg_match("/^[a-zA-Z]*$/",$Username)){
$NameErr="Only letters and white space allowed";
}
else if (empty($_POST['nationality'])) {
$NameErr="NO country was selected";
}
else if(empty($_POST['Email'])) {
$NameErr="Please input your email";
} 
else if (empty($_POST['Age'])) {
$NameErr="select your age";
}
else if (empty($_POST['Pnumber'])) {
$NameErr="Input a valid phone number";
}
else if(empty($_POST['Password'])) {
$NameErr="Password is required";
} 
else if(empty($_POST['Confirmpassword'])) {
$NameErr="FIELD IS EMPTY";
} 
else if(($_POST['Confirmpassword'])!=($_POST['Password'])){
$NameErr="Password do not match";
} 

else {

mysql_select_db('lazyreporter');

$sql = "INSERT INTO registration (Firstname,Lastname,Username,nationality,Email,Age,Mobile_Number,Password,Confirmpassword,Joindate)VALUES('$Fname','$Lname','$Username','$nationality','$Email','$Age','$Pnumber','$Password','$Confirmpassword', NOW())";




if(mysql_query($sql, $conn)) {
  echo "Registration Successfull\n";
include("User.php");
}
else {
die('Could: ' . mysql_error());
}


mysql_close($conn);


}
}


?>
