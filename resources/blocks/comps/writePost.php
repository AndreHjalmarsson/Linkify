<?php
session_start();
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
		require("../../lib/functions.php");
		require("header.php");
		 ?>
		<!-- Form for making new posts -->
		<div class="newPost">
			<form method="POST" action="/resources/lib/insertPost.php">
				<input type="hidden" name="postAction" value="createPost">
				<select name="topic">
			    <option value="Gaming">Gaming</option>
			    <option value="Movies/Tv-series">Movies/Tv-series</option>
			    <option value="Science">Science</option>
			    <option value="Sport">Sport</option>
			  </select>
			  <br>
				<input type="text" name="title" placeholder="Add title">
				<br>
			   <textarea name="content" placeholder="Add your text here"></textarea>
				<br>
			   <button type="submit">Post</button>
			</form>
		</div>
	</body>
</html>
