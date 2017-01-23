<?php
session_start();
require("resources/lib/functions.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/resources/css/style.css">
		<title></title>
	</head>
	<body>

		<?php

		require("resources/blocks/comps/header.php");

		$uid = $_SESSION["login"]["uid"];
		$users = dbGet($connection, "SELECT * FROM users WHERE id = '$uid';");

		foreach($users as $user) {
			$name = $user["name"];
			$username = $user["username"];
			$email = $user["email"];
			$avatar = $user["avatar"];
		}

        require("resources/blocks/comps/error.php");
        require("resources/blocks/comps/message.php");
		?>
		<div class="profileContainer">
			<div class="showProfile">
				<div class="profileAvatar">
					<img src="/resources/img/users/<?php echo $uid ?>/<?php echo $avatar; ?>" style="width: 100%; height: 100%;" alt="No avatar chosen">

				</div>
			</div>
			<div class="settingsBar"><br>
				<a href="#" id="info">Edit info</a> <br><br>
				<a href="#" id="password">Change Password</a> <br><br>
				<a href="#" id="avatar">Change avatar</a> <br>
			</div>
		</div>
			<div class="settingsContent">
				<div id="infoId" class="changeInfo">
					<?php require("resources/blocks/settings/changeInfo.php"); ?>
				</div>
				<div id="passwordId" class="hide">
					<?php require("resources/blocks/settings/changePassword.php"); ?>
				</div>
				<div id="avatarId" class="hide">
					<?php require("resources/blocks/settings/changeAvatar.php"); ?>
				</div>

			</div>
		<script src="/resources/js/settings.js"></script>
	</body>
</html>
