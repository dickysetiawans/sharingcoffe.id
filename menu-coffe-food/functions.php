<?php  
//connect databases
$conn = mysqli_connect("localhost","root","","menu");
// Search
function search($keyword){
	$query = "SELECT * FROM coffeeandfood
			WHERE 
			nama LIKE '%$keyword%'
			";
	return query($query);
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