<!-- Form for making new posts -->
<form method="POST" action="/resources/lib/insertPost.php">
	<input type="hidden" name="postAction" value="createPost">
	<input type="text" name="title" placeholder="Add title">
   <textarea name="content" placeholder="Add your text here"></textarea>
	<select name="topic">
    <option value="Gaming">Gaming</option>
    <option value="Movies/Tv-series">Movies/Tv-series</option>
    <option value="Science">Science</option>
    <option value="Sport">Sport</option>
  </select>
   <button type="submit">Post</button>
</form>
