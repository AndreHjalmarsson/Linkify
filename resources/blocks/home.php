<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		Welcome
		<br>
		<a href="/settings.php">Profile</a>
		<br>
		<a href="/logout.php">Log out</a>
		<br>
		<a href="/resources/blocks/comps/writePost.php">New Post</a>
		<br>
		<a href="/resources/lib/myPosts.php">My own</a>
		<br>
		<?php require("resources/lib/allPosts.php"); ?>
	</body>
</html>
