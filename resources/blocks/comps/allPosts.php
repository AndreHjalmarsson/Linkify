<?php

$posts = dbGet($connection, "SELECT * FROM posts ORDER BY published DESC;");

foreach($posts as $post) {
	echo $post["content"] . "<br>";
}

 ?>
