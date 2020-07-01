<?php

	function validReq($valor) {
	    if(trim($valor) == '') {
	       	return false;
	    } else {
	       	return true;
	    }
	 }

	if(validReq($_POST['name']) && validReq($_POST['phone']) && validReq($_POST['email']) && validReq($_POST['category']) &&  validReq($_POST['service']) &&  validReq($_POST['therapist']) && validReq($_POST['date']) && !empty($_POST['optWeek']) &&  validReq($_POST['schedule'])) {

		$optWeek = implode(", ", $_POST['optWeek']);
		
		$to      = 'emiliano0662@gmail.com';
		$subject = "Asignación de citas";

		$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	    
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body>';
		$message .='<h2>KIDZ</h2>';
		$message .= '<table rules="all" style="width: 100%; border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Nombre:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
		$message .= "<tr><td style='width: 120px;'><strong>E-mail:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Teléfono:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

		$message .= "<tr><td style='width: 120px;'><strong>Categoría:</strong> </td><td>" . strip_tags($_POST['category']) . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Servicio:</strong> </td><td>" . strip_tags($_POST['service']) . "</td></tr>";
		$message .= "<tr><td style='width: 120px;'><strong>Terapeuta:</strong> </td><td>" . strip_tags($_POST['therapist']) . "</td></tr>";

		$message .= "<tr><td style='width: 120px;'><strong>Fecha:</strong> </td><td>" . strip_tags($_POST['date']) . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Días:</strong> </td><td>" . $optWeek . "</td></tr>";
		$message .= "<tr><td style='width: 120px;'><strong>Horario:</strong> </td><td>" . strip_tags($_POST['schedule']) . "</td></tr>";

	    $message .= "</table>";
		$message .= "</body></html>";

		if(mail($to, $subject, $message, $headers)) {
	        echo json_encode(['alert' => 'valid', 'message' => 'Mensaje enviado!!!']);
	    }else {
	        echo json_encode(['alert' => 'error', 'message' => 'Mensaje no enviado!!!']);
	    }
	
	}else{
		echo json_encode(['alert' => 'error', 'message' => 'Faltan campos requeridos, por favor revisar!!!']);
	}
?>