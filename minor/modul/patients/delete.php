<?php	
	$patientsID = $r3;
	$query = $db->prepare("DELETE FROM patients where patientID=?");
    $delete=$query->execute(array($patientsID));
    Header ("Location: $url/patients/list");
	?>