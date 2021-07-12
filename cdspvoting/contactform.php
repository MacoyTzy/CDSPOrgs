<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/por.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/cdspcoveredcourt.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
	<script>
		const constraints = {
			name: {
				presence: { allowEmpty: false }
			},
			email: {
				presence: { allowEmpty: false },
				email: true
			},
			message: {
				presence: { allowEmpty: false }
			}
		};
	 
		const form = document.getElementById('contact-form');
	 
		form.addEventListener('submit', function (event) {
		  const formValues = {
			  name: form.elements.name.value,
			  email: form.elements.email.value,
			  message: form.elements.message.value
		  };
	 
		  const errors = validate(formValues, constraints);
	 
		  if (errors) {
			event.preventDefault();
			const errorMessage = Object
				.values(errors)
				.map(function (fieldValues) { return fieldValues.join(', ')})
				.join("\n");
	 
			alert(errorMessage);
		  }
		}, false);
	 </script>
	 
	 <?php

	 $errors = [];
	 $errorMessage = '';
	 
	 if (!empty($_POST)) {
		 $name = $_POST['name'];
		 $email = $_POST['email'];
		 $message = $_POST['message'];
	 
		 if (empty($name)) {
			 $errors[] = 'Name is empty';
		 }
	 
		 if (empty($email)) {
			 $errors[] = 'Email is empty';
		 } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 $errors[] = 'Email is invalid';
		 }
	 
		 if (empty($message)) {
			 $errors[] = 'Message is empty';
		 }
	 
	 
		 if (empty($errors)) {
			 $toEmail = 'marco.abrahan@cdsp.edu.ph';
			 $emailSubject = 'New email from your contant form';
			 $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
	 
			 $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
			 $body = join(PHP_EOL, $bodyParagraphs);
	 
			 if (mail($toEmail, $emailSubject, $body, $headers)) {
				 header('Location: thank-you.html');
			 } else {
				 $errorMessage = 'Oops, something went wrong. Please try again later';
			 }
		 } else {
			 $allErrors = join('<br/>', $errors);
			 $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
		 }
	 }
	 
	 ?>


</body>
</html>
