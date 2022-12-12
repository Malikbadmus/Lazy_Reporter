<?php
		include('configuration.php');
		session_start();

	

		$user_check=$_SESSION['login_user'];
		$ses_sql=mysql_query("SELECT Username FROM registration WHERE username='$user_check'");
		$row=mysql_fetch_array($ses_sql);

		$user=$row['Username'];


		$A=mysql_query("SELECT*FROM stories WHERE ID='1'");   $AA=mysql_fetch_array($A);	$B=mysql_query("SELECT*FROM stories WHERE ID='2'");   $BB=mysql_fetch_array($B);

	$C=mysql_query("SELECT*FROM stories WHERE ID='3'");   $CC=mysql_fetch_array($C);	$D=mysql_query("SELECT*FROM stories WHERE ID='4'");   $DD=mysql_fetch_array($D);

	$E=mysql_query("SELECT*FROM stories WHERE ID='5'");   $EE=mysql_fetch_array($E);	$F=mysql_query("SELECT*FROM stories WHERE ID='6'");   $FF=mysql_fetch_array($F);

		$G=mysql_query("SELECT*FROM stories WHERE ID='7'");   $GG=mysql_fetch_array($G);	$H=mysql_query("SELECT*FROM stories WHERE ID='8'");   $HH=mysql_fetch_array($H);

	$I=mysql_query("SELECT*FROM stories WHERE ID='9'");   $II=mysql_fetch_array($I);	$J=mysql_query("SELECT*FROM stories WHERE ID='10'");  $JJ=mysql_fetch_array($J);

		$K=mysql_query("SELECT*FROM stories WHERE ID='11'");  $KK=mysql_fetch_array($K);	$L=mysql_query("SELECT*FROM stories WHERE ID='12'");  $LL=mysql_fetch_array($L);

		$M=mysql_query("SELECT*FROM stories WHERE ID='13'");  $MM=mysql_fetch_array($M);	$N=mysql_query("SELECT*FROM stories WHERE ID='14'");  $NN=mysql_fetch_array($N);

		$O=mysql_query("SELECT*FROM stories WHERE ID='15'");  $OO=mysql_fetch_array($O);	$P=mysql_query("SELECT*FROM stories WHERE ID='16'");  $PP=mysql_fetch_array($P);

		$Q=mysql_query("SELECT*FROM stories WHERE ID='17'");  $QQ=mysql_fetch_array($Q);	$R=mysql_query("SELECT*FROM stories WHERE ID='18'");  $RR=mysql_fetch_array($R);
		$S=mysql_query("SELECT*FROM stories WHERE ID='19'");  $SS=mysql_fetch_array($S);	$T=mysql_query("SELECT*FROM stories WHERE ID='20'");  $TT=mysql_fetch_array($T);

	




//		$ID=$AA['ID'];		$USER=$AA['User'];  	$SUBJECT=$AA['Subject'];   		$STORIES=$AA['Post'];  		$CREATED=$AA['created'];

//		$ID1=$BB['ID'];		$USER1=$BB['User'];  	$SUBJECT1=$BB['Subject'];  		$STORIES1=$BB['Post'];  	$CREATED1=$BB['created'];

//		$ID2=$CC['ID'];		$USER2=$CC['User'];  	$SUBJECT2=$CC['Subject'];  		$STORIES2=$CC['Post'];  	$CREATED2=$CC['created'];

//		$ID3=$DD['ID'];		$USER3=$DD['User'];  	$SUBJECT3=$DD['Subject'];   	$STORIES3=$DD['Post'];  	$CREATED3=$DD['created'];

//		$ID4=$EE['ID'];		$USER4=$EE['User'];  	$SUBJECT4=$EE['Subject'];  		$STORIES4=$EE['Post'];  	$CREATED4=$EE['created'];

//		$ID5=$FF['ID'];		$USER5=$FF['User'];  	$SUBJECT5=$FF['Subject'];  		$STORIES5=$FF['Post'];  	$CREATED5=$FF['created'];

//		$ID6=$GG['ID'];		$USER6=$GG['User'];  	$SUBJECT6=$GG['Subject'];   	$STORIES6=$GG['Post'];  	$CREATED6=$GG['created'];

//		$ID7=$HH['ID'];		$USER7=$HH['User'];  	$SUBJECT7=$HH['Subject'];  		$STORIES7=$HH['Post'];  	$CREATED7=$HH['created'];

//		$ID8=$II['ID'];		$USER8=$II['User'];  	$SUBJECT8=$II['Subject'];  		$STORIES8=$II['Post'];  	$CREATED8=$II['created'];

//		$ID9=$JJ['ID'];		$USER9=$JJ['User'];  	$SUBJECT9=$JJ['Subject'];   	$STORIES9=$JJ['Post'];  	$CREATED9=$JJ['created'];

//		$ID10=$KK['ID'];	$USER10=$KK['User'];  	$SUBJECT10=$KK['Subject'];  	$STORIES10=$KK['Post'];  	$CREATED10=$KK['created'];

//		$ID11=$LL['ID'];	$USER11=$LL['User'];  	$SUBJECT11=$LL['Subject'];  	$STORIES11=$LL['Post'];  	$CREATED11=$LL['created'];

//		$ID12=$MM['ID'];	$USER12=$MM['User'];  	$SUBJECT12=$MM['Subject'];   	$STORIES12=$MM['Post'];  	$CREATED12=$MM['created'];

//		$ID13=$NN['ID'];	$USER13=$NN['User'];  	$SUBJECT13=$NN['Subject'];  	$STORIES13=$NN['Post'];  	$CREATED13=$NN['created'];

//		$ID14=$OO['ID'];	$USER14=$OO['User'];  	$SUBJECT14=$OO['Subject'];  	$STORIES14=$OO['Post'];  	$CREATED14=$OO['created'];

//		$ID15=$PP['ID'];	$USER15=$PP['User'];  	$SUBJECT15=$PP['Subject'];   	$STORIES15=$PP['Post'];  	$CREATED15=$PP['created'];

//		$ID16=$QQ['ID'];	$USER16=$QQ['User'];  	$SUBJECT16=$QQ['Subject'];  	$STORIES16=$QQ['Post'];  	$CREATED16=$QQ['created'];

//		$ID17=$RR['ID'];	$USER17=$RR['User'];  	$SUBJECT17=$RR['Subject'];  	$STORIES17=$RR['Post'];  	$CREATED17=$RR['created'];

//		$ID18=$SS['ID'];	$USER18=$SS['User'];  	$SUBJECT18=$SS['Subject'];   	$STORIES18=$SS['Post'];  	$CREATED18=$SS['created'];

//		$ID19=$TT['ID'];	$USER19=$TT['User'];  	$SUBJECT19=$TT['Subject'];   	$STORIES19=$TT['Post'];  	$CREATED19=$TT['created'];



		$z=mysql_query("SELECT*FROM frontpage WHERE ID ='1'");  $zz=mysql_fetch_array($z);

		$FUSER=$zz['USER'];  	$FSUBJECT=$zz['SUBJECT'];   	$FSTORIES=$zz['POST'];


		?>
