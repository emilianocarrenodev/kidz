<?php function validReq($valor) {
	    if(trim($valor) == '') {
	       	return false;
	    } else {
	       	return true;
	    }
	 }

	if(validReq($_POST['name']) && validReq($_POST['phone']) && validReq($_POST['email']) && validReq($_POST['category']) &&  validReq($_POST['service']) &&  validReq($_POST['therapist']) && validReq($_POST['date']) && !empty($_POST['optWeek']) &&  validReq($_POST['schedule'])) {

		$optWeek = implode(", ", $_POST['optWeek']);

		$to      = "info@kidzterapias.com";
		$subject = "Asignación de citas";

		$headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        
        $headers .= "To: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";
        $headers .= "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";

		$message = "<html><body>";
		$message .="<h2>KIDZ - Asignación de citas</h2>";
		$message .= "<table rules='all' style='width: 100%; border-color: #666;' cellpadding='10'>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Nombre:</strong> </td><td>" . $_POST['name'] . "</td></tr>";
		$message .= "<tr><td style='width: 120px;'><strong>E-mail:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Teléfono:</strong> </td><td>" . $_POST['phone'] . "</td></tr>";

		$message .= "<tr><td style='width: 120px;'><strong>Categoría:</strong> </td><td>" . $_POST['category'] . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Servicio:</strong> </td><td>" . $_POST['service'] . "</td></tr>";
		$message .= "<tr><td style='width: 120px;'><strong>Terapeuta:</strong> </td><td>" . $_POST['therapist'] . "</td></tr>";

		$message .= "<tr><td style='width: 120px;'><strong>Fecha:</strong> </td><td>" . $_POST['date'] . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Días:</strong> </td><td>" . $optWeek . "</td></tr>";
		$message .= "<tr><td style='width: 120px;'><strong>Horario:</strong> </td><td>" . $_POST['schedule'] . "</td></tr>";

	    $message .= "</table>";
		$message .= "</body></html>";
		
		if(mail($to,$subject,$message,$headers)) {
	        echo json_encode(['alert' => 'valid', 'message' => 'Mensaje enviado!!!']);
	    }else {
	        echo json_encode(['alert' => 'error', 'message' => 'Mensaje no enviado!!!']);
	    }
	
	}else{
		echo json_encode(['alert' => 'error', 'message' => 'Faltan campos requeridos, por favor revisar!!!']);
	}
?>