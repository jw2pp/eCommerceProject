<?php

// if(isset($_POST['submit'])){
	
// 	/* Namespace alias (don't need Exception this time). */
// 	use PHPMailer\PHPMailer\PHPMailer;

// 	/* Include the Composer generated autoload.php file. */
// 	require 'vendor/autoload.php';

//   	$name = $_POST['name'];
//   	$email = $_POST['email'];
//   	$message = $_POST['message'];
// 	$mail = new PHPMailer();
// 	$mail->setFrom('glidetechcompany@gmail.com', 'GlideTech');
// 	$mail->addAddress($email);
// 	$mail->Subject  = 'Contact Us Submission';
// 	$mail->Body     = "Thank you for contacting our service!";
// 	if(!$mail->send()) {
// 	  echo 'Message was not sent.';
// 	  echo 'Mailer error: ' . $mail->ErrorInfo;
// 	} else {
// 	  echo 'Message has been sent.';
// 	}
	
// }

	use PHPMailer\PHPMailer\PHPMailer;

	/* Include the Composer generated autoload.php file. */
	require('vendor/autoload.php');

	$email = $_POST['email'];

	/* Create a new PHPMailer object. */
	$mail = new PHPMailer();

	/* Set the mail sender. */
	$mail->setFrom('glidetechcompany@gmail.com', 'GlideTech');

	/* Add a recipient. */
	$mail->addAddress($email);

	/* Set the subject. */
	$mail->Subject = 'Your Message has been Recieved!';

	/* Set the mail message body. */
	$mail->Body = 'Thanks for contacting us! We will get back to you shortly!';

	if(!$mail->send()) {
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	} else {
	  echo 'Message has been sent.';
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/contact.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html"></a><span class="image featured"><img src="images/logo.png" width="40%" /></span>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="signup.html">Sign Up</a></li>
									<li><a href="login.html">Log In</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.html">Contact</a></li>
									<!-- <li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li> -->
								</ul>
							<li><a href="index.html">Purchase</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Contact Us</h2>
					</header>
					<div class="box">
						<form method="POST" action="contact.php">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Subject" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<button type="submit" name="submit" class="btn btn-default submit">Send Message</button>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>