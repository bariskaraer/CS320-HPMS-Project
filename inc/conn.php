<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Istanbul');
@set_time_limit(0);
session_start();



try {
	$db = new PDO("mysql:host=85.95.237.107;dbname=krakerso_hpms;charset=utf8", "krakerso_hpms", "barisokulproje2019");
	 $db->query("SET CHARACTER SET utf8");
	$db->query("SET NAMES utf8'");
$db->query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
	}
catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); }


/*
$ct = $db->prepare("select * from adminSettings");
$ct->execute(array());
if($ctr = $ct->fetch())
{
	$ctr_key=$ctr['oneSignalKey'];
	$wpName=$ctr['wpName'];
}
*/


$url="http://localhost/HPMS";
$aUrl=$url."/major";
$pUrl=$url."/minor";
?>