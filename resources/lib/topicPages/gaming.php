<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$postInfo = dbGet($connection, "SELECT * FROM posts INNER JOIN users ON users.id = posts.uid WHERE posts.topic = 'Gaming';");
		$commentInfo = dbGet($connection, "SELECT * FROM comments INNER JOIN users ON users.id = comments.uid ORDER BY published DESC;");
		?>

		<?php
		foreach($postInfo as $post) {
			$postContent = $post["content"];
			$postTitle = $post["title"];
			$postPublished = $post["published"];
			$postUsername = $post["username"];
			$postAvatar = $post["avatar"];
			$uid = $post["uid"];
			$postid = $post["postid"];
			?>
			<div class="postWrapper">
				<div class="voteWrapper">
					<a href="/?vote=up&id=<?php echo $postid; ?>"><img id="upvote" src="/resources/img/images/uparrow.png" style="width: 25px; height: 10px;" alt=""></a>
					<p><?php countVotes($connection, $postid) ?></p>
					<a href="/?vote=down&id=<?php echo $postid; ?>"><img id="downvote" src="/resources/img/images/downarrow.png" style="width: 25px; height: 10px;" alt=""></a>
				</div>
				<div class="postAvatar">
					<img src="/resources/img/users/<?php echo $uid ?>/<?php echo $postAvatar; ?>" style="width: 100%; height: 100%;" alt="">
					<br>
					<p><?= $postUsername ?></p>
				</div>
					<div class="postContent">
						<h4><?= $postTitle; ?></h4> <br>
						<a href="#"><?= $postContent; ?></a><br>
					</div>
					<div class="postWrapperRight">
						<p><?= $postPublished ?></p>
						<br>
						<a id="<?= $postid ?>" class="comments" href="#">comments</a>
					</div>
				<br><br>
			</div>
			<div id="content-<?= $postid ?>" class="hide">
				<?php
				foreach ($commentInfo as $comments) {
					$commentUid = $comments["uid"];
					$commentAvatar = $comments["avatar"];
					?>
					<div class="commentWrapper">
						<div class="commentAvatar">
							<img src="/resources/img/users/<?= $commentUid ?>/<?= $commentAvatar; ?>" style="width: 100%; height: 100%;" alt="">
						</div>
						<?= $comments["content"]; ?>
					</div>
			<?php
				}
				 ?>
				<br>
				<?php if ($loggedIn) { ?>
				<form action="resources/lib/insertComment.php" method="POST">
					<input type="hidden" name="commentAction" value="createComment">
					<textarea class="commentInput" rows="4" cols="40" name="content" placeholder="Add your text here"></textarea>
					<br>
					<button class="commentInput" type="submit">Comment</button>
				</form>
				<?php } ?>
			</div>
			<?php
		}
		votePosts($connection, $loggedIn);
		?>
	</body>
</html>
