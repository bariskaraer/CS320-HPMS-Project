<?php
$u = explode("/", $_GET['u']);
if(!empty($u[0])){$r1=$u[0];}else{$r1=null;}
if(!empty($u[1])){$r2=$u[1];}else{$r2=null;}
if(!empty($u[2])){$r3=$u[2];}else{$r3=null;}
if(!empty($u[3])){$r4=$u[3];}else{$r4=null;}
if(!empty($u[4])){$r5=$u[4];}else{$r5=null;}

include 'inc/conn.php';
include 'inc/function.php';




if(empty($r1)){$in="index.php";}
	else
	{
	if($r1=='hizmetlerimiz') { $in='hizmetlerimiz.php'; }
	
	

	
	elseif($r1=='json')  {$in='json/'.$r2.'.php';}
	

		//** Client Side **//
		
		
	elseif($r1=='cikis') { $in='minor/cikis.php'; }
	elseif($r1=='giris') { $in='minor/giris.php'; }
	elseif($r1=='anasayfa')	{$in='minor/anasayfa.php';}

	elseif($r1=='patients')  {$in='minor/modul/books/'.$r2.'.php';}
	elseif($r1=='students')  {$in='minor/modul/students/'.$r2.'.php';}

	elseif($r1=='interview')  {$in='minor/modul/interview/'.$r2.'.php';}
	elseif($r1=='dynamic')  {$in='minor/modul/dynamic/'.$r2.'.php';}
	elseif($r1=='users')  {$in='minor/modul/users/'.$r2.'.php';}
	elseif($r1=='admins')  {$in='minor/modul/admin/'.$r2.'.php';}
	elseif($r1=='branch')  {$in='minor/modul/branch/'.$r2.'.php';}
	elseif($r1=='chat')  {$in='minor/modul/chat/'.$r2.'.php';}
	elseif($r1=='pool')  {$in='minor/modul/pool/'.$r2.'.php';}
	elseif($r1=='setting')  {$in='minor/modul/settings/'.$r2.'.php';}
	elseif($r1=='sue')  {$in='minor/modul/sue/'.$r2.'.php';}
	elseif($r1=='notification')  {$in='minor/modul/notification/'.$r2.'.php';}
	elseif($r1=='appointment')  {$in='minor/modul/appointment/'.$r2.'.php';}
	
	
	
	
	//** Main Admin **//
		
		
	elseif($r1=='logout') { $in='major/logout.php'; }
	elseif($r1=='login') { $in='major/login.php'; }
	elseif($r1=='home')	{$in='major/home.php';}

	elseif($r1=='patients')  {$in='major/modul/patients/'.$r2.'.php';}
	elseif($r1=='students')  {$in='major/modul/students/'.$r2.'.php';}

	elseif($r1=='interview')  {$in='major/modul/interview/'.$r2.'.php';}
	elseif($r1=='dynamic')  {$in='major/modul/dynamic/'.$r2.'.php';}
	


}
	include $in;
?>
