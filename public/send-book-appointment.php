<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'plugin/PHPMailer/vendor/autoload.php';

function validReq($valor) {
    if(trim($valor) == '') {
       	return false;
    } else {
       	return true;
    }
 }

if(validReq($_POST['name']) && validReq($_POST['phone']) && validReq($_POST['email']) && validReq($_POST['category']) &&  validReq($_POST['service']) &&  validReq($_POST['therapist']) && validReq($_POST['date']) && !empty($_POST['optWeek']) &&  validReq($_POST['schedule'])) {

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug  = false;                                  // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'mail.kidzterapias.com';                // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'webmaster@kidzterapias.com';           // SMTP username
	    $mail->Password   = 'cf)l..(Rxv{h';                         // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	    $mail->CharSet    = PHPMailer::CHARSET_UTF8;

	    //Recipients
	    $mail->setFrom('webmaster@kidzterapias.com', 'Kidz Terapias');
	    $mail->addAddress('info@kidzterapias.com', 'Formulario de Citas');
	    //$mail->addAddress('emiliano0662@gmail.com', 'Joe User');

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Asignación de citas';

	    $mail->Body = "<html><body>";
		$mail->Body .="<h2>KIDZ - Asignación de citas</h2>";
		$mail->Body .= "<table rules='all' style='width: 100%; border-color: #666;' cellpadding='10'>";
		$mail->Body .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Nombre:</strong> </td><td>" . $_POST['name'] . "</td></tr>";
		$mail->Body .= "<tr><td style='width: 120px;'><strong>E-mail:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
		$mail->Body .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Teléfono:</strong> </td><td>" . $_POST['phone'] . "</td></tr>";

		$mail->Body .= "<tr><td style='width: 120px;'><strong>Categoría:</strong> </td><td>" . $_POST['category'] . "</td></tr>";
		$mail->Body .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Servicio:</strong> </td><td>" . $_POST['service'] . "</td></tr>";
		$mail->Body .= "<tr><td style='width: 120px;'><strong>Terapeuta:</strong> </td><td>" . $_POST['therapist'] . "</td></tr>";

		$mail->Body .= "<tr><td style='width: 120px;'><strong>Fecha:</strong> </td><td>" . $_POST['date'] . "</td></tr>";
		$mail->Body .= "<tr style='background: #eee;'><td style='width: 120px;'><strong>Días:</strong> </td><td>" . implode(", ", $_POST['optWeek']) . "</td></tr>";
		$mail->Body .= "<tr><td style='width: 120px;'><strong>Horario:</strong> </td><td>" . $_POST['schedule'] . "</td></tr>";

	    $mail->Body .= "</table>";
		$mail->Body .= "</body></html>";

	    $mail->send();

	    echo json_encode(['alert' => 'valid', 'message' => 'Mensaje enviado!!!']);
	    
	} catch (Exception $e) {
	    echo json_encode(['alert' => 'error', 'message' => 'Mensaje no enviado!!!']);
	}

}else{
	echo json_encode(['alert' => 'error', 'message' => 'Faltan campos requeridos, por favor revisar!!!']);
}
?>