<?php
//session
session_start();
if( isset($_SESSION["login"]) ) {
	header("Location: home");
	exit;
}
if( isset($_SESSION["login"]) ) {
	header("Location: /menu-coffe-food/menu");
	exit;
}
//import 
require 'functions.php';

// check submit
if( isset($_POST["submit"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
	// check username
	if( mysqli_num_rows($result) === 1) {
		// check password

		$row = mysqli_fetch_assoc($result);
		$rows = mysqli_fetch_assoc($checkid);
		echo $rows["id"];
		
		if( password_verify($password, $row["password"]) ) {
			
			$_SESSION["login"] = true; 

			echo "<script>
					alert('Welcome user');
				  </script>";
			header("Location: home");
			exit;
			

		}
	}
	$error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/login.css">
	<link rel="shortcut icon" href="assets/img/icon.png">
</head>
<body>
<form method="POST" class="container">
	<div class="login">
		<h1>Login</h1>
		<?php if( isset($error) ) : ?>
			<p style="color: red;
			font-style: italic; text-align: center;">Username atau password salah</p>
		<?php endif; ?>
		<input type="text" name="username" placeholder="Username" required="" class="username" autocomplete="off"><br>
		<input type="password" name="password" placeholder="Password" required="" class="password"><br>
		<input type="hidden" name="id" >
		<button name="submit" type="submit" class="submit">Login</button>
		<a href="Register" class="link">New Account?</a>
		<br>
	</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
</body>
</html>