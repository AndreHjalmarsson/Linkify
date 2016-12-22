<?php
session_start();
require("resources/lib/functions.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php

		require("resources/blocks/comps/header.php");

		$uid = $_SESSION["login"]["uid"];
		$users = dbGet($connection, "SELECT * FROM users WHERE id = '$uid';");

		foreach($users as $user) {
			echo "Name: " . $user["name"] . "<br>" . "Username: " . $user["username"] . "<br>" . "Email: " .
			$user["email"] . "<br>" . '<a href='."/resources/blocks/settings/changeInfo.php".'>Edit information</a>'.
			"<br>" . '<a href='."/resources/blocks/settings/changePassword.php".'>Change password</a>' . "<br>";


		}


        require("resources/blocks/comps/error.php");
        require("resources/blocks/comps/message.php");
		?>
	</body>
</html>
