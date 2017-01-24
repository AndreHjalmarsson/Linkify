<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="postContainer">
			<div class="postMenu">
				<ul>
					<li><a href="#" id="recent">Recent</a></li>
					<li><a href="#" id="rating">Rating</a></li>
					<li><a href="#" id="other">Other</a></li>
				</ul>
				<!-- If user is logged in show specific links to user-oriented pages -->
				<?php if ($loggedIn) { ?>
				<div class="ownLinks">
					<a href="/resources/lib/myPosts.php">My Posts</a>
					<a href="/resources/blocks/comps/writePost.php">New Topic</a>
				</div>
				<?php } ?>
			</div>
			<!-- Sets a class to show all posts when the user is in a default stage of the page. Sorts by recently made -->
		<div id="recentId" class="recent">
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
			<div class="postWrapper">
				<div class="voteWrapper">
					<!-- Sets a _GET request when a user votes on a post -->
					<a href="/?vote=up&id=<?= $postid; ?>"><img id="upvote" src="/resources/img/images/uparrow.png" style="width: 25px; height: 10px;" alt=""></a>
					<p><?php countVotes($connection, $postid) ?></p>
					<a href="/?vote=down&id=<?= $postid; ?>"><img id="downvote" src="/resources/img/images/downarrow.png" style="width: 25px; height: 10px;" alt=""></a>
				</div>
				<div class="postAvatar">
					<img src="/resources/img/users/<?= $uid ?>/<?php echo $postAvatar; ?>" style="width: 100%; height: 100%;" alt="No avatar chosen">
					<br>
					<p><i><?= $postUsername ?></i></p>
				</div>
					<div class="postContent">
						<h4><?= $postTitle; ?></h4> <br>
						<a href="#"><?= $postContent; ?></a><br>
					</div>
					<div class="postWrapperRight">
						<p><i><?= $postPublished ?></i></p>
						<br>
						<!-- Each comment link is given an id in order to display properly for each post -->
						<a id="<?= $postid ?>" class="comments" href="#">comments</a>
					</div>
				<br><br>
			</div>
			<!-- Each hidden div that displays comments is given an id -->
			<div id="content-<?= $postid ?>" class="hide">
				<?php
				$commentInfo = dbGet($connection, "SELECT * FROM comments INNER JOIN users ON users.id = comments.uid WHERE comments.post_id = $postid ORDER BY published DESC;");

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
				<!-- Comment form is shown only if user is logged in -->
				<?php if ($loggedIn) { ?>
				<form action="resources/lib/insertComment.php" method="POST">
					<input type="hidden" name="commentAction" value="createComment">
					<input type="hidden" name="postId" value="<?= $postid ?>">
					<textarea class="commentInput" name="content" placeholder="Add your text here"></textarea>
					<br>
					<button class="commentInput" type="submit">Comment</button>
				</form>
				<?php } ?>
			</div>
			<?php
		}
		votePosts($connection, $loggedIn);
		?>

		</div>
		<!-- Creates a div for all subtopic posts when user is sorting by each topic specifically. This is only shown when clicked. Each div requires a page where the posts are fetched -->
		<div id="gamingId" class="hide">
			<?php
				require("topicPages/gaming.php");
			?>
		</div>
		<div id="movieId" class="hide">
			<?php
				require("topicPages/movies.php");
			?>
		</div>
		<div id="scienceId" class="hide">
			<?php
				require("topicPages/science.php");
			?>
		</div>
		<div id="sportsId" class="hide">
			<?php
				require("topicPages/sports.php");
			?>
		</div>
	</div>
	<?php
	if ($loggedIn) {
	 ?>
	<script src="resources/js/script.js"></script>
	<?php } ?>
	</body>
</html>
