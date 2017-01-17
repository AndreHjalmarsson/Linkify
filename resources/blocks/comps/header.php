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
			<div class="mainLinks">
				<li><a href="/">HOME</a></li>
				<li><a href="#">COMMUNITY</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="#">STORE</a></li>
			</div>
		</ul>
			<?php if ($loggedIn) {?>
				<div class="dropdown">
					<a id="dropBtn" href="#"><img src="/resources/img/images/menubtn.png" style="width: 35px; height: 30px;" alt=""></a>
					<div id="dropContent" class="hide">
						 <a href="/settings.php">Profile</a>
						 <br>
						 <a href="/logout.php">Log out</a>
					</div>
				</div>
			<?php } else {
				require("resources/blocks/authentication.php");
				} ?>
	</div>
	<div class="lowerHeader">
		<h1>LINKIFY</h1>
		<p>Share your thoughts</p>
	</div>
</header>
