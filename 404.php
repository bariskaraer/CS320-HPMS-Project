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
	
	

		//** Client Side **//
		
		
	if($r1=='logout') { $in='minor/logout.php'; }
	elseif($r1=='login') { $in='minor/login.php'; }
	elseif($r1=='home')	{$in='minor/anasayfa.php';}

	elseif($r1=='patients')  {$in='minor/modul/patients/'.$r2.'.php';}
	elseif($r1=='complaints')  {$in='minor/modul/complaints/'.$r2.'.php';}
	elseif($r1=='appointments')  {$in='minor/modul/appointments/'.$r2.'.php';}
	elseif($r1=='admin')  {$in='minor/modul/admin/'.$r2.'.php';}


	
	
	
	
	//** Main Admin **//
		
		/*
	elseif($r1=='logout') { $in='major/logout.php'; }
	elseif($r1=='login') { $in='major/login.php'; }
	elseif($r1=='home')	{$in='major/home.php';}

	elseif($r1=='patients')  {$in='major/modul/patients/'.$r2.'.php';}
	elseif($r1=='students')  {$in='major/modul/students/'.$r2.'.php';}

	elseif($r1=='interview')  {$in='major/modul/interview/'.$r2.'.php';}
	elseif($r1=='dynamic')  {$in='major/modul/dynamic/'.$r2.'.php';}
		*/


}
	include $in;
?>
