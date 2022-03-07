<?php

require 'RegisterController.php';
session_start();
if(isset($_POST['submit'])){
	$register = new RegisterController;
	$register->getData($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm-password']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register Here</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 100px;">
			<div class="col-4">
				<?php
					if(isset($_POST['submit'])){
						echo "<div class='alert alert-danger text-center' role='alert'>
							'".$register->message."'
						</div>";
					}
				?>
				<h1 class="text-center text-light">Register Here!</h1>
				<form method="post" action="register.php">
					<div class="form-group">
						<input type="text" name="name" placeholder="Name" class="form-control">
					</div>

					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control">
					</div>

					<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="confirm-password" placeholder="Password" class="form-control">
					</div>
					<input type="submit" name="submit" value="Register" class="btn btn-outline-light btn-block">
				</form>
				<div class="text-center">
					<a href="login.php" class="text-light">Anda sudah menpunyai akun?</a>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
