


<?php
include('pimp.php');

if(isset($_POST['POS'])) {

include("configuration.php");


	$Sub = $_POST['sub'];
	$News = $_POST['News'];


	mysql_select_db('lazyreporter');
			$datatime = date("y-m-d H:i:S");

$sql = "INSERT INTO stories (user, Subject, Post, Created, APPROVAL)VALUES('$user', '$Sub','$News','$datatime', '0')";




if(mysql_query($sql, $conn)) {
  header("location:Home.php");
}
else {
die('Could: ' . mysql_error());
}


mysql_close($conn);

}




?>
