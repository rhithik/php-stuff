<?php
$error = "";
$successMessage = "";
if ($_POST) {

  if (!isset($_POST["email"]) || empty($_POST["email"])) {

    $error .= "An email address is required.<br>";

  }

  if (!isset($_POST["message"]) || empty($_POST["message"])) {
    $error .= "The message field is required.<br>";

  }

  if (!isset($_POST["subject"]) || empty($_POST["subject"])) {
    $error .= "The subject is required.<br>";

  }


  if (!isset($_POST["email"]) ||  filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

    $error .= "The email address is invalid.<br>";

  }
  if ($error != "") {
    $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
  } else {
  	$emailTo = "jeffmchaledesigns@gmail.com";
  	$subject = $_POST['subject'];
  	$message = $_POST['message'];
  	$headers = "From: ".$_POST['email'];
  	if(mail($emailTo, $subject, $message, $headers)) {
  		$successMessage = '<div class="alert alert-success" role="alert"><strong>Your message was sent. We\'ll get back to you ASAP!</strong></div>';
	  } else {
  		$error = '<div class="alert alert-danger" role="alert"><strong>Your message could not be sent.</strong>' . $error . '</div>';
	  }
  }
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex flex-column">
	<h1>Get in touch!</h1>
	<div id="error"><?= $error ?></div>
	<div>
		<form method="post">
			<div class="form-group">
				<label for="email">Enter you e-mail address</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="example@email.com">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone.</small>
			</div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" name="subject" class="form-control" id="subject">
			</div>
			<div class="form-group">
				<label for="message">What would you like to ask?</label>
				<textarea name="message" id="message" rows="4" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary" id="submit">Send</button>
		</form>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
<!--
<script type="text/javascript">
    $("form").submit(function (e) {
        e.preventDefault();
        var error = "";
        if ($("#email").val() == "") {
            error += '<br>The email field is required.<br>';
        }
        $("#error").html(error);
        if ($("#subject").val() == "") {
            error += 'The subject field is required.<br>';
        }
        $("#error").html(error);
        if ($("#message").val() == "") {
            error += 'The message field is required.';
        }
        $("#error").html(error);
        if (error != "") {
            $("#error").html('<div class=\"alert alert-danger\" role=\"alert\"><strong>There were error(s) in your form:</strong>' + error + '</div>')
        } else {
						$("form").unbind("submit").submit();
        }
    });
</script>
-->
</body>
</html>