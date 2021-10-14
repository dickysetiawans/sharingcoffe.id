<?php  
// connect to database
$conn = mysqli_connect("localhost","root","","cafe");

// sign up
function register($data){
	global $conn;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$nama = strtolower(stripslashes($data["nama"]));
	$email = strtolower(stripslashes($data["email"]));

	// check username email already use or not

	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username already in use');
			  </script>";
		return false;
	}
	$result2 = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
	if( mysqli_fetch_assoc($result2) ) {
		echo "<script>
				alert('Email already in use!!');
			  </script>";
		return false;
	}
	// check name not same username
	if( $nama == $username) {
		echo "<script>
				alert('name no be same username!!');
			  </script>";
		return false;
	}

	// check password
	if( $password !== $password2 ) {
		echo "<script>
				alert('Incorrect password!!');
			  </script>";
		return false;
	}

	// endkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	// insert data user to database
	mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password','$nama','$email')");
	return mysqli_affected_rows($conn);
}


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}




?>