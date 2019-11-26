<?php 
if($_POST){

$kullaniciID= $_POST['kullaniciID'];
$webSignalID= $_POST['webSignalID'];



		$userStatus = $db->prepare("select * from course_admin where course_adminID=?");
	$userStatus->execute(array($kullaniciID));

		if($userStatus->rowCount() !=0)
		{

			$query = $db->prepare("UPDATE course_admin SET webSignalID=?  WHERE  course_adminID=? ");

			if($insert=$query->execute(array($webSignalID,$kullaniciID))){
			echo '1';
			}else{
			echo '0';
			}

		}else{
			echo 'hata';
		}

}

?>