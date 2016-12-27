<?php
session_start();
require("../../lib/functions.php");
require("../../blocks/comps/header.php");

$uid = $_SESSION["login"]["uid"];
$users = dbGet($connection, "SELECT * FROM users WHERE id = '$uid';");

foreach($users as $user) {
	$username = $user["username"];
	$email = $user["email"];
}

require("../../blocks/comps/error.php");
require("../../blocks/comps/message.php");
?>

<form action="../../lib/settings.php" method="POST">
	<input type="hidden" name="action" value="changeInfo">
	<input type="text" name="username" value="<?= $username; ?>">
	<input type="email" name="email" value="<?= $email; ?>">
	<input type="password" name="password">
	<button type="submit">Save changes</button>
</form>
