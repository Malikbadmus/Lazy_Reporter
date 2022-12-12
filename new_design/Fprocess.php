<?php 
		include('configuration.php');
		


if(isset($_POST['fapprove'])){
      if(isset($_POST['check'])){
                    foreach ($_POST['check'] as $value){
                        $sql = "INSERT INTO frontpage (USER)VALUES('$value')";
                         //write this query according to your table schema
                        mysql_query($sql) or die (mysql_error());
                    }
                
          }

            }
           elseif(isset($_POST['ffapprove'])){
                if(isset($_POST['chec'])){
                    foreach ($_POST['chec'] as $valu){
                        $sql = "INSERT INTO frontpage (SUBJECT)VALUES('$valu')";
                         //write this query according to your table schema
                        mysql_query($sql) or die (mysql_error());
                    }
                
          }

            }