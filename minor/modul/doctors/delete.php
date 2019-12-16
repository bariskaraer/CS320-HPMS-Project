<?php	
	$doctorID = $r3;
	$query = $db->prepare("DELETE FROM doctors where doctorsID=?");
	$delete=$query->execute(array($doctorID));
	?>