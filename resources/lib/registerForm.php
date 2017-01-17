<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/resources/css/style.css">
		<title></title>
	</head>
	<body>
		<?php
		require("functions.php");
		// Creating the variable if a login session has started
		$loggedIn = isset($_SESSION["login"]);

		if ($loggedIn) {
		    $user = getUserInfo($connection, $_SESSION["login"]["uid"]);
		}
		//Sets the error and message to variables
		$error = $_SESSION["error"] ?? "";
		$message = $_SESSION["message"] ?? "";
		 ?>
		 <header>
		 	<div class="headerContainer">
		 		<div class="logo">
		 			<img src="/resources/img/images/logo.png" style="width: 40px; height: 35px;" alt=""></a>
		 		</div>
		 		<ul>
		 			<div class="mainLinks">
		 				<li><a href="/">HOME</a></li>
		 				<li><a href="#">COMMUNITY</a></li>
		 				<li><a href="#">CONTACT US</a></li>
		 				<li><a href="#">STORE</a></li>
		 			</div>
		 		</ul>
		 	</div>
		 	<div class="lowerHeader">
		 		<h1>LINKIFY</h1>
		 		<p>Share your thoughts</p>
		 	</div>
		 </header>

		<div class="register">
			<h2>Sign up for Linkify</h2>
			<form action="/resources/lib/register.php" method="POST">
				<input class="registerStyle" type="text" name="fullname" placeholder="Full name"><br>
				<input class="registerStyle" type="text" name="username" placeholder="Username"><br>
				<input class="registerStyle" type="email" name="email" placeholder="Email"><br>
				<input class="registerStyle" type="password" name="password" placeholder="Password"><br>
				<button class="registerStyle" type="submit" class="register">Register for Linkify</button>
			</form>
		</div>

	</body>
</html>
