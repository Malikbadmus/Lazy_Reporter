<?php 
		include('configuration.php');
		


if(isset($_POST['approve'])){
                if(isset($_POST['check'])){
                    foreach ($_POST['check'] as $value){
                        $sql = "UPDATE stories SET APPROVAL = 1 WHERE ID = $value";
                         //write this query according to your table schema
                        mysql_query($sql) or die (mysql_error());
                    }
                }
            }


          elseif(isset($_POST['edit'])){
    //do the edit things here
} elseif(isset($_POST['delete'])){
    foreach ($_POST['check'] as $value){
        $sql = "DELETE FROM stories WHERE ID=$value";
        mysql_query($sql) or die(mysql_error());
    }
}