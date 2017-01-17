<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="passwordHead">
			<h2>Password</h2>
			<p>Change your password</p>
			<br><br>
		</div>
		<form action="resources/lib/settings.php" method="POST">
			<input type="hidden" name="action" value="changePassword">
			New password:<input class="newPasswordStyle" type="password" name="newPassword" placeholder="New password">
			<br>
			Repeat password:<input class="repeatPasswordStyle" type="password" name="repeatPassword" placeholder="Repeat password">
			<br>
			Old password:<input class="oldPasswordStyle" type="password" name="password" placeholder="Old password">
			<br>
			<button type="submit" name="button">Save</button>
		</form>

	</body>
</html>
