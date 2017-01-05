<?php
require("functions.php");


?>

<form method="POST" action="/resources/lib/insertEditPost.php">
	<input type="hidden" name="editAction" value="editPost">
	<input type="text" name="title" placeholder="Add title">
   <textarea name="content" placeholder="Add your text here"></textarea>
   <button type="submit">Post</button>
</form>
