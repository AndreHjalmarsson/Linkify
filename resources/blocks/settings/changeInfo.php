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
		<link rel="stylesheet" href="/resources/css/style.css">
		<title></title>
	</head>
	<body>
		<form action="resources/lib/settings.php" method="POST">
			<input type="hidden" name="action" value="changeInfo">
			<input type="text" name="username" value="<?= $username; ?>">
			<input type="email" name="email" value="<?= $email; ?>">
			<input type="password" name="password">
			<button type="submit">Save changes</button>
		</form>

	</body>
</html>
