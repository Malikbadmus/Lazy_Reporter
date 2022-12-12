<?php

$dbhost = 'localhost';
$dbuser = 'control';
$dbpass = 'tusukiyomi';
$database = 'lazyreporter';
$conn = mysql_connect($dbhost, $dbuser, $dbpass, true, 65536);

if (! $conn){

  die('could not connect' . mysql_error());
}

mysql_select_db($database,$conn);
?>