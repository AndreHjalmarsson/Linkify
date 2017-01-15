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
				<li><a href="#">Gaming</a></li>
				<li><a href="#">Movies/Tv-series</a></li>
				<li><a href="#">History</a></li>
				<li><a href="#">Science</a></li>
				<li><a href="#">Television</a></li>
				<li><a href="#">Sport</a></li>
			</ul>
		</div>
	</body>
</html>
