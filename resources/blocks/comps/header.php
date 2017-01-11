<?php
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
			<h1>L</h1>
		</div>
		<ul>
			<li><a href="#">COMMUNITY</a></li>
			<li><a href="#">CONTACT US</a></li>
			<li><a href="#">STORE</a></li>
		</ul>
	</div>
	<div class="lowerHeader">
		<h1>LINKIFY</h1>
		<p>Share your thoughts</p>
	</div>
</header>
