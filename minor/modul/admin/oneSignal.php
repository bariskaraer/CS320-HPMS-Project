<?php 


	
	
	
$content = array(
			"en" => $_POST["mesaj"]
			);
			$heading = array(
			   "en" => $_POST["gonderenadi"].' kişisinden yeni bir mesaj var.'
			);
    $fields = array(
			'app_id' => "58a0433f-4eab-4fb7-9e67-735e0e2f8d4e",
      'include_player_ids' => array($_POST['web']),
      'data' => array("foo" => "bar"),
      'headings' => $heading,
      'contents' => $content
    );
	$fields = json_encode($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);



?>