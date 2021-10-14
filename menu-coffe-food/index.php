<?php  
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: /sharingcoffee/login");
    exit;
}
require 'functions.php';
// pagination
$data = 4;
$jumlahdata = count(query("SELECT * FROM coffeeandfood "));
$jumlah = round($jumlahdata / $data);

$menu = query("SELECT * FROM coffeeandfood LIMIT 0, $data");

// Search
if(isset($_POST["search"]) ) {
	$menu = search($_POST["keyword"]);
}

if(isset($_POST["coffee"]) ) {
	$menu = query("SELECT * FROM coffeeandfood LIMIT 2, 8");
	
}	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/img/icon.png">
</head>
<body>

<nav class="navbar navbar">
  <div class="container-fluid">
  	<img src="assets/img/icon.png" alt="" width="45" height="45" class="icon-navbar">	
  	<a id="navbar-title" class="navbar-brand" href="/sharingcoffee/home">Sharing Coffee</a>
   	<div class="icon-item">
   		<a href="" class="icon-link"><i class='bx bxl-twitter'></i></a>
   		<a href="" class="icon-link"><i class='bx bxl-facebook-circle'></i></a>
   		<a href="" class="icon-link"><i class='bx bxl-instagram' ></i></a>
   		
   	</div>
   	<div class="icon-contact top-0 end-0">
   		<a href="/sharingcoffee/home" class="icon-link-1"><img src="assets/img/logo-web.png" width="17" height="17" class="img-logo"></a>
		<a href="" class="icon-link-1"><img src="assets/img/logo-wa.png" width="17" height="17" class="img-logo"></a>
   	</div>
   	<a href="#" class="position-absolute top-0 end-0 link-button"><button type="button" class="btn  position-relative button-1">Order<svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill sub-button" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
	</button></a>
  </div>
</nav>
<section class="home" id="home">
	<div class="container home-item">
		<h2 class="home-title">Sharing Is Caring</h2>	
	</div>
	<div class="container home-search">
		<form class="d-flex" method="POST" action="">
	      <input class="form-control  search" type="search" placeholder="Search" aria-label="Search" name="keyword" required="" autocomplete="off">
	      <button class="btn button" type="submit" name="search" ><i class='bx bx-search'></i></button>
    	</form>
	</div>
	
</section>
<section class="menu" id="menu">
<h2 class="container menu-title">Menu</h2>
<?php if(isset($_POST["food"]) ) {
	$menu = query("SELECT * FROM coffeeandfood LIMIT 0, 2");
	
} ?>
<div class="container button-items">
<form method="POST" action="">
	<button name="coffee" class="menu-button"><i class='bx bx-coffee icon-menu'></i><br></button>	
	<button name="food" class="menu-button"><i class='bx bx-dish icon-menu'></i></button>	
</form>
</div>
<?php if(isset($_POST["coffee"]) ) : ?>
	<h3 class="container title-menu">Coffee</h3>
<?php endif; ?>
<?php if(isset($_POST["food"]) ) : ?>
	<h3 class="container title-menu">Food</h3>
<?php endif; ?>
<div class="container card-items" id="card-items">
	<div class="table-responsive">			
	<?php foreach($menu as $mn) : ?>
		<div class="card" >
			<img src="assets/img/<?= $mn["gambar"] ; ?>" class="card-img-top img-card" alt="...">
			<div class="card-body">
			<h5 class="card-title"><?= $mn["nama"]; ?></h5>
			  <h6 class="card-text"><?= $mn["harga"]; ?></h6>
			    <a href="views?id=<?= $mn["id"]; ?>" class="btn btn-primary cek">check</a>
			  </div>
			</div>
	<?php endforeach; ?>
	</div>
	</div>
</section>

<section class="footer">
	<div>
		<p>Copyrigth</p>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>
</html>