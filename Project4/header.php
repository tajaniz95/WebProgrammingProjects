<?php
	echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Airline Reservation System</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<style>
			body{
				position: relative;
				margin: auto;
				left: 12%;
				background-color: #B0C4DE;
			}	
			.main{
				background-color: #B0C4DE;
			}

		</style>
	</head>
	<body>
	<div id="main">
		<a href="home.php" class="dropbtn5">HOME</a>
		<div class="dropdown">
		<button class="dropbtn">SELECT FLIGHTS</button>
		<div class="dropdown-content">
		<a href="book.php">Booking</a>
		</div>
		</div>
		<div class="dropdown1">
		<button class="dropbtn1">LOGIN</button>
		<div class="dropdown-content1">
		<a href="login.php">Login</a>
		<a href="register.php">Registration</a>  
		</div>
		</div>
		<div class="dropdown2">
		<button class="dropbtn2">ORDERS</button>
		<div class="dropdown-content2">
		<a href="inventory.php">View</a>
		</div>
		</div>
		<div class="dropdown3">
		<button class="dropbtn3">VIEW CART</button>
		<div class="dropdown-content3">
		<a href="shoppingcart.php">View cart</a>
		</div>
		</div>
		
		<div class="dropdown6">
		<button class="dropbtn6">LOGOUT</button>
		<div class="dropdown-content6">
		<a href="logout.php?logout">Logout</a>
		</div>
		</div>
	</div>';
		if ( isset($_SESSION['user'])!="" ) {
			echo '<span id="userWelcome">Hello, '. $_SESSION['user'] . "!</span>";
		 }
		
		
?>