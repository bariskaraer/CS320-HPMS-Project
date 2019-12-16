<?php	
	$adminID = $r3;
	$query = $db->prepare("DELETE FROM admins where adminID=?");
    $delete=$query->execute(array($adminID));
    Header ("Location: $url/admins/list");
	?>