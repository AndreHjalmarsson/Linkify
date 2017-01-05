<?php
session_start();
require("functions.php");
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
		$uid = $_SESSION["login"]["uid"];

		$posts = dbGet($connection, "SELECT * FROM posts INNER JOIN users ON users.id = posts.uid WHERE uid = '$uid' ORDER BY published DESC;");
		$commentInfo = dbGet($connection, "SELECT * FROM comments INNER JOIN users ON users.id = comments.uid ORDER BY published DESC;");

		foreach($posts as $post) {
			$postContent = $post["content"];
			$postTitle = $post["title"];
			$postPublished = $post["published"];
			$postUsername = $post["username"];
			$postAvatar = $post["avatar"];
			$uid = $post["uid"];
			$postid = $post["postid"];
			?>

			<div class="placeholderAvatar"><img src="/resources/img/users/<?php echo $uid ?>/<?php echo $postAvatar; ?>" style="width: 100%; height: 100%;" alt=""></div>
			<div class="postContent">
				<h4><?= $postTitle; ?></h4> <br>
				<a href="#"><?= $postContent; ?></a><br>
				<a class="comments" href="#">comments</a>
			</div>
			<br>
			<a href="editPost.php">Edit</a>

			<div class="hide" id="content">
				<?php
				foreach ($commentInfo as $comments) {
					echo $comments["content"] . " - " . $comments["name"] . "<br>";
				}
				 ?>
				<br>
				<form action="resources/lib/insertComment.php" method="POST">
					<input type="hidden" name="commentAction" value="createComment">
					<textarea name="content" placeholder="Add your text here"></textarea>
					<button type="submit">Comment</button>
				</form>
			</div>
			<br><br>

		<?php
		}
		?>
		<script src="/resources/js/script.js"></script>
	</body>
</html>
