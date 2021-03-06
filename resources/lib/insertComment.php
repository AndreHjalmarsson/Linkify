<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require("functions.php");

    if (!checkLogin($connection)) {
        header("Location: /");
        die();
    }

    $action = $_POST["commentAction"];
	 //  Checks that the hidden input field matches the requires activity
    if ($action === "createComment") {
		 //  Checks that comment content has a value
        if (!isset($_POST["content"]) || empty($_POST["content"])) {
            $_SESSION["error"] = "Enter some content in order to comment.";
            header("Location: /");
            die();
        }

		  $post_id = $_POST["postId"];
		  $content = mysqli_real_escape_string($connection, $_POST["content"]);
        $uid = $_SESSION["login"]["uid"];
        $date = date("Y-m-d H:i:s");
		  //   Inserts comment information to the database
        dbPost($connection, "INSERT INTO comments (post_id, uid, content, published) VALUES ('$post_id', '$uid', '$content', '$date')");
        header("Location: /");
        die();
    }
} else {
    header("Location: /");
    die();
}
