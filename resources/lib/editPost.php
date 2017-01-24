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
		require("functions.php");
		require("../../../resources/blocks/comps/header.php");

		// Gets the post id from the url by getting the proper characters in the string
		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$urlPostid = substr($url, -6, 2);
		$posts = dbGet($connection, "SELECT * FROM posts WHERE postid = '$urlPostid';");

		foreach ($posts as $post) {
			$currentContent = $post["content"];
			$currentTitle = $post["title"];
			$currentTopic = $post["topic"];
		}

		?>
		<!-- Form for editing a post -->
		<div class="editPostForm">
			<form method="POST" action="/resources/lib/insertEditPost.php">
				<input type="hidden" name="editAction" value="editPost">
				<input type="hidden" name="urlid" value="<?= $urlPostid ?>">
				<select class="inputStyle" name="newTopic" value="<?= $currentTopic ?>">
			    <option value="Gaming">Gaming</option>
			    <option value="Movies/Tv-series">Movies/Tv-series</option>
			    <option value="Science">Science</option>
			    <option value="Sport">Sport</option>
			  </select>
			  <br>
				<input class="inputStyle" type="text" name="newTitle" value="<?= $currentTitle ?>">
				<br>
			   <textarea class="inputStyle" rows="13" cols="80" name="newContent"><?= $currentContent ?></textarea>
				<br>
			   <button type="submit">Edit</button>
			</form>
		</div>
		<script src="/resources/js/edit.js"></script>
	</body>
</html>
