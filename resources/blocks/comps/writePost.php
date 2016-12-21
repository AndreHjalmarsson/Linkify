<!-- Form for making new posts -->
<form method="POST" action="/resources/lib/insertPost.php">
	<input type="hidden" name="postAction" value="createPost">
	<input type="text" name="title" placeholder="Add title">
   <textarea name="content" placeholder="Add your text here"></textarea>
   <button type="submit">Post</button>
</form>
