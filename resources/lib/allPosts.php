<?php

$postContent = dbGet($connection, "SELECT * FROM posts INNER JOIN users ON users.id = posts.uid ORDER BY published DESC;");

foreach($postContent as $post) {
	echo $post["content"] ." ". $post["name"] . "<br>";
}

 ?>
