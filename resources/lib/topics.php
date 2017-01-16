<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$postInfo = dbGet($connection, "SELECT topic FROM posts;");

		 ?>
		<div class="topics">
			<ul>
				<li><a id="allTopics" href="/">All topics</a></li>
				<li><a id="gaming" href="#">Gaming</a></li>
				<li><a id="movies"href="#">Movies/Tv-series</a></li>
				<li><a id="science" href="#">Science</a></li>
				<li><a id="sports" href="#">Sport</a></li>
			</ul>
		</div>
	</body>
</html>
