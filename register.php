<?php 
session_start();
if( isset($_SESSION["login"]) ) {
	header("Location: home");
	exit;
}
//  import
require 'functions.php';

if( isset($_POST["submit"]) ) {
	if( register($_POST) > 0 ) {
		echo "<script>
				alert('Register berhasil');
				document.location.href = 'login';
			  </script>";
	}else{
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
	<title>Sign up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/registerr.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="shortcut icon" href="assets/img/icon.png">
</head>
<body>

<form action="" method="POST">
	<div class="login"data-aos="zoom-in">
		<h1>Sign Up</h1>
		<input type="text" name="nama" required="" class="nama" placeholder="Nama" autocomplete="off" maxlength="30" mminlength="5" ><br>
		<input type="text" name="username" placeholder="Username" required="" class="username" autocomplete="off" maxlength="15"><br>
		<input type="text" name="email" required="" placeholder="Email" class="email" autocomplete="off" maxlength="60"><br>
		<input type="password" name="password" placeholder="Password" required="" class="password" autocomplete="off" maxlength="15"><br>

		<input type="password" name="password2" placeholder="Confirm password" required="" class="password2" autocomplete="off"maxlength="15"><br>

		<button name="submit" type="submit" class="submit">Sign Up</button>
		<a href="login" class="link">Masuk</a>
		<br>
	</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({});
</script>
</body>
</html>