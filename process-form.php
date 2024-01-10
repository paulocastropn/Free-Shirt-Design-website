<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Home | Free Design Shirt</title>
    <meta name="author" content="Free Design Shirt, Inc.">
    <meta name="description" content="Free Design Shirt's High-Fidelity Record Player Promotional Website">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/global-nav.php";
		?>
    </header>
	<main>
		<div class="banner-process-form">
			<h2 style="margin-top: 0; margin-bottom: 32px; color: #e3cdbd;">Thank you for getting in touch!</h2>
		</div>
		<div style="background-color: #e3cdbd; padding: 5% 10%;">
			<?php
				/* All form elements must be checked - that required information is present and that all form data
				is in the correct format. Security checks must also be made before database queries are made */
				//Set a variable to capture the first name from the submitted form
				$fname =$_GET['fname'];
				// Set a variable to capture the last name from the submitted form
				$lname =$_GET['lname'];
				// Set a variable to capture the Subject from the submitted form
				$subject =$_GET['subject'];
				// Set a variable to capture the Message from the submitted form
				$message =$_GET['message'];
				// Set a variable to capture the email from the submitted form
				$email =$_GET['email'];
			
				//Output a friendly message to confirm that everything went well, including the $fname variable in a paragraph
				echo( '<p>Thank you, <strong>'.$fname.' '.$lname.'</strong>. Your message have been submitted.</p>');
			
				echo( '<p>The message you entered is below:<br><strong>'.$subject.': '.$message.'</strong></p>');

				echo( '<p>You will receive a reply shortly on the provided email: <strong>'.$email.'</strong></p>');
			?>
		</div>
	</main>
	<footer>
    <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/footer-nav.php";
		?>
    </footer>
</body>
</html>