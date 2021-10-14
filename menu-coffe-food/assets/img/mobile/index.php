<?php  
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: /sharingcoffee/login");
    exit;
}

if( isset($_SESSION["login"]) ) {
	header("Location: /sharingcoffee/menu-coffe-food/menu");
	exit;
}
?>