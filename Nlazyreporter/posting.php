<?php
include("pimp.php");


if(isset($_POST['ADDED'])) {




$MAN = ($_POST['APROVE']);
$user= $USER;

 
$sql = "UPDATE stories SET APPROVAL = '$MAN' WHERE User = '$user'";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "SUCCESSFULLY APPROVED";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDE'])) {
	


	$sql = "INSERT INTO frontpage (USER,SUBJECT,POST)VALUES('$USER','$SUBJECT','$STORIES')";
	if(mysql_query($sql, $conn)) {
  echo "YOUR NEWS HAS BEEN PUSHED TO THE FRONTPAGE";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDED1'])) {
	
$MAN = ($_POST['APROVE1']);
$user= $USER1;

 
$sql = "UPDATE stories SET APPROVAL = '$MAN' WHERE User = '$user'";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "SUCCESSFULLY APPROVED";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDE1'])) {
	


	$sql = "INSERT INTO frontpage (USER,SUBJECT,POST)VALUES('$USER1','$SUBJECT1','$STORIES1')";
	if(mysql_query($sql, $conn)) {
  echo "YOUR NEWS HAS BEEN PUSHED TO THE FRONTPAGE";
include("stories.php");
}

else {
die('Could: ' . mysql_error());
mysql_close($conn);


}
}

elseif(isset($_POST['ADDED2'])) {
	
$MAN = ($_POST['APROVE']);
$user= $USER2;

 
$sql = "UPDATE stories SET APPROVAL = '$MAN' WHERE User = '$user'";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "SUCCESSFULLY APPROVED";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDE2'])) {
	


	$sql = "INSERT INTO frontpage (USER,SUBJECT,POST)VALUES('$USER2','$SUBJECT2','$STORIES2')";
	if(mysql_query($sql, $conn)) {
  echo "YOUR NEWS HAS BEEN PUSHED TO THE FRONTPAGE";
include("stories.php");
}

else {
die('Could: ' . mysql_error());
mysql_close($conn);


}
}
elseif(isset($_POST['ADDED3'])) {
	
$MAN = ($_POST['APROVE3']);
$user= $USER3;

 
$sql = "UPDATE stories SET APPROVAL = '$MAN' WHERE User = '$user'";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "SUCCESSFULLY APPROVED";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDE3'])) {
	


	$sql = "INSERT INTO frontpage (USER,SUBJECT,POST)VALUES('$USER3','$SUBJECT3','$STORIES3')";
	if(mysql_query($sql, $conn)) {
  echo "YOUR NEWS HAS BEEN PUSHED TO THE FRONTPAGE";
include("stories.php");
}

else {
die('Could: ' . mysql_error());
mysql_close($conn);


}
}
elseif(isset($_POST['ADDED4'])) {
	
$MAN = ($_POST['APROVE4']);
$user= $USER4;

 
$sql = "UPDATE stories SET APPROVAL = '$MAN' WHERE User = '$user'";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "SUCCESSFULLY APPROVED";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDE1'])) {
	


	$sql = "INSERT INTO frontpage (USER,SUBJECT,POST)VALUES('$USER4','$SUBJECT4','$STORIES4')";
	if(mysql_query($sql, $conn)) {
  echo "YOUR NEWS HAS BEEN PUSHED TO THE FRONTPAGE";
include("stories.php");
}

else {
die('Could: ' . mysql_error());
mysql_close($conn);


}
}
elseif(isset($_POST['ADDED5'])) {
	
$MAN = ($_POST['APROVE5']);
$user= $USER5;

 
$sql = "UPDATE stories SET APPROVAL = '$MAN' WHERE User = '$user'";

mysql_select_db('lazyreporter');
if(mysql_query($sql, $conn)) {
  echo "SUCCESSFULLY APPROVED";
include("stories.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}

elseif(isset($_POST['ADDE1'])) {
	


	$sql = "INSERT INTO frontpage (USER,SUBJECT,POST)VALUES('$USER5','$SUBJECT5','$STORIES5')";
	if(mysql_query($sql, $conn)) {
  echo "YOUR NEWS HAS BEEN PUSHED TO THE FRONTPAGE";
include("stories.php");
}

else {
die('Could: ' . mysql_error());
mysql_close($conn);


}
}





?>