<!DOCTYPE html>
<html>
<head>
	<title>Login/Registration</title>
<?php
	$this->load->view("partials/header.php");
?>
</head>
<body>
	<h2>Welcome!</h2>
	<div>
		<h3>Register</h3>
		<form action="/Users/register" method="post">
			First Name: <input type="text" name="firstName"><br>
			Last Name: <input type="text" name="lastName"><br>
			Email: <input type="text" name="email"><br>
			Password: <input type="password" name="password"><br>
			*password should be at least 8 characters<br>
			Confirm Password <input type="password" name="cPassword"><br>
			<input type="submit" value="Register">
		</form>
<?= 
		$this->session->flashdata('vals'); 
?>
	</div>
	<div>
		<h3>Login</h3>
		<form action="/Users/login" method="post">
			Email: <input type="text" name="email"><br>
			Password: <input type="password" name="password"><br>
			<input type="submit" value="Login">
	</div>
</body>
</html>