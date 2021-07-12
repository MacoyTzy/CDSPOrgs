<?php

//login_verify.php



require 'connect.php';
include 'login_2fac.php';




$error = '';

$next_action = '';

sleep(2);

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'email')
	{
		if($_POST["email"] != '')
		{
			$data = array(
				':email'	=>	$_POST["email"]
			);

			$query = "
			SELECT * FROM students 
			WHERE email = :email
			";

			$statement = $connect->prepare($query);

			$statement->execute($data);

			$total_row = $statement->rowCount();

			if($total_row == 0)
			{
				$error = 'Email Address not found';

				$next_action = 'email';
			}
			else
			{
				$result = $statement->fetchAll();

				foreach($result as $row)
				{
					$_SESSION["id"] = $row["id"];

					$_SESSION["username"] = $row["username"];

					$_SESSION['email'] = $row["email"];

					$_SESSION["password"] = $row["password"];
				}
				$next_action = 'password';
			}
		}
		else
		{
			$error = 'Email Address is Required';

			$next_action = 'email';
		}
	}

	if($_POST["action"] == 'password')
	{
		if($_POST["password"] != '')
		{
			if(password_verify($_POST["password"], $_SESSION["password"]))
			{
				$login_otp = rand(100000,999999);

				$data = array(
					':id'		=>	$_SESSION["id"],
					':login_otp'	=>	$login_otp,
					':last_activity'=>	date('d-m-y h:i:s')
				);

				$query = "
				INSERT INTO students
				(id, login_otp, last_activity) 
				VALUES (:id, :login_otp, :last_activity)
				";

				$statement = $connect->prepare($query);

				if($statement->execute($data))
				{
					$_SESSION['id'] = $connect->lastInsertId();
					$_SESSION['login_otp'] = $login_otp;

					require 'class/class.phpmailer.php';

					$mail = new PHPMailer;

					$mail->IsSMTP();

					$mail->Host = 'smtp.hostinger.com';

					$mail->Port = '465';

					$mail->SMTPAuth = true;

					$mail->Username = 'admin@cdsporgs.tech';
					
					$mail->Password = 'Akosimarcs23.';

					$mail->SMTPSecure = '';

					$mail->From = 'admin@cdsporgs.tech';

					$mail->FromName = 'CDSP Orgs';

					$mail->AddAddress($_SESSION["email"]);

					$mail->WordWrap = 50;

					$mail->IsHTML(true);

					$mail->Subject = 'Verification code for Login';

					$message_body = '
					<p>Hello, For verify your login details, enter this verification code when prompted: <b>'.$login_otp.'</b>.</p>
					<p>Sincerely,</p>
					';

					$mail->Body = $message_body;

					if($mail->Send())
					{
						$next_action = 'otp';
					}
					else
					{
						$error = '<label class="text-danger">'.$mail->ErrorInfo.'</label>';
						$next_action = 'password';
					}
				}
			}
			else
			{
				$error = 'Wrong Password';
				$next_action = 'password';
			}
		}
		else
		{
			$error = 'Password is Required';
			$next_action = 'password';
		}
	}

	if($_POST["action"] == "otp")
	{
		if($_POST["user_otp"] != '')
		{
			if($_SESSION['login_otp'] == $_POST["user_otp"])
			{
				$_SESSION['id'] = $_SESSION['id'];
				unset($_SESSION["id"]);
				unset($_SESSION["email"]);
				unset($_SESSION["password"]);
				unset($_SESSION["login_otp"]);
			}
			else
			{
				$error = 'Wrong OTP Number';
				$next_action = 'otp';
			}
		}
		else
		{
			$error = 'OTP Number is required';
			$next_action = 'otp';
		}
	}





	$output = array(
		'error'			=>	$error,
		'next_action'	=>	$next_action
	);

	echo json_encode($output);
}


?>