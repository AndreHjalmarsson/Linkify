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

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$urlPostid = substr($url, -6, 2);


		$posts = dbGet($connection, "SELECT * FROM posts WHERE postid = '$urlPostid';");


		foreach ($posts as $post) {
			$currentContent = $post["content"];
			$currentTitle = $post["title"];
			$currentTopic = $post["topic"];
		}

		?>
		<div class="editForm">
			<form method="POST" action="/resources/lib/insertEditPost.php">
				<input type="hidden" name="editAction" value="editPost">
				<input type="hidden" name="urlid" value="<?= $urlPostid ?>">
				<select name="newTopic" value="<?= $currentTopic ?>">
			    <option value="Gaming">Gaming</option>
			    <option value="Movies/Tv-series">Movies/Tv-series</option>
			    <option value="Science">Science</option>
			    <option value="Sport">Sport</option>
			  </select>
			  <br>
				<input type="text" name="newTitle" value="<?= $currentTitle ?>">
				<br>
			   <textarea name="newContent"><?= $currentContent ?></textarea>
				<br>
			   <button type="submit">Edit</button>
			</form>
		</div>
		<script src="/resources/js/edit.js"></script>
	</body>
</html>
