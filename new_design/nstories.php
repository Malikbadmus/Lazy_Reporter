<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  

	<title>stories</title>

<link href="design.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){
                $('.action').click(function(){
                    var action = $(this).attr('name');
                    $('#action').val(action);
                    $(this).closest('form').submit();

                })
            })
     </script>

<style type="text/css">


a{text-decoration: none;}
.container1{
width:9%;
height:20px;
background:Blue;
position:relative;
left:30px;
top:10px;


}
  </style>

  <body>
<ul>              
  <li><a href="user.php"><font size="4">Create New Post</font></a></li>
  <li><a href="stories.php"><font size="4">Stories</font></a></li>
  <li><a href="becomealazyreporter.php"><font size="4">Earnings</font></a></li>
</ul>
</body>

<?php
		include('pimp.php');

mysql_select_db("lazyreporter", $conn);

$query = "select * from stories where approval='0'";

$result=mysql_query($query);
$i = 1; 
echo "<form action='process.php' method='post'>";
echo "<table border='1' table cell padding='5' cell spacing='0' border='0'>

<tr>
<th bgcolor='whitesmoke' font face='cambria' size='3pt' color='black'>ID</th>
<th bgcolor='whitesmoke' font face='cambria' size='3pt' color='black'>USER</th>
<th bgcolor='whitesmoke' font face='cambria' size='3pt' color='black'>SUBJECT</th>
<th bgcolor='whitesmoke' font face='cambria' size='3pt' color='black'>STORIES</th>


</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['User'] . "</td>";
  echo "<td>" . $row['Subject'] . "</td>";
  echo "<td>" . $row['Post'] . "</td>";
 echo "<td><input type='checkbox' name='check[$i]' value='".$row['ID']."'/>";
  echo "</tr>";
  $i++;
  }
echo "</table>";
echo "<input class='action' type='submit' name='approve' value='approve' />";
   echo "<input class='action' type='submit' name='edit' value='edit' />";
   echo "<input class='action' type='submit' name='delete' value='delete' />";
   echo "<input type='hidden' name='action' value='' id='action' />";
echo "</form>";

mysql_close($conn);
?>
</code>
