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
	<div class="container">a
		<div class="logo">a
		</div>

	</div>
</header>
