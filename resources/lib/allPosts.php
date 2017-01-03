<?php

$postInfo = dbGet($connection, "SELECT * FROM posts INNER JOIN users ON users.id = posts.uid ORDER BY published DESC;");


foreach($postInfo as $post) {
	$postContent = $post["content"];
	$postTitle = $post["title"];
	$postPublished = $post["published"];
	$postUsername = $post["username"];
	$postAvatar = $post["avatar"];
	$uid = $post["uid"];
	$postid = $post["postid"];

	?>

	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/resources/css/style.css">
			<title></title>
		</head>
		<body>
			<div class="placeholderAvatar"><img src="/resources/img/users/<?php echo $uid ?>/<?php echo $postAvatar; ?>" style="width: 100%; height: 100%;" alt=""></div>
			<div class="postContent">
				<h4><?= $postTitle; ?></h4> <br>
				<a href="#"><?= $postContent; ?></a>
			</div>
			<br><br>
		</body>
	</html>

<?php

}
