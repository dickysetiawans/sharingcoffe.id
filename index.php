<?php
//session
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login");
    exit;
}

// import
require 'functions.php';
if( isset($_SESSION["login"])) {
 $account = query("SELECT * FROM users");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
	<title>Sharing Coffee</title>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/mobile.css"  media="all and (max-width: 500px)">
	
	<style type="text/css">
	/* galaxy */
	@media only screen and (max-width:400px){.title_home{margin: 60px;margin-top: 250px;position: absolute;margin-left: 70px;}.menu{height: 700px;}.menu-item{padding-top: 550px;}.menu1{height: 800px;}#menu-item{padding-top: 630px;margin-left: -20px;}.menu2{height: 800px;}.menu3{height: 700px;}.about{height: 750px;}p{font-size: 14px;}#list{font-size: 1.1rem;margin-bottom: 15px;}
	}

	</style>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/pad.css">
	<style type="text/css">
	/* iphone 5 */
	@media only screen and (max-width:350px){.menu{background-image: url(assets/img/mobile/ip/coffee1.png);}.title_home{margin: 40px;margin-top: 200px;position: absolute;margin-left: 50px;}.menu-item{padding:20px;padding-top: 550px;right: 10px;margin-left: 0;}.menu-title{color: #000;font-size: 1.8rem;font-weight: bold;}.menu-subtitle{color: #000;font-weight: bold;font-size:1.6rem;text-align: left;}#button{margin-left: 0;border: 2px solid#000;background-color: #000;color: #fff;text-decoration: none;width: 100px;box-shadow: 1px 1px 1px rgba(0,0,0,0.9);font-size: 1rem;}.menu1{background-image: url(assets/img/mobile/ip/coffee3.jpg);}#menu-item{margin-left: 7px;}.menu2{background-image: url(assets/img/mobile/ip/coffee4.png);}p{font-size: 12px;}.about{height:750px;}	
	}
	</style>
	<link rel="stylesheet" type="text/css" href="assets/padpro.css">
	<style type="text/css">
		@media only screen and (min-width:1024px){.link-menu:hover{color: #000;opacity: .8;}
	}
	</style>
  <link rel="shortcut icon" href="assets/img/icon.png">
	<style type="text/css">
		@media only screen and (min-width:1024px){.menu-item{padding:50px;padding-top: 180px;margin-left: 63%; 
	}
	</style>
  <style type="text/css">
    li{list-style: none;}
    a{
      text-decoration: none;
    }
  </style>
</head>
<body>
<section class="home" id="home">
<nav class="navbar fixed-top navbar-expand-lg" id="mynav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #fff;">Sharing Coffee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <i class='bx bx-menu icon-toggle'></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav_ul">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home" id="nav_link">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about" id="nav_link">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu-coffe-food/menu" id="nav_link">DELEVERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu-coffe-food/menu" id="nav_link">COFFEE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" id="nav_link">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#location" id="nav_link">LOCATIONS</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php" id="nav_link">LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="title_home">
  <h3 class="title1" data-aos="zoom-in" id="title-home">Welcome To</h3>
  <h2 class="title2" data-aos="zoom-in" id="title-home">Sharing Coffee</h2>
  <h3 class="title3" data-aos="zoom-in" id="title-home">Sharing Is Caring</h3>
  <a href="menu-coffe-food/menu"><button class="btn btn-outline me-2" type="button" id="button2" data-aos="fade-up">Menu</button></a>
  <a href="#menu"><button class="btn btn-outline me-2" type="button" id="button2" style="background-color: #fff; color: #000;">Read more <i class='bx bxs-chevron-down'></i></button></a>
</div>
  
</section>

<!--menu-->
<section class="menu" id="menu">
  <div class="menu-item">
    <h2 class="menu-title">Banana Coffee</h2>
    <h3 class="menu-subtitle">Available now</h3>
    <a href="#" style="text-decoration: none;"><button class="btn btn-outline" type="button" id="button">Check</button></a>
  </div>
</section>

<section class="menu1" id="menu1">
  <div class="menu-item" id="menu-item">
    <h2 class="menu-title" >Coffee Beer</h2>
    <h3 class="menu-subtitle">Available now</h3>
    <a href="#"><button class="btn btn-outline" type="button" id="button">Check</button></a>
  </div>
</section>
<section class="menu2" id="menu2">
  <div class="menu-item" id="menu-item">
    <h2 class="menu-title">Red Velvet</h2>
    <h3 class="menu-subtitle">Available now</h3>
    <a href="#"><button class="btn btn-outline" type="button" id="button">Check</button></a>
  </div>
</section>
<section class="menu3" id="menu3">
  <div class="menu-item">
    <h2 class="menu-title">Chocomalt</h2>
    <h3 class="menu-subtitle">Available now</h3>
    <a href="#"><button class="btn btn-outline" type="button" id="button">Check</button></a>
  </div>
</section>

<!-- About -->
<section class="about" id="about">
  <img src="assets/img/bg.png" class="about_img">
  <div class="about_items">
    <h2 class="about_subtile">About Us</h2>
    <p class="about_text">Sharing coffee is a kind of cafe located in Matraman. We also provide various <br>types of coffee and food.<br>7.00 pm - 12.00 pm</p>
    <p></p>
    <a href=""><button class="btn btn-outline" type="button" id="button3">More</button></a>
  </div>
</section>

<!-- location -->
<section class="location" id="location">
  <div class="location_container">
    <p class="text1" id="text-locaation">
  LOCATED ON THE JALAN MATRAMAN,</p> 
  <p class="text2" id="text-locaation"> FRONT OF THE HOTEL MEGA.
  WE ARE </p>
  <p class="text3" id="text-locaation">READY TO LOVE YOUR NIGHT WITH A VARIETY</p>
  <p class="text4" id="text-locaation"> OF FOOD AND DRINKING MENU.OUR</p>
  <p class="text5" id="text-locaation"> SERVICES ARE ALSO VERY FRIENDLY AS WE </p>
  <p class="text6" id="text-locaation">ARE SURE YOU WILL ENJOY A </p>
  <p class="text7" id="text-locaation">RELAXING NIGHT</p>
  </div>
</section>
<div class="image"></div>

<!-- open -->
<section class="opening">
  <div class="open" id="open">
    <h2 class="opening_title">Opening Times</h2>
    <li class="list1" id="list">
    Can come directly from 7.00 pm- 12.00 pm
    </li>
    <li class="list"id="list">
    Online is open from 7.00 pm- 9.00 pm
    </li>
    <li class="list"id="list">
    Monday - Saturday: 7.00 pm- 12.00 pm
    </li>
    <li class="list2" id="list">
    Sunday: 6.00 pm - 1.00 am</li>
  </div>
  <div class="open_" id="open">
    <h2 class="opening_title">
      Menu
    </h2><br>
    <li class="list-1">
      <a href="#"class="link-menu">Coffee</a>
    </li>
    <li class="list-1">
      <a href="#"class="link-menu">Food</a>
    </li>
  </div>
</section>
<a href="#" class="top"><i class='bx bxs-chevron-up' class="top-icon"></i></a>
<footer class="footer">
<div class="footer-container">
  <div class="container-footer" id="container-footer">
    <h3 class="title-footer">Menu</h3>
    <li class="list-link">
      <a href="#" class="link-footer">About Us</a>
    </li> 
    <li class="list-link">
      <a href="#" class="link-footer">Orders History</a>
    </li>
    <li class="list-link">
      <a href="#" class="link-footer">Advanced Seacrh</a>
    </li>
    <li class="list-link">     
      <a href="account.php" class="link-footer">Account</a>
    </li>
  </div>

  <div class="container-footer-2"  id="container-footer">
    <h3 class="title-footer">Other</h3>
    <li class="list-link">
      <a href="#" class="link-footer">Latest</a>
    </li> 
    <li class="list-link">
      <a href="#" class="link-footer">shop</a>
    </li>
    <li class="list-link">
      <a href="#" class="link-footer">Payment</a>
    </li>
    <li class="list-link">
      <a href="#" class="link-footer">More</a>
    </li>
  </div>
  <div class="container-footer-3"  id="container-footer">
    <h3 class="title-footer">Contact</h3>
    <li class="list-footer">
      Location:<br>
      Jln Matraman, in front of<br> the Mega Hotel
    </li> 
    <li class="list-footer">
      Phone:<br>
      (62)859-2063-1393
    </li>
    <li class="list-footer">
     Email:<br>
     sharingcoffee@gmail.com
    </li>
  </div>
  <div class="container-footer-4"  id="container-footer">
    <h3 class="title-footer">Join </h3>
    <li class="list-footer" id="list-footer">
      Please those who want to buy, can come directly or buy online
    </li>
    <label style="color: #fff; font-size: 1.2rem; font-weight: bold; border-bottom: 1px solid #fff; margin-bottom: 10px; width: 200px; padding-bottom: 10px;margin-top: 5px;" class="account-us">Follow Us</label>
    <li>   	
    	<a href="#" class="icon-link">
    		<i class='bx bxl-facebook'></i>
    	</a>
    	<a href="#" class="icon-link">
    		<i class='bx bxl-instagram'></i>
    	</a>
    	<a href="#" class="icon-link">
    		<i class='bx bxl-twitter'></i>
    	</a>
    	<a href="#" class="icon-link">
    		<i class='bx bxl-linkedin-square' ></i>
    	</a>
    </li>
  </div>
</div>
	<div class="footer-2">
  	<p class="text-footer">Copyright © 2020 <span> | </span>By SharingCoffee</p>
  </div>
</footer>
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
$(window).scroll(example);
AOS.init();
function example() {
  var tempScrollTop = $(window).scrollTop();
  console.log(tempScrollTop.toString());

  if(tempScrollTop >= 100){
    $(".navbar").removeClass("navbar-2");
    $(".navbar").addClass("navbar-1");
  }else{
    $(".navbar").addClass("navbar-2");
    $(".navbar").removeClass("navbar-1");
  }

  if(tempScrollTop >= 250){
    $(".top").addClass("top-2");
  }else{
    $(".top").removeClass("top-2");
  }

};
  
</script>
</body>
</html>