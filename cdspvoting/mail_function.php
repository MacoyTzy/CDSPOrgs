<?php	
	function sendOTP($email,$otp) {
		require("PHPMailer.php");
  require("SMTP.php");

		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 1;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 465;
		$mail->Username = "marcoabra47@gmail.com";
		$mail->Password = "kokokrunch23";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "gmail.com";
		$mail->SetFrom("marcoabra47@gmail.com");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>