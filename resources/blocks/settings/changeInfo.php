<?php

$uid = $_SESSION["login"]["uid"];
$users = dbGet($connection, "SELECT * FROM users WHERE id = '$uid';");

foreach($users as $user) {
	$username = $user["username"];
	$email = $user["email"];
}


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="infoHead">
			<h2>Profile</h2>
			<p>Change your profile information</p>
			<br><br>
		</div>
		<!-- Form for changing standard info -->
		<form action="resources/lib/settings.php" method="POST">
			<input type="hidden" name="action" value="changeInfo">
			Username:<input class="usernameInputStyle" type="text" name="username" value="<?= $username; ?>">
			<br>
			Email:<input class="profileInputStyle" type="email" name="email" value="<?= $email; ?>">
			<br>
			Password:<input class="passwordInputStyle" type="password" name="password" placeholder="Password">
			<br>
			<button type="submit">Save changes</button>
		</form>

	</body>
</html>
