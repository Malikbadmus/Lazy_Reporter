<?php
		include('configuration.php');
		session_start();

	

		
		//$A=mysql_query("SELECT*FROM stories WHERE ID='1'");   $AA=mysql_fetch_array($A);	$B=mysql_query("SELECT*FROM stories WHERE ID='2'");   $BB=mysql_fetch_array($B);

	//	$C=mysql_query("SELECT*FROM stories WHERE ID='3'");   $CC=mysql_fetch_array($C);	$D=mysql_query("SELECT*FROM stories WHERE ID='4'");   $DD=mysql_fetch_array($D);
///
	//	$E=mysql_query("SELECT*FROM stories WHERE ID='5'");   $EE=mysql_fetch_array($E);	$F=mysql_query("SELECT*FROM stories WHERE ID='6'");   $FF=mysql_fetch_array($F);
///
	//	$G=mysql_query("SELECT*FROM stories WHERE ID='7'");   $GG=mysql_fetch_array($G);	$H=mysql_query("SELECT*FROM stories WHERE ID='8'");   $HH=mysql_fetch_array($H);
	//	$I=mysql_query("SELECT*FROM stories WHERE ID='9'");   $II=mysql_fetch_array($I);	$J=mysql_query("SELECT*FROM stories WHERE ID='10'");  $JJ=mysql_fetch_array($J);

	//	$K=mysql_query("SELECT*FROM stories WHERE ID='11'");  $KK=mysql_fetch_array($K);	$L=mysql_query("SELECT*FROM stories WHERE ID='12'");  $LL=mysql_fetch_array($L);

	//	$M=mysql_query("SELECT*FROM stories WHERE ID='13'");  $MM=mysql_fetch_array($M);	$N=mysql_query("SELECT*FROM stories WHERE ID='14'");  $NN=mysql_fetch_array($N);

	//	$O=mysql_query("SELECT*FROM stories WHERE ID='15'");  $OO=mysql_fetch_array($O);	$P=mysql_query("SELECT*FROM stories WHERE ID='16'");  $PP=mysql_fetch_array($P);

	//	$Q=mysql_query("SELECT*FROM stories WHERE ID='17'");  $QQ=mysql_fetch_array($Q);	$R=mysql_query("SELECT*FROM stories WHERE ID='18'");  $RR=mysql_fetch_array($R);

	//	$S=mysql_query("SELECT*FROM stories WHERE ID='19'");  $SS=mysql_fetch_array($S);	$T=mysql_query("SELECT*FROM stories WHERE ID='20'");  $TT=mysql_fetch_array($T);

	




	//	$ID=$AA['ID'];		$USER=$AA['User'];  	$SUBJECT=$AA['Subject'];   		$STORIES=$AA['Post'];  		$CREATED=$AA['created'];

	//	$ID1=$BB['ID'];		$USER1=$BB['User'];  	$SUBJECT1=$BB['Subject'];  		$STORIES1=$BB['Post'];  	$CREATED1=$BB['created'];

	//	$ID2=$CC['ID'];		$USER2=$CC['User'];  	$SUBJECT2=$CC['Subject'];  		$STORIES2=$CC['Post'];  	$CREATED2=$CC['created'];

	//	$ID3=$DD['ID'];		$USER3=$DD['User'];  	$SUBJECT3=$DD['Subject'];   	$STORIES3=$DD['Post'];  	$CREATED3=$DD['created'];

	//	$ID4=$EE['ID'];		$USER4=$EE['User'];  	$SUBJECT4=$EE['Subject'];  		$STORIES4=$EE['Post'];  	$CREATED4=$EE['created'];
//
//		$ID5=$FF['ID'];		$USER5=$FF['User'];  	$SUBJECT5=$FF['Subject'];  		$STORIES5=$FF['Post'];  	$CREATED5=$FF['created'];

//		$ID6=$GG['ID'];		$USER6=$GG['User'];  	$SUBJECT6=$GG['Subject'];   	$STORIES6=$GG['Post'];  	$CREATED6=$GG['created'];

//		$ID7=$HH['ID'];		$USER7=$HH['User'];  	$SUBJECT7=$HH['Subject'];  		$STORIES7=$HH['Post'];  	$CREATED7=$HH['created'];

//		$ID8=$II['ID'];		$USER8=$II['User'];  	$SUBJECT8=$II['Subject'];  		$STORIES8=$II['Post'];  	$CREATED8=$II['created'];

//		$ID9=$JJ['ID'];		$USER9=$JJ['User'];  	$SUBJECT9=$JJ['Subject'];   	$STORIES9=$JJ['Post'];  	$CREATED9=$JJ['created'];
//
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




		$za=mysql_query("SELECT*FROM stories WHERE ID ='1'");  $zza=mysql_fetch_array($za);		$zb=mysql_query("SELECT*FROM stories WHERE ID ='2'");  $zzb=mysql_fetch_array($zb);

		$zc=mysql_query("SELECT*FROM stories WHERE ID ='3'");  $zzc=mysql_fetch_array($zc);		$zd=mysql_query("SELECT*FROM stories WHERE ID ='4'");  $zzd=mysql_fetch_array($zd);

		$ze=mysql_query("SELECT*FROM stories WHERE ID ='5'");  $zze=mysql_fetch_array($ze);		$zf=mysql_query("SELECT*FROM stories WHERE ID ='6'");  $zzf=mysql_fetch_array($zf);

		$zg=mysql_query("SELECT*FROM stories WHERE ID ='7'");  $zzg=mysql_fetch_array($zg);		$zh=mysql_query("SELECT*FROM stories WHERE ID ='8'");  $zzh=mysql_fetch_array($zh);

		$zi=mysql_query("SELECT*FROM stories WHERE ID ='9'");  $zzi=mysql_fetch_array($zi);		$zj=mysql_query("SELECT*FROM stories WHERE ID ='10'");  $zzj=mysql_fetch_array($zj);

		$zk=mysql_query("SELECT*FROM stories WHERE ID ='11'");  $zzk=mysql_fetch_array($zk);		$zl=mysql_query("SELECT*FROM stories WHERE ID ='12'");  $zzl=mysql_fetch_array($zl);

		$zm=mysql_query("SELECT*FROM stories WHERE ID ='13'");  $zzm=mysql_fetch_array($zm);		$zn=mysql_query("SELECT*FROM stories WHERE ID ='14'");  $zzn=mysql_fetch_array($zn);

		$zo=mysql_query("SELECT*FROM stories WHERE ID ='15'");  $zzo=mysql_fetch_array($zo);		$zp=mysql_query("SELECT*FROM stories WHERE ID ='16'");  $zzp=mysql_fetch_array($zp);

		$zq=mysql_query("SELECT*FROM stories WHERE ID ='17'");  $zzq=mysql_fetch_array($zq);		$zr=mysql_query("SELECT*FROM stories WHERE ID ='18'");  $zzr=mysql_fetch_array($zr);

		$zs=mysql_query("SELECT*FROM stories WHERE ID ='19'");  $zzs=mysql_fetch_array($zs);		$zt=mysql_query("SELECT*FROM stories WHERE ID ='20'");  $zzt=mysql_fetch_array($zt);


		$FUSER=$zza['USER'];  	$FSUBJECT=$zza['SUBJECT'];   	$FSTORIES=$zza['POST'];

		$FUSER1=$zzb['USER'];  	$FSUBJECT1=$zzb['SUBJECT'];   	$FSTORIES1=$zzb['POST'];

		$FUSER2=$zzc['USER'];  	$FSUBJECT2=$zzc['SUBJECT'];   	$FSTORIES2=$zzc['POST'];

		$FUSER3=$zzd['USER'];  	$FSUBJECT3=$zzd['SUBJECT'];   	$FSTORIES3=$zzd['POST'];

		$FUSER4=$zze['USER'];  	$FSUBJECT4=$zze['SUBJECT'];   	$FSTORIES4=$zze['POST'];

		$FUSER5=$zzf['USER'];  	$FSUBJECT5=$zzf['SUBJECT'];   	$FSTORIES5=$zzf['POST'];

		$FUSER6=$zzg['USER'];  	$FSUBJECT6=$zzg['SUBJECT'];   	$FSTORIES6=$zzg['POST'];

		$FUSER7=$zzh['USER'];  	$FSUBJECT7=$zzh['SUBJECT'];   	$FSTORIES7=$zzh['POST'];

		$FUSER8=$zzi['USER'];  	$FSUBJECT8=$zzi['SUBJECT'];   	$FSTORIES8=$zzi['POST'];

		$FUSER9=$zzj['USER'];  	$FSUBJECT9=$zzj['SUBJECT'];   	$FSTORIES9=$zzj['POST'];

		$FUSER10=$zzk['USER'];  $FSUBJECT10=$zzk['SUBJECT'];   	$FSTORIES10=$zzk['POST'];

		$FUSER11=$zzl['USER'];  $FSUBJECT11=$zzl['SUBJECT'];   	$FSTORIES11=$zzl['POST'];

		$FUSER12=$zzm['USER'];  $FSUBJECT12=$zzm['SUBJECT'];   	$FSTORIES12=$zzm['POST'];

		$FUSER13=$zzn['USER'];  $FSUBJECT13=$zzn['SUBJECT'];   	$FSTORIES13=$zzn['POST'];
 		
 		$FUSER14=$zzo['USER'];  $FSUBJECT14=$zzo['SUBJECT'];   	$FSTORIES14=$zzo['POST'];

 		$FUSER15=$zzp['USER'];  $FSUBJECT15=$zzp['SUBJECT'];   	$FSTORIES15=$zzp['POST'];

 		$FUSER16=$zzq['USER'];  $FSUBJECT16=$zzq['SUBJECT'];   	$FSTORIES16=$zzq['POST'];

 		$FUSER17=$zzr['USER'];  $FSUBJECT17=$zzr['SUBJECT'];   	$FSTORIES17=$zzr['POST'];

		$FUSER18=$zzs['USER'];  $FSUBJECT18=$zzs['SUBJECT'];   	$FSTORIES18=$zzs['POST'];

		$FUSER19=$zzt['USER'];  $FSUBJECT19=$zzt['SUBJECT'];   	$FSTORIES19=$zzt['POST'];
		?>




		