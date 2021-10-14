<?php 
//import
require 'functions.php'; 
// ambil url 
$id = $_GET["id"];

// query

$mn = query("SELECT * FROM coffeeandfood WHERE id = '$id'")[0];



?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $mn["nama"]; ?></title>
</head>
<body>

</body>
</html>