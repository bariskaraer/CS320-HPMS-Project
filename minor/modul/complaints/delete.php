<?php	
	$complaintsID = $r3;
	$query = $db->prepare("DELETE FROM complaints where complaintsID=?");
    $delete=$query->execute(array($complaintsID));
    Header ("Location: $url/complaints/list");
	?>