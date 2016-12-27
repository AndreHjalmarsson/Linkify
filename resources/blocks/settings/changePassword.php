<?php
session_start();
require("../../lib/functions.php");
require("../../blocks/comps/header.php");
require("../../blocks/comps/error.php");
require("../../blocks/comps/message.php");

?>

<form action="../../lib/settings.php" method="POST">
	<input type="hidden" name="action" value="changePassword">
	<input type="password" name="newPassword" placeholder="New password">
	<input type="password" name="repeatPassword" placeholder="Repeat password">
	<input type="password" name="password" placeholder="Old password">
	<button type="submit" name="button">Save</button>
</form>
