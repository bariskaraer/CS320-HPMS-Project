<?php	
	$doctorID = $r3;
	$query = $db->prepare("DELETE FROM appointments where appointmentsID=?");
    $delete=$query->execute(array($appointmentsID));
    Header ("Location: $url/appointments/list");
	?>