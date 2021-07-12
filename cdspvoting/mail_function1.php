<?php
function sendOTP($email,$otp) {
    require("PHPMailer.php");
  require("SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP();

    $message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
    $mail->SMTPDebug = 1; 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "marcoabra47@gmail.com";
    $mail->Password = "kokokrunch23";
    $mail->SetFrom("marcoabra47@gmail.com");
    $mail->Subject = "OTP to Login";
    $mail->MsgHTML($message_body);
	$mail->IsHTML(true);
    $mail->AddAddress($email);
    $result = $mail->Send();

    return $result;
}
?>