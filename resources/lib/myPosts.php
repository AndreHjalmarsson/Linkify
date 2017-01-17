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
		require("../blocks/comps/header.php");
		require("topics.php");
		$uid = $_SESSION["login"]["uid"];

		$posts = dbGet($connection, "SELECT * FROM posts INNER JOIN users ON users.id = posts.uid WHERE uid = '$uid' ORDER BY published DESC;");
		$commentInfo = dbGet($connection, "SELECT * FROM comments INNER JOIN users ON users.id = comments.uid ORDER BY published DESC;");
		?>
		<div class="postContainer">
			<div class="postMenu">
				<ul>
					<li><a href="#" id="recent">Recent</a></li>
					<li><a href="#" id="rating">Rating</a></li>
					<li><a href="#" id="other">Other</a></li>
				</ul>
				<div class="ownLinks">
					<a href="/resources/lib/myPosts.php">My Posts</a>
					<a href="/resources/blocks/comps/writePost.php">New Topic</a>
				</div>
			</div>

			<?php
			foreach($posts as $post) {
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
					</div>
						<div class="postContent">
							<h4><?= $postTitle; ?></h4> <br>
							<a href="#"><?= $postContent; ?></a><br>
							<a class="comments" href="#" data-post-id="<?= $uid ?>">comments</a>
						</div>
					<div class="editPost">
						<a href="editPostids/<?= $postid ?>.php">Edit Post</a>
						<br>
						<a href="?delete=confirmed&id=<?= $postid ?>">Delete Post</a>
						<?php
						$myfile = fopen("editPostids/$postid.php", "w");
						$txt = "<?php
						require('../../../resources/lib/editPost.php');
						 ?>";
						fwrite($myfile, $txt);
						fclose($myfile);
						?>
					</div>
				</div>
				<div id="content" class="hide">
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
						<textarea name="content" placeholder="Add your text here"></textarea>
						<button type="submit">Comment</button>
					</form>
					<?php } ?>
				</div>
				<?php
			}
			deletePosts($connection, $loggedIn);
			votePosts($connection, $loggedIn);
			?>

		</div>
		<script src="/resources/js/script.js"></script>
	</body>
</html>
